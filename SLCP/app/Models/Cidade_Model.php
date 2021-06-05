<?php

namespace App\Models;

use CodeIgniter\Model;

class Cidade_Model extends Model
{
    protected $table = "cidades";
    protected $primaryKey = "CIDADE_ID";
    protected $allowedFields = [
        "CIDADE_NOME", 
        "CIDADE_ESTADO_ID", 
    ];

    public function getByUF($id){   

        return $this->where('CIDADE_ESTADO_ID', $id)->findAll();


        // $builder = $this->db->table($this->table);
        // $builder->select("*");
        // $builder->join("estados as e", "e.ESTADO_ID = cidades.CIDADE_ESTADO_ID");
        // $builder->where("CIDADE_ESTADO_ID ", $id);
        // $sql = $builder->getCompiledSelect();
        // $query = $builder->get();

        // return $query;
    }
}