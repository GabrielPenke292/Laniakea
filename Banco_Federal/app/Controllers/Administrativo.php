<?php

namespace App\Controllers;

class Administrativo extends BaseController
{
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

        $comprovanteResidencia = $_FILES['comprovanteResidencia'];
        $copiaIdentidade = $_FILES['copiaIdentidade'];
        $comprovanteRenda = $_FILES['comprovanteRenda'];

        $n_comp_resid = renomeiaArquivo($comprovanteResidencia['name'], $dados['identidade'],"residencia");
        $n_copia_ident = renomeiaArquivo($copiaIdentidade['name'], $dados['identidade'], "identidade");
        $n_comp_renda = renomeiaArquivo($comprovanteRenda['name'], $dados['identidade'], "renda");

        if($dados){
            $verificacao = $this->verificaIdentidade($dados['identidade'], $dados['nome']);

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
    }

    public function verificaIdentidade($identidade, $nome){
        
        $client = \Config\Services::curlrequest(); // inicializa o curl
        
        $query = [
            'identidade' => $identidade,
            'nome'       => $nome,
        ];

        $response = $client->request('GET', WORLD_URL.'SLCP/public/consultas/name-by-identity', [
            'http_errors' => false,
            // 'headers' => $this->getHeaders(),
            'query' => $query,
        ]);

        $httpCode = $response->getStatusCode(); //HTTP Code
		$responseBody = json_decode($response->getBody()); //Corpo da Requisição
		return (object) ['httpCode' => $httpCode, 'responseBody' => $responseBody];
    }
}
