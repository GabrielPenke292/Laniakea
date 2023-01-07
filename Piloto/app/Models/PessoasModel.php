<?php

namespace App\Models;

use CodeIgniter\Model;

class PessoasModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'pessoas';
    protected $primaryKey       = 'PES_ID';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'object';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'PES_NOME',
        'PES_SEXO',
        'PES_DATA_NASC',
        'PES_UF',
        'PES_CIDADE',
        'PES_NOME_PAI',
        'PES_NOME_MAE',
        'PES_NUM_CARTORIO',
        'PES_NUM_REGISTRO',
        'PES_COD_USUARIO_CARTORIO'
    ];


}
