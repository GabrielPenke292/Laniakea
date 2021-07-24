<?php

namespace App\Controllers\SLCP;

use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\API\ResponseTrait;
use App\models\M_Cadastro;


class Cadastro extends ResourceController
{
    use ResponseTrait;
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
        $dados = $model->where('PES_NUM_REGISTRO', $data['identidade'])->get()->getRow();

        $retorno = ($dados == null) ? false : $dados;
        return $this->respond($retorno);
    }

}