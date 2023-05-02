<?php

namespace App\Models\bancos;

use CodeIgniter\Model;

class WorkersModel extends Model
{
    protected $table      = 'funcionarios_banco';
    protected $primaryKey = 'BF_F_ID';
    protected $allowedFields = [
        "BF_F_PES_ID",
        "BF_F_FUNCAO_ID",
        "BF_F_LOGIN",
        "BF_F_SENHA",
        "BF_F_BANCO_ID",
        
    ];
    

}