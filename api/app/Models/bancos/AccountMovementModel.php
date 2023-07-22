<?php

namespace App\Models\bancos;

use CodeIgniter\Model;

class AccountMovementModel extends Model
{
    protected $table      = 'conta_movimento';
    protected $primaryKey = 'cm_id';
    protected $allowedFields = [
        'cm_id',
        'cm_conta_id',
        'cm_valor',
        'cm_entrada_saida',
        'cm_data_hora',
        'cm_descricao',
        'cm_conta_destino',
        'cm_banco_id',
    ];

    public function getExtract($account, $startDate, $finalDate){
        return $this->
            select('cm_id, cm_valor, cm_entrada_saida, cm_data_hora, cm_descricao, cm_conta_destino, cm_banco_id')->
            where('cm_conta_id', $account)->
            where('cm_data_hora >=', $startDate)->
            where('cm_data_hora <=', $finalDate)->
            orderBy('cm_data_hora', 'ASC')->
            get()->getResult();
    }
}
