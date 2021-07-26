<?php

namespace App\Controllers\BFL;

use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\API\ResponseTrait;
use App\models\bancos\BankAccountModel;
use App\models\M_Cadastro;
use App\Libraries\Hash;



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
                'CONTA_UF'    => ($dados['uf'] == null) ? 1 : $dados['uf'],
                'CONTA_CIDADE'    => ($dados['cidade'] == null) ? 1 : $dados['cidade'],
                'CONTA_OCUPACAO'    => $dados['ocupacao'],
                'CONTA_SALARIO_USUARIO'    => $dados['salario'],
                'CONTA_TIPO'    => 0,
                'CONTA_SALDO'    => 0,
                'CONTA_CREDITO'    => null,
                'CONTA_COMP_RESID'    => $dados['comprovanteResidencia'],
                'CONTA_COPIA_IDENT'    => $dados['copiaIdentidade'],
                'CONTA_COMP_RENDA'    => $dados['comprovanteRenda'],
                'CONTA_ATIVA'   => 0,
            ];
    
            if($bankAccount->insert($dadosInsert)){
                $dados_conta = $bankAccount->where('CONTA_PESSOA_ID', $id)->get()->getRow();
                $retorno = [
                    'status' => 'success',
                    'message'=> "Conta aberta com sucesso! Número da conta:".$dados_conta->CONTA_ID." Agência: ".$dados_conta->CONTA_AGENCIA_ID
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

    public function activate_reactivate_account(){
        $bankAccountModel = new BankAccountModel(); // Instancia da model

        $dados = $this->request->getPost(); // dados da requisição

        $conta_id = $dados['conta_id']; // id da conta

        $dados_update = [ // Dados a serem atualizados
            'CONTA_SENHA' => Hash::make($dados['senha']), // senha cadastrada
            'CONTA_SENHA_MESTRA' => Hash::make('DankJeWell'), // senha mestra (padrãp)
            'CONTA_ATIVA' => 1 // conta ativa = 1 conta inativa = 0 
        ];

        if($bankAccountModel->update($conta_id, $dados_update)){
            $resposta = [
                'status' => 'success',
                'message' => 'Conta ativada com sucesso'
            ];
        }else{
            $resposta = [
                'status' => 'error',
                'message' => 'Não foi possivel ativar essa conta'
            ];
        }

        return $this->respond($resposta);
    }

}