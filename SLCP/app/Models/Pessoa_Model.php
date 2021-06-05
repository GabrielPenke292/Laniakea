<?php

namespace App\Models;

use CodeIgniter\Model;

class Pessoa_Model extends Model
{
    protected $table = "pessoas";
    protected $primaryKey = "PES_ID";
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
        "PES_COD_USUARIO_CARTORIO"
    ];

    public function getLastRegister(){
        $builder = $this->db->table($this->table);
        $builder->select("PES_ID, PES_NOME");
        $builder->limit(1);
        $builder->orderBy("PES_ID", "desc");

        $query =  $builder->get()->getResultArray();

        return $query;
    }   

}