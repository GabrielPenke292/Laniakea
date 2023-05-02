<?php

namespace App\Controllers\BFL;

use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;
use App\models\bancos\WorkersModel;
use App\models\M_Cadastro;
use App\Libraries\Hash;



class LoginController extends ResourceController
{
    use ResponseTrait;
    
    public function loginAdministrative(){
        try{
            $peopleModel = new M_Cadastro();
            $workersModel = new WorkersModel();

            $UserData = $workersModel->where('BF_F_LOGIN', $this->request->getPost('username'))->first();
            if( isset($UserData) ){
                $checkPassword = Hash::checkPassword($this->request->getPost('password'), $UserData[0]['BF_F_SENHA']);
    
                if(!$checkPassword){
                    $dataReturn = [
                        'status'    => false,
                        'message'   => 'Dados incorretos',
                        'data'      => null
                    ];
                    
                }else{
                    $dataReturn = [
                        'status'    => true,
                        'message'   => 'Login efetuado com sucesso',
                        'data'      => $UserData
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