<?php

namespace App\Controllers;

use CodeIgniter\API\ResponseTrait;
use App\Controllers\BaseController;


class Administrativo extends BaseController
{
    use ResponseTrait;

	public function dashboard()
	{
		return view("administrativo/dashboard");
	}

    public function openAccount(){
        return view("administrativo/openAccount");
    }
    
    public function creditRating(){
        return view("administrativo/creditRating");
    }
    
    public function payBill(){
        return view("administrativo/payBill");
    }
    
    public function renegociation(){
        return view("administrativo/renegociation");
    }
    
    public function financing(){
        return view("administrativo/financing");
    }
    
    public function startAccount(){
        helper("gerais_helper");

        $dados = $this->request->getPost();
        $verificacao = $this->verificaIdentidade($dados['identidade'], $dados['nome']);

        if($verificacao){ // Se a verificação de identidade for true
            $comprovanteResidencia = $_FILES['comprovanteResidencia'];
            $copiaIdentidade = $_FILES['copiaIdentidade'];
            $comprovanteRenda = $_FILES['comprovanteRenda'];
    
            $n_comp_resid = renomeiaArquivo($comprovanteResidencia['name'], $dados['identidade'],"residencia");
            $n_copia_ident = renomeiaArquivo($copiaIdentidade['name'], $dados['identidade'], "identidade");
            $n_comp_renda = renomeiaArquivo($comprovanteRenda['name'], $dados['identidade'], "renda");
    
            if($dados){
    
                $dataInsert = [
                    "nome"  =>  $dados['nome'],
                    "identidade"  =>  $dados['identidade'],
                    "endereco"  =>  $dados['endereco'],
                    "uf"  =>  $dados['uf'],
                    "cidade"  =>  $dados['cidade'],
                    "ocupacao"  =>  $dados['ocupacao'],
                    "salario"  =>  $dados['salario'],
                    "comprovanteResidencia"  =>  $n_comp_resid,
                    "copiaIdentidade"  =>  $n_copia_ident,
                    "comprovanteRenda"  =>  $n_comp_renda,
                ];
    
    
            }
    
            echo "Conta aberta";
        }else{
            
        }
    }

    public function verificaIdentidade($identidade, $nome){
        
        $client = \Config\Services::curlrequest(); // inicializa o curl


        $query = [
            'identidade' => $identidade, // Preparando os dados para a requisição
        ];

        $response = $client->request('GET', API_URL.'get-specific-people', [
            'query' => $query // Dados passados na requisição
        ]);

		$responseBody = json_decode($response->getBody()); //Corpo da Requisição
        
        if($responseBody->PES_NOME == $nome){ // Se o nome da pessoa cadastrado for igual ao indicado
            return true; // Retorna true
        }

        return false; // Retorna falso indicando que essa pessoa não corresponde a essa identidade
    }
}
