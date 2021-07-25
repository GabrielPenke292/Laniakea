<?php

namespace App\Models\city;

use CodeIgniter\Model;

class CityModel extends Model
{
    protected $table      = 'cidades';
    protected $primaryKey = 'CIDADE_ID';
    protected $allowedFields = [
        "CIDADE_NOME",
        "CIDADE_ESTADO_ID",
    ];

    

}