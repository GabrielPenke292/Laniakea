<?php

namespace App\Controllers;

class Administrativo extends BaseController
{
	public function dashboard()
	{
		return view("administrativo/dashboard");
	}

    public function OpenAccount(){
        return view("administrativo/openAccount");
    }
}
