<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		return view('pages/index');
	}

	/**
	 * Retorna a view de login
	 */
	public function accountLoginView(){
		return view('pages/login/accountLogin');
	}

	/**
	 * Retorna a view de login administrativo
	 */
	public function accountLoginAdministrativeView(){
		if(session()->get('loggedUser') == true)
		{
			return redirect()->to(base_url('administrativo'));
		}

		return view('pages/login/accountLoginAdministrative');
	}

	/**
	 * Retorna a view de crédito
	 */
	public function creditView(){
		return view('pages/credit');
	}
}
