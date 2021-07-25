<?php

namespace App\Models\state;

use CodeIgniter\Model;

class StateModel extends Model
{
    protected $table      = 'estados';
    protected $primaryKey = 'ESTADO_ID';
    protected $allowedFields = [
        "ESTADO_NOME",
        "ESTADO_SIGLA",
        "ESTADO_CAPITAL",
    ];

}