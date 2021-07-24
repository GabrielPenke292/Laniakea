<?php

namespace App\Models\BFL;

use CodeIgniter\Model;

class BancoModel extends Model
{
    protected $table      = 'banco';
    protected $primaryKey = 'CONTA_ID';
    protected $allowedFields = [
        "PES_NOME",
        "PES_SEXO",
        "PES_DATA_NASC",
        "PES_UF",
        "PES_CIDADE",
        "PES_NOME_PAI",
        "PES_NOME_MAE",
        "PES_NUM_CARTORIO",
        "PES_NUM_REGISTRO",
        "PES_COD_USUARIO_CARTORIO",        
    ];

    

}