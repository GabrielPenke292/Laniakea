<?php

namespace App\Controllers\BFL;

use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\API\ResponseTrait;
use App\models\bancos\BankAccountModel;
use App\models\bancos\AccountBallanceModel;
use App\models\M_Cadastro;
use App\Libraries\Hash;



class Extractcontroller extends ResourceController
{
    public function extract(){
        $account = $this->request->getGet('account');
    }
}