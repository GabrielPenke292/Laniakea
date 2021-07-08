<?php

namespace App\Models;

use CodeIgniter\Model;

class M_Conta extends Model
{
    protected $table      = 'CC_VAGAS';
    protected $primaryKey = 'CC_VAGAS_ID';
    protected $allowedFields = [
        "CC_VAGA_TITULO",
        "CC_VAGA_REQUISITOS",
        "CC_VAGA_DIFERENCIAIS",
        "CC_VAGA_ATIVIDADES",
        "CC_VAGA_REGIME",
        "CC_VAGA_HORARIO",
        "CC_VAGA_SALARIO",
        "CC_VAGA_CREATED_AT",
        "CC_VAGA_USUARIO_CREATED",
        "CC_VAGA_UPDATED_AT",
        "CC_VAGA_USUARIO_UPDATE",
        "CC_VAGA_DELETED_AT",
        "CC_VAGA_USUARIO_DELETED",
        "CC_VAGA_INATIVA"
    ];

    

}