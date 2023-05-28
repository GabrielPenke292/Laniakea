<?php

namespace App\Controllers;

use CodeIgniter\API\ResponseTrait;
use App\Controllers\BaseController;


class Client extends BaseController
{
    // Retorn a view principal
    public function home(){
        return view('client/home');
    }

    public function extract(){
        return view('client/extract/extract');
    }

    /**
     * Retorna o modal de um movimento específico
     */
    public function moviment(int $id){
        return view('client/extract/movement_modal');
    }
}