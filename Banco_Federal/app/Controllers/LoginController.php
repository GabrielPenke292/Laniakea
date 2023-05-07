<?php

namespace App\Controllers;

class LoginController extends BaseController
{
    public function login(){
        $login = $this->request->getPost();

        $validation = $this->validate([
            'username'=>[
                'rules' =>'required|valid_user',
                'errors'=>[
                    'required'      =>  'Email é um campo obrigatório',
                    'valid_user'   =>  'Digite um email válido',
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

            $username = $this->request->getGet('username');
            $password = $this->request->getGet('password');

            $funcionario = new \App\Models\Funcionario_Model();
            $userModel = new \App\Models\User_Model();

            // $userInfo = $funcionario->where('FUNCIONARIO_EMAIL', $email)->first();
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

	public function loginAdministrative()
	{

		$login = $this->request->getPost();

        $validation = $this->validate([
            'username'=>[
                'rules' =>'required',
                'errors'=>[
                    'required'      =>  'Email é um campo obrigatório',
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

            $username = $this->request->getPost('username');
            $password = $this->request->getPost('password');

            $dataRequest = [
                'username' => $username,
                'password' => $password
            ];

            $client = \Config\Services::curlrequest(); // inicializa o curl

            $response = $client->request('POST', API_URL.'federal-bank/login/administrative', [
                'query' => $dataRequest // Dados passados na requisição
            ], false);
    
            $responseBody = json_decode($response->getBody()); //Corpo da Requisição

            if($responseBody->status){
                session()->set('loggedUser', true);
                session()->set('userName', $responseBody->data->peopleData->PES_NOME);
                session()->set('function', $responseBody->data->function->funcao_nome);
                return redirect()->to(BASE_URL . 'administrativo');

            }else{
                session()->setFlashdata('fail', 'Dados incorretos');
                return redirect()->to(BASE_URL . 'account-login-administrative')->withInput();
            }
        }
	}

    public function logout(){
        session()->destroy();
        return redirect()->to(BASE_URL);
    }

}
