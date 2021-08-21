<?php

namespace App\Models\bancos;

use CodeIgniter\Model;

class AccountBallanceModel extends Model
{
    protected $table      = 'conta_saldo';
    protected $primaryKey = 'CS_ID';
    protected $allowedFields = [
        "CS_CONTA_ID",
        "CS_SALDO",
    ];

    /**
     * Retorna o saldo de uma conta
     */
    public function getBalance($conta){
        return $this->
            select('CS_SALDO')->
            where('CS_CONTA_ID', $conta)->
            get()->getResult()[0]->CS_SALDO;
    }

    /**
     * Atualiza o saldo de uma determinada conta
     */
    public function updateBalance($conta, $saldo){
        return $this->
            set('CS_SALDO', $saldo)->
            where('CS_CONTA_ID', $conta)->
            update();
    }

}