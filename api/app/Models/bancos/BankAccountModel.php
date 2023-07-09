<?php

namespace App\Models\bancos;

use CodeIgniter\Model;

class BankAccountModel extends Model
{
    protected $table      = 'contas';
    protected $primaryKey = 'CONTA_ID';
    protected $allowedFields = [
        "CONTA_AGENCIA_ID",
        "CONTA_PESSOA_ID",
        "CONTA_ENDERECO",
        "CONTA_UF",
        "CONTA_CIDADE",
        "CONTA_OCUPACAO",
        "CONTA_SALARIO_USUARIO",
        "CONTA_TIPO",
        "CONTA_SALDO",
        "CONTA_CREDITO",        
        "CONTA_COMP_RESID",        
        "CONTA_COPIA_IDENT",        
        "CONTA_COMP_RENDA",        
        "CONTA_SENHA",
        "CONTA_SENHA_MESTRA",
        "CONTA_ATIVA",
    ];

    /**
     * Verifica se uma conta existe
     */
    public function verifyIfExists($conta){
        return $this->
            where('CONTA_ID', $conta)->
            get()->getResult();
    }

    /**
     * Verifica se uma conta está ativa
     */
    public function isActive($conta){
        return $this->
            where('CONTA_ID', $conta)->
            where('CONTA_ATIVA', 1)->
            get()->getResult();
    }

    /**
     * Tras os dados de uma conta
     */
    public function getUserData($id){
        return $this->
            select('pessoas.PES_NOME, contas.*')->
            join('pessoas', 'pessoas.PES_ID = contas.CONTA_PESSOA_ID')->
            where('CONTA_ID', $id)->
            get()->getResult();
    }
    

}