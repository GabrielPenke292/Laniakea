<?php

namespace App\Models\bancos;

use CodeIgniter\Model;

class BankAccountModel extends Model
{
    protected $table      = 'contas';
    protected $primaryKey = 'CONTA_ID';
    protected $allowedFields = [
        "CONTA_AGENCIA_ID",
        "CONTA_PESSOA_ID",
        "CONTA_ENDERECO",
        "CONTA_UF",
        "CONTA_CIDADE",
        "CONTA_OCUPACAO",
        "CONTA_SALARIO_USUARIO",
        "CONTA_TIPO",
        "CONTA_SALDO",
        "CONTA_CREDITO",        
        "CONTA_COMP_RESID",        
        "CONTA_COPIA_IDENT",        
        "CONTA_COMP_RENDA",        
    ];

    

}