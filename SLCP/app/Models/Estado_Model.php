<?php

namespace App\Models;

use CodeIgniter\Model;

class Estado_Model extends Model
{
    protected $table = "estados";
    protected $primaryKey = "ESTADO_ID";
    protected $allowedFields = [
        "ESTADO_NOME", 
        "ESTADO_SIGLA", 
        "ESTADO_ID_CAPITAL"
    ];

    public function getEstadosUF(){
        $builder = $this->db->table($this->table);
        $builder->select("ESTADO_SIGLA");

        Return $builder->get()->getResultArray();
    }
}