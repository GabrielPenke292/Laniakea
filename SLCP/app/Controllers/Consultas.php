<?php

namespace App\Controllers;

use App\Models\Pessoa_Model;

class Consultas extends BaseController{	
    public function name_by_identity(){
        $dados = $this->request->getGet();

        $pessoa_model = new Pessoa_Model();

        $retorno = $pessoa_model->nameByIdentity($dados['identidade']);

        if($retorno){
            if($retorno['PES_NOME'] == $dados['nome']){
                return true;
            }
            return false;
        }
        return false;
    }
}