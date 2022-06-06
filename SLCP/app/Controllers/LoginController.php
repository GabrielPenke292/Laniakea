<?php

namespace App\Controllers;

use App\Models\Pessoa_Model;
use App\Models\Estado_Model;
use App\Models\Cidade_Model;
use App\Libraries\Hash;

class LoginController extends BaseController
{	

	public function forgotPasswordView(){
		$dados = [
			'title' => "Esqueci minha senha",
		];

		return view("Login/forgotPasswordView", $dados);
	}

}
