<?php

namespace App\Models;

use CodeIgniter\Model;

class Pessoa_Model extends Model
{
    protected $table = "pessoas";
    protected $primaryKey = "PES_ID";
    protected $allowedFields = [
        "PES_NOME", 
        "PES_DATA_NASC", 
        "PES_UF, PES_CIDADE", 
        "PES_NOME_PAI",
        "PES_NOME_MAE", 
        "PES_NUM_CARTORIO", 
        "PES_NUM_REGISTRO", 
        "PES_COD_USUARIO_CARTORIO"
    ];
}