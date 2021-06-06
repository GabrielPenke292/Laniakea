<?php

namespace App\Controllers;

use App\Models\Pessoa_Model;
use App\Models\Estado_Model;
use App\Models\Cidade_Model;
use App\Libraries\Hash;

class Home extends BaseController
{	

	public function __construct(){
		helper(['form']);
	}

	public function index(){	
		if(session()->has('loggedUser')){
			$estados = $this->getEstados();

			$dados = [
				'title' 	=> "Home",
				"UFs"		=> $estados,
				"userName"	=> $_SESSION['userName'],
			];
	
			return view("home", $dados);				
		}

		$dados = [
			'title' => "Login",
		];

		return view("login", $dados);
	}

	public function cadastrarPessoa(){

		$pessoas = new Pessoa_Model();

		$dataInsert = [
			"PES_NOME" 					=> $this->request->getPost("name"), 
			"PES_SEXO"					=> $this->request->getPost("sexo"),
			"PES_DATA_NASC" 			=> $this->request->getPost('dataNasc'), 
			"PES_UF" 					=> $this->request->getPost('uf'), 
			"PES_CIDADE" 				=> $this->request->getPost('city'),  
			"PES_NOME_PAI" 				=> $this->request->getPost('nomePai'),
			"PES_NOME_MAE" 				=> $this->request->getPost('nomeMae'), 
			"PES_NUM_CARTORIO" 			=> $this->request->getPost('numCartorio'), 
			"PES_NUM_REGISTRO" 			=> $this->request->getPost('numRegistro'), 
			"PES_COD_USUARIO_CARTORIO" 	=> $this->request->getPost('codUsuario'),
		];

		if($pessoas->save($dataInsert)){
			return redirect()->to(BASE_URL)->with('success', "usuário inserido com sucesso!"); 
		}else{
			return redirect()->to(BASE_URL)->with('fail', "Algo deu errado! Contate o suporte de TI!"); 
		}
		
	}

	public function getCidadesByUF(){
		$cidades = new Cidade_Model();

		$id = $this->request->getGet("uf");

		$cidadesByUf = $cidades->getByUF($id);
		$data = ['cities'=>$cidadesByUf];
		return view('select_cidades', $data);

		$option = "<option selected class='bg-secondary'>Selecione";

		foreach ($cidadesByUf as $city) {
			$option = $option."<option value='".$city['CIDADE_ID']."'>".$city['CIDADE_NOME'];
		}

		echo json_encode($option);		
	}

	public function getEstados(){
		$estados = new Estado_Model();

		return $estados->findAll();
	}

	public function getEstadosUF(){
		$estados = new Estado_Model();

		return $estados->getEstadosUF();
	}

	public function getCidades(){
		$cidades = new Cidade_Model();
	}

	public function lastRegister(){
		$pessoas = new Pessoa_Model();

		// $todas_pessoas = $pessoas->findAll()->get("PES_ID");
		$lastRegister = $pessoas->getLastRegister();
		$proximoId = $lastRegister[0]["PES_ID"] + 1;
		$lastName = $lastRegister[0]["PES_NOME"];

		$dataReturn = [
			"proximoId" => $proximoId,
			"lastName"	=> $lastName
		];
		
		echo json_encode($dataReturn);
	}

	public function cadastroUsuarioPage(){
		$dados = [
			'title' => "Home",
		];

		return view("cadastroPage", $dados);
	}

	public function registerUser(){
		$pessoas = new Pessoa_Model();
		 
		$validation = $this->validate([
            'name'      =>  'required',
            'email'     =>  'required|valid_email|is_unique[funcionarios_cartorio.FUNCIONARIO_EMAIL]',
            'password'  =>  [
                    'rules' => 'required|min_length[5]|max_length[12]',
            ],
            'cpassword' =>  'required|min_length[5]|max_length[12]|matches[password]'
        ]);
        

        if(!$validation){
            return view("cadastroPage", ['validation'=>$this->validator, 'title' => "Registro"]);
        }else{
            $name = $this->request->getPost('name');
            $email = $this->request->getPost('email');
            $password = $this->request->getPost('password');   
			
			$nome = $pessoas->getIdByName($name);

			if($nome == null){
				return redirect()->to(BASE_URL)->with("fail", "Essa pessoa não existe na SLCP");
			}

            $values = [
                'FUNCIONARIO_NOME_ID'      	=>  $nome[0]['PES_ID'],
				'FUNCIONARIO_CARTORIO_ID'	=>  1,
                'FUNCIONARIO_EMAIL'     	=>  $email,
                'FUNCIONARIO_PASSWORD'  	=>  Hash::make($password)
            ];
            $funcionario = new \App\Models\Funcionario_Model();

            $query = $funcionario->insert($values);
            if(!$query){
                return redirect()->to(BASE_URL)->with("fail", "Algo deu errado");
            }
            return redirect()->to(BASE_URL)->with('success', 'Usuário registrado com sucesso');
        }
	}

	public function loginPage(){
		$dados = [
			'title' => "Login",
		];

		return view("login", $dados);
	}

	public function checkLogin(){
		$validation = $this->validate([
            'email'=>[
                'rules' =>'required|valid_email',
                'errors'=>[
                    'required'      =>  'Email é um campo obrigatório',
                    'valid_email'   =>  'Digite um email válido',
                    ]
                ],
            'password'=>[
                'rules'     =>  'required|min_length[5]|max_length[12]',
                'errors'    =>  [
                    'required'      =>  'Senha é um campo obrigatório',
                    'min_length'    =>  'A senha deve ter pelo menos 5 caracteres',
                    'max_length'    =>  'A senha deve ter no máximo 12 caracteres'
                ]
            ]
        ]);
		
		if(!$validation){
            return view("login", ['validation'=>$this->validator]);
        }else{  

            $email = $this->request->getGet('email');
            $password = $this->request->getGet('password');

            $funcionario = new \App\Models\Funcionario_Model();

            $userInfo = $funcionario->where('FUNCIONARIO_EMAIL', $email)->first();
            $userInfo = $funcionario->getData($email);
            $checkPassword = Hash::checkPassword($password, $userInfo[0]['FUNCIONARIO_PASSWORD']);

            if(!$checkPassword){
                session()->setFlashdata('fail', 'Incorrect password');
                return redirect()->to(BASE_URL.'login')->withInput();
            }else{
                $user_id = $userInfo[0]['FUNCIONARIO_ID'];
				$user_name = $userInfo[0]['PES_NOME'];
                session()->set('loggedUser', $user_id);
                session()->set('userName', $user_name);
                return redirect()->to(BASE_URL);
            }
        }

	}

	public function logout(){
		if(session()->has('loggedUser')){
            session()->remove('loggedUser');
        }
		return redirect()->to(BASE_URL.'login');
	}
}
