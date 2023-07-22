<?php

namespace App\Models\bancos;

use CodeIgniter\Model;

class BankAccountModel extends Model
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
}
