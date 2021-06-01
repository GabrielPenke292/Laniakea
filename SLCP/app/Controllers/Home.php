<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{	
		$dados = ['title'=> "Home"];
		return view("home", $dados);
	}
}
