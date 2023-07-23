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
            
            if( !empty($extract)){
                $resume = $this->getResume($extract);
            }

            $dataReturn = [
                'status'    => true,
                'message'   => 'Extrato gerado com sucesso',
                'data'      => [
                    'account'   => $account,
                    'startDate' => $startDate,
                    'finalDate' => $finalDate,
                    'extract'   => $extract ?? [],
                    'resume'    => $resume ?? null
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

    /**
     * @param array $extract
     * @return array
     * retorna um array com os valores de entradas, saídas e saldo
     */
    public function getResume($extract){
        $data = [
            'entered' => 0,
            'left'    => 0,
            'balance' => 0
        ];

        if(is_array($extract)){
            foreach($extract as $key => $value){
                if($value->cm_entrada_saida == '1'){
                    $data['entered'] += $value->cm_valor;
                }else{
                    $data['left'] += $value->cm_valor;
                }
            }
            $data['balance'] = $data['entered'] - $data['left'];
        }

        return $data;
    }
}