<?php

namespace App\Models;

use CodeIgniter\Model;

class Funcionario_Model extends Model
{
    protected $table = "funcionarios_cartorio";
    protected $primaryKey = "FUNCIONARIO_ID";
    protected $allowedFields = [
        "FUNCIONARIO_NOME_ID",
        "FUNCIONARIO_CARTORIO_ID",
        "FUNCIONARIO_EMAIL",
        "FUNCIONARIO_PASSWORD"
    ];

    



}