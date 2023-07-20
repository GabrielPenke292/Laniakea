<?php

namespace App\Controllers;

use CodeIgniter\API\ResponseTrait;
use App\Controllers\BaseController;


class Client extends BaseController
{
    // Retorn a view principal
    public function home(){
        //obtem os dados do cliente
        $response = $this->curl_get('client', $_SESSION);
        $responseBody = json_decode($response->getBody()); //Corpo da Requisição

        $dataView = [
            'page' => 'home',
            'client' => $responseBody->data->conta,
        ];
        return view('client/home', $dataView);
    }

    public function extract(){
        $response = $this->curl_get('client/extract', $_SESSION);
        $responseBody = json_decode($response->getBody()); //Corpo da Requisição
        $dataView = [
            'page' => 'extract',
            'data' => $responseBody->data,
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