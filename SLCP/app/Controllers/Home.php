<?php

namespace App\Controllers;

use App\Models\Pessoa_Model;
use App\Models\Estado_Model;
use App\Models\Cidade_Model;

class Home extends BaseController
{
	public function index()
	{	
		$estados = $this->getEstados();

		$dados = [
			'title' => "Home",
			"UFs"	=> $estados,
		];
		return view("home", $dados);
	}

	public function cadastrarPessoa(){

		$pessoas = new Pessoa_Model();


	}

	public function getCidadesByUF(){
		$cidades = new Cidade_Model();

		$id = $this->request->getGet("uf");

		$cidadesByUf = $cidades->getByUF($id);

		echo json_encode($cidadesByUf);		
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
}
