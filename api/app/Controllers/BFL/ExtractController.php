<?php

namespace App\Controllers\BFL;

use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\API\ResponseTrait;
use App\models\bancos\BankAccountModel;
use App\models\bancos\AccountBallanceModel;
use App\models\bancos\AccountMovementModel;
use App\models\M_Cadastro;
use App\Libraries\Hash;



class Extractcontroller extends ResourceController
{
    public function extract(){
        try{
            $account = $this->request->getGet('account');
            $startDate = $this->request->getGet('startDate') ?? date('Y-m-01');
            $finalDate = $this->request->getGet('finalDate') ?? date('Y-m-d');
            
            $accountMovementModel = new AccountMovementModel();

            $extract = $accountMovementModel->getExtract($account, $startDate, $finalDate);
        
            $dataReturn = [
                'status'    => true,
                'message'   => 'Extrato gerado com sucesso',
                'data'      => [
                    'account'   => $account,
                    'startDate' => $startDate,
                    'finalDate' => $finalDate,
                    'extract'   => []
                ]
            ];

            return $this->respond($dataReturn);
            
        }catch(\Exception $e){
            return $this->respond([
                'status'    => false,
                'message'   => $e->getMessage()
            ]);
        }

    }
}