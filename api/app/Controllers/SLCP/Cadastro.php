<?php

namespace App\Controllers\SLCP;

use CodeIgniter\RESTful\ResourceController;
use App\models\M_Cadastro;
use CodeIgniter\HTTP\ResponseInterface;


class Cadastro extends ResourceController
{
    /**
     * Retorna a lista de dados de todas as pessoas cadastradas
     *
     * @return ResponseTrait Resposta da consulta
     */
    public function get_all_people(){
        $model = new M_Cadastro();
        return $this->respond($model->findAll());
    }

    public function get_specific_people(){
        $model = new M_Cadastro();

        $data = $this->request->getGet();

        return $this->respond($model->getWhere(['PES_NUM_REGISTRO' => $data['num']]));
    }

}