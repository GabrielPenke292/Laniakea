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
            
            $comprovanteResidencia = $_FILES['comprovanteResidencia']; // Pega dos dados do arquivo
            $copiaIdentidade = $_FILES['copiaIdentidade']; // Pega dos dados do arquivo
            $comprovanteRenda = $_FILES['comprovanteRenda']; // Pega dos dados do arquivo
    
            $n_comp_resid = renomeiaArquivo($comprovanteResidencia['name'], $dados['identidade'],"residencia");
            $n_copia_ident = renomeiaArquivo($copiaIdentidade['name'], $dados['identidade'], "identidade");
            $n_comp_renda = renomeiaArquivo($comprovanteRenda['name'], $dados['identidade'], "renda");
            
            $arquivosToUpload = [ // Array a ser passado para o método de upload
                'comprovanteResidencia' => $n_comp_resid,
                'copiaIdentidade' => $n_copia_ident,
                'comprovanteRenda' => $n_comp_renda,
            ];

            if($this->uploadFile($arquivosToUpload, $dados['identidade'])){ // Se o upload deu certo
                
                $client = \Config\Services::curlrequest(); // inicializa o curl
                
                $dadosRequest = [ // Dados a serem salvos no banco 
                    "nome"  =>  $dados['nome'], // Nome da pessoa
                    "identidade"  =>  $dados['identidade'], // número da identidade
                    "endereco"  =>  $dados['endereco'], // endereço
                    "uf"  =>  $dados['uf'], // Estado
                    "cidade"  =>  $dados['cidade'], // Cidade
                    "ocupacao"  =>  $dados['ocupacao'], // Profissão
                    "salario"  =>  $dados['salario'], // Salário
                    "comprovanteResidencia"  =>  $n_comp_resid, // nome do arquivo comprovante de residencia
                    "copiaIdentidade"  =>  $n_copia_ident, // nome do arquivo cópia de identidade
                    "comprovanteRenda"  =>  $n_comp_renda, // nome do arquivo comprovante de renda
                ];
                
                $response = $client->request('POST', API_URL.'federal-bank/open-account', [
                    'form_params' => $dadosRequest // Dados passados na requisição
                ], false);

        		$responseBody = json_decode($response->getBody()); //Corpo da Requisição

                if($responseBody){
                    echo json_encode($responseBody);
                    die();
                }else{
                    $retornoFalse = [
                        'status' => 'error',
                        'message'=> 'Algo deu errado!'
                    ];
                    echo json_encode($responseBody);
                    die();
                }
                
            }            
                
        }else{
            $retorno = [
                'status' => 'error',
                'message' => "Dados inconsistentes!"
            ];
            echo json_encode($retorno);
            die();
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
        
        if($responseBody){ // Se o nome da pessoa cadastrado for igual ao indicado
            if($responseBody->PES_NOME == $nome){
                return true; // Retorna true
            }
            return false;
        }

        return false; // Retorna falso indicando que essa pessoa não corresponde a essa identidade
    }

    public function uploadFile($file, $doc){
        $contador = 0; // Contador para verificar a quantidade de arquivos
        $diretorio = 'assets/upload/';  // diretório onde serão salvos os arquivos
        foreach ($file as $key => $value) { // foreach do array associativo
            $temporario = $_FILES[$key]['tmp_name'];    // nome temporário do arquivo
            $extensao = pathinfo($_FILES[$key]['name'], PATHINFO_EXTENSION); // Pega a extansão do arquivo
            $novo_nome = $value . '.' . $extensao; // Monta o novo nome do arquivo juntando com a extensão

            if(!is_dir($diretorio.$doc)){ // Se o diretório não existir...
                mkdir($diretorio.$doc.'/'); // ... ele é criado
            }

            if(move_uploaded_file($temporario, $diretorio.$doc.'/'.$novo_nome )){ // o arquivo é movido para o diretório
                $contador++; // o contador é incrementado
            }    
        }
        if($contador == count($file)){ // se a quantidade de arquivos subidos for a mesma do array
            return true; // retorna true
        }
        return false; // se não, retorna false
    }
}
