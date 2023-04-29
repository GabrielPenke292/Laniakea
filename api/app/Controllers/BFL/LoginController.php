<?php

namespace App\Controllers\BFL;

use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\API\ResponseTrait;
use App\models\bancos\BankAccountModel;
use App\models\bancos\AccountBallanceModel;
use App\models\M_Cadastro;
use App\Libraries\Hash;



class LoginController extends ResourceController
{
    use ResponseTrait;
    
    public function login_administrative(){
        try{
            $peopleModel = new M_Cadastro();
            $accountModel = new BankAccountModel();

            $account = $accountModel->find($this->request->getPost('account'));

        }catch(\Exception $e){
            return $this->failServerError('Algo deu errado, tente novamente mais tarde');
        }
    }
}