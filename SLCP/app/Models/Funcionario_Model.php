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


    public function getData($email){
        $builder = $this->db->table($this->table." as f");
        $builder->select("f.*, p.PES_NOME");
        $builder->join("pessoas as p", "p.PES_ID = f.FUNCIONARIO_NOME_ID");
        $builder->where("f.FUNCIONARIO_EMAIL", $email);

        $query =  $builder->get()->getResultArray();

        return $query;
    }
    
    public function getFuncionarios(){
        $builder = $this->db->table($this->table." as f");
        $builder->select("f.*, p.PES_NOME");
        $builder->join("pessoas as p", "p.PES_ID = f.FUNCIONARIO_NOME_ID");
        $builder->where("f.FUNCIONARIO_ID <>", 3);

        $query =  $builder->get()->getResultArray();

        return $query;

    }



}