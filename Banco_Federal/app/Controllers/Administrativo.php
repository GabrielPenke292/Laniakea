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
        $dados = $this->request->getPost();

        if($dados){
            $dataInsert = [
                "nome"  =>  dados['nome'],
                "identidade"  =>  dados['identidade'],
                "endereco"  =>  dados['endereco'],
                "uf"  =>  dados['uf'],
                "ocupacao"  =>  dados['ocupacao'],
                "salario"  =>  dados['salario'],
                "comprovanteResidencia"  =>  dados['comprovanteResidencia'],
                "copiaIdentidade"  =>  dados['copiaIdentidade'],
                "comprovanteRenda"  =>  dados['comprovanteRenda'],
            ];
        }
        
        echo "Conta aberta";
    }
}
