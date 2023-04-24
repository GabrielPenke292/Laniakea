<?php

namespace App\Controllers;

class LoginController extends BaseController
{
    public function login(){
        $login = $this->request->getPost();

    }

	public function loginAdministrative()
	{
		$login = $this->request->getPost();
	}

}
