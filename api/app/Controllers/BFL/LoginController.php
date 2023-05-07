<?php

namespace App\Controllers\BFL;

use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;
use App\models\bancos\WorkersModel;
use App\models\M_Cadastro;
use App\Libraries\Hash;
use App\Models\M_Funcao;

class LoginController extends ResourceController
{
    use ResponseTrait;
    
    public function loginAdministrative(){
        try{
            $peopleModel = new M_Cadastro();
            $workersModel = new WorkersModel();
            $functionModel = new M_Funcao();

            $UserData = $workersModel->where('BF_F_LOGIN', $this->request->getGet('username'))->first();
            $sql = $workersModel->getLastQuery()->getQuery();
            if( isset($UserData) ){
                $checkPassword = Hash::checkPassword($this->request->getGet('password'), $UserData['BF_F_SENHA']);
    
                if(!$checkPassword){
                    $dataReturn = [
                        'status'    => false,
                        'message'   => 'Dados incorretos',
                        'data'      => null
                    ];
                    
                }else{
                    $peopleData = $peopleModel->find($UserData['BF_F_PES_ID']);
                    $function = $functionModel->find($UserData['BF_F_FUNCAO_ID']);
                    $dataReturn = [
                        'status'    => true,
                        'message'   => 'Login efetuado com sucesso',
                        'data'      => [
                            'peopleData' =>$peopleData,
                            'function' => $function
                        ]
                    ];
                }
            }else{
                $dataReturn = [
                    'status'    => false,
                    'message'   => 'Usuário não encontrado',
                    'data'      => null
                ];
            }

            return $this->respond($dataReturn);


        }catch(\Exception $e){
            return $this->failServerError('Algo deu errado, tente novamente mais tarde');
        }
    }
}