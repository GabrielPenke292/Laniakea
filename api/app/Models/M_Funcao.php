<?php

namespace App\Models;

use CodeIgniter\Model;

class M_Funcao extends Model
{
    protected $table      = 'funcao';
    protected $primaryKey = 'funcao_id';
    protected $allowedFields = [
        "funcao_nome",
    ];

    

    

}