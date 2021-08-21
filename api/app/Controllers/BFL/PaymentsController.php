<?php

namespace App\Controllers\BFL;

use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\API\ResponseTrait;
use App\models\bancos\BankAccountModel;
use App\models\payments\BilletsModel;
use App\Libraries\Hash;



class Paymentscontroller extends ResourceController
{
    use ResponseTrait;

    public function getBillData(){
        
    }
    
    public function pay_billet(){
        
        $dados = $this->request->getPost(); // dados da requisição

        $cod_barras = $dados['cod_barras']; // Pega o código de barras
        $forma_pagamento = $dados['forma_pagamento']; // Forma de pagamento: 1 = dinheiro, 2 = cartão de débito, 3 = cartão de crédito

        $dados_boleto = $this->get_billet_data($cod_barras); // Busca os dados do boleto pelo código de barras

        
    }

    /*
    *  Busca informações do boleto: valor, vencimento, etc..
    *  @params: código de barras do boleto
    */
    public function get_billet_data($cod_barras){
        $boletoModel = new BilletsModel(); // instancia da model de boletos

        return $boletoModel->where('BOLETO_COD_BARRAS', $cod_barras)->get()->getRow(); // retorna os dados do boleto pelo código de barras
    }

    /**
     * Gerar um boleto
     * 
     */
    public function generateBillet(){
        try{
            $nossoNum = '001';
            $codBanco = $this->request->getPost('codBanco');
            $dataVencimento = $this->request->getPost('dataVencimento');
            $valor = $this->request->getPost('valor');
            $beneficiario = $this->request->getPost('beneficiario');
            $pagador = $this->request->getPost('pagador');

            $dadosInsert = [
                'BOLETO_NOSSO_NUM'              => $nossoNum,
                'BOLETO_DATA_EMISSAO'           => date('Y-m-d'),
                'BOLETO_COD_BANCO'              => $codBanco,
                'BOLETO_TIPO_PESSOA_EMISSOR'    => $this->request->getPost('tipoEmissor'), // 1 = PF -  2 = PJ
                'BOLETO_TIPO_PESSOA_PAGADOR'    => $this->request->getPost('tipoPagador'), // 1 = PF -  2 = PJ
                'BOLETO_COD_BARRAS'             => $this->generateCodeBar($nossoNum, $codBanco, $dataVencimento, $valor, $beneficiario, $pagador), // gerar código de barras
                'BOLETO_VENCIMENTO'             => $dataVencimento,
                'BOLETO_VALOR'                  => $valor,
                'BOLETO_BENEFICIARIO'           => $beneficiario, // cpf ou cnpj do beneficiário
                'BOLETO_PAGADOR'                => $pagador,  // cpf ou cnpj do pagador
                'BOLETO_JUROS'                  => $this->request->getPost('juros'),
            ];

            return $this->respond($dadosInsert);

        }catch(Exception $e){
            return $this->respond(['status' => Error, 'messege' => $e->getMessege]);
        }
    }

    /**
     * Gera o código de barras do boleto
     * 
     */
    private function generateCodeBar(String $nossoNum, String $codBanco, String $dataVencimento, String $valor, String $beneficiario, String $pagador) : String
    {
        $billets = new BilletsModel();
        $quantidade = $billets->countAllResults() + 1;
        $dataVencimento = str_replace("/", "", str_replace("-", "", $dataVencimento)); // Remove as barras da data de vencimento
        $valor = str_replace("$", "", $valor); // Remove o cifrão
        $beneficiario = str_replace("LK-", "", $beneficiario); // Remove o LK-
        $pagador = str_replace('LK-', "", $pagador); // Remove o LK-
        
        $barCode = $nossoNum . $codBanco . $quantidade . $dataVencimento . $valor . $beneficiario . $pagador;

        return $barCode;
    }

}