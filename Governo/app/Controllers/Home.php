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
}
