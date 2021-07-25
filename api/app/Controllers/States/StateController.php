<?php

namespace App\Controllers\States;

use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\API\ResponseTrait;
use App\models\state\stateModel;


class Statecontroller extends ResourceController
{
    use ResponseTrait;
    
    public function get_all_states(){
        $stateModel = new StateModel();

        $states = $stateModel->findAll();
        return $this->respond($states);
    }

}