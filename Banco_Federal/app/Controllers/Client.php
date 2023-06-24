<?php

namespace App\Controllers;

use CodeIgniter\API\ResponseTrait;
use App\Controllers\BaseController;


class Client extends BaseController
{
    // Retorn a view principal
    public function home(){
        $dataView = [
            'page' => 'home',
        ];
        return view('client/home', $dataView);
    }

    public function extract(){
        $dataView = [
            'page' => 'extract',
        ];
        return view('client/extract/extract', $dataView);
    }

    /**
     * Retorna o modal de um movimento específico
     */
    public function moviment(int $id){
        return view('client/extract/movement_modal');
    }
}