<?php

namespace App\Controllers;

use App\Models\Pessoa_Model;
use App\Models\Estado_Model;
use App\Models\Cidade_Model;

class Home extends BaseController
{
	public function index(){	
		$estados = $this->getEstados();

		$dados = [
			'title' => "Home",
			"UFs"	=> $estados,
		];

		return view("home", $dados);
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
			$msg = "Operação realizada com sucesso!";
		}else{
			$msg = "Ocorreu algum erro ao realizar a operação! Contate o administrador!";
		}
		return redirect()->to(BASE_URL); 
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

	public function getNextRegisterNumber(){
		$pessoas = new Pessoa_Model();

		// $todas_pessoas = $pessoas->findAll()->get("PES_ID");
		$maiorId = $pessoas->getMaiorId();
		$proximoId = $maiorId[0]["PES_ID"] + 1;
		
		echo json_encode($proximoId);
	}
}
