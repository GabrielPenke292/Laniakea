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

        if($dados){
            $dataInsert = [
                "nome"  =>  $dados['nome'],
                "identidade"  =>  $dados['identidade'],
                "endereco"  =>  $dados['endereco'],
                "uf"  =>  $dados['uf'],
                "cidade"  =>  $dados['cidade'],
                "ocupacao"  =>  $dados['ocupacao'],
                "salario"  =>  $dados['salario'],
                "comprovanteResidencia"  =>  renomeiaArquivo($comprovanteResidencia['name'], "residencia"),
                "copiaIdentidade"  =>  renomeiaArquivo($copiaIdentidade['name'], "identidade"),
                "comprovanteRenda"  =>  renomeiaArquivo($comprovanteRenda['name'], "renda"),
            ];
        }
        $dados;
        $dataInsert;
        echo "Conta aberta";
    }
}
