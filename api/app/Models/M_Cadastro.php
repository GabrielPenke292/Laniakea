<?php

namespace App\Models;

use CodeIgniter\Model;

class M_Cadastro extends Model
{
    protected $table      = 'pessoas';
    protected $primaryKey = 'PES_ID';
    protected $allowedFields = [
        "PES_NOME",
        "PES_SEXO",
        "PES_DATA_NASC",
        "PES_UF",
        "PES_CIDADE",
        "PES_NOME_PAI",
        "PES_NOME_MAE",
        "PES_NUM_CARTORIO",
        "PES_NUM_REGISTRO",
        "PES_COD_USUARIO_CARTORIO",        
    ];

    public function get_id_people($identity){
        return $this->select('PES_ID')
             ->where('PES_NUM_REGISTRO', $identity)
             ->get()->getRow()->PES_ID;
    }

    

}