<?php

namespace App\Controllers\BFL;

use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\API\ResponseTrait;
use App\models\bancos\BankAccountModel;
use App\models\M_Cadastro;


class Accountcontroller extends ResourceController
{
    use ResponseTrait;
    
    public function open_account(){
        $bankAccount = new bankAccountModel();
        $cadastro = new M_Cadastro();
        
        $dados = $this->request->getPost();
        
        $id = $cadastro->get_id_people($dados['identidade']);
        if($bankAccount->where('CONTA_PESSOA_ID', $id)->get()->getRow()){
            $retorno = [
                'status' => 'error',
                'message'=> 'Esta pessoa já possui conta no banco'
            ];
            return $this->respond($retorno);
        }else{

            $dadosInsert = [
                'CONTA_AGENCIA_ID' => 1,
                'CONTA_PESSOA_ID' => $id,
                'CONTA_ENDERECO'    => $dados['endereco'],
                'CONTA_UF'    => ($dados['uf'] == null) ? 'GR' : $dados['uf'],
                'CONTA_CIDADE'    => ($dados['cidade'] == null) ? 'Groombridge' : $dados['cidade'],
                'CONTA_OCUPACAO'    => $dados['ocupacao'],
                'CONTA_SALARIO_USUARIO'    => $dados['salario'],
                'CONTA_TIPO'    => 0,
                'CONTA_SALDO'    => 0,
                'CONTA_CREDITO'    => null,
                'CONTA_COMP_RESID'    => $dados['comprovanteResidencia'],
                'CONTA_COPIA_IDENT'    => $dados['copiaIdentidade'],
                'CONTA_COMP_RENDA'    => $dados['comprovanteRenda'],
            ];
    
            if($bankAccount->insert($dadosInsert)){
                $dados_conta = $bankAccount->where('CONTA_PESSOA_ID', $id)->get()->getRow();
                $retorno = [
                    'status' => 'success',
                    'message'=> "Conta aberta com sucesso! Número da conta:".$dados_conta->CONTA_ID." Agência: ".$$dados_conta->CONTA_AGENCIA_ID
                ];
            }else{
                $retorno = [
                    'status' => 'error',
                    'message'=> 'Algo deu errado!'
                ];
            }

            return $this->respond($retorno);
        }
        

    }

}