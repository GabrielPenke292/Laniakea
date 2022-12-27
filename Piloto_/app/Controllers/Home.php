<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{	
		$dados = ['title' => "Home"];
		return view('index', $dados);
	}

	public function dadosOficiais(){
		$dados = ['title' => "Dados Oficiais"];
		return view('dados/dadosOficiais', $dados);
	}
	
	public function historiaOficial(){
		$dados = ['title' => "História oficial"];
		return view('historia/historiaPais', $dados);
	}

	public function conhecendoProjeto(){
		$dados = ['title' => "Conhecendo o projeto"];
		return view('projeto/conhecendo', $dados);
	}
}
