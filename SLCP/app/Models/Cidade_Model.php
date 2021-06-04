<?php

namespace App\Models;

use CodeIgniter\Model;

class Cidade_Model extends Model
{
    protected $table = "cidades";
    protected $primaryKey = "CIDADE_ID";
    protected $allowedFields = [
        "CIDADE_NOME", 
        "CIDADE_ESTADO_ID", 
    ];
}