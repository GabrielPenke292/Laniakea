<?php

namespace App\Controllers;

class Home extends BaseController
{
    /**
     * Retorna a view da página inicial
     */
    public function index()
    {
        $page = [
            'title' => 'Home',
            'page' => 'home'
        ];
        return view('welcome_message', $page);
    }

    /**
     * Retorna a view da página 'o projeto'
     */
    public function projeto(){
        $page = [
            'title' => 'O Projeto',
            'page' => 'projeto'
        ];
        return view('projeto', $page);
    }

    /**
     * Retorna a view da página de dados
     */
    public function dados(){
        $page = [
            'title' => 'Dados',
            'page' => 'dados'
        ];
        return view('dados', $page);
    }

    /**
     * Retorna a view da página de links
     */
    public function links(){
        $page = [
            'title' => 'Links',
            'page' => 'links'
        ];
        return view('links', $page);
    }
}
