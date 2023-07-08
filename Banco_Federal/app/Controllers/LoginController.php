<?php

namespace App\Controllers;

class LoginController extends BaseController
{
    public function login(){
        $login = $this->request->getPost();

        $validation = $this->validate([
            'id'=>[
                'rules' =>'required',
                'errors'=>[
                    'required'      =>  'id é um campo obrigatório',
                    // 'valid_user'    =>  'Digite um id válido',
                    ]
                ],
            'password'=>[
                'rules'     =>  'required|min_length[5]|max_length[12]',
                'errors'    =>  [
                    'required'      =>  'Senha é um campo obrigatório',
                    'min_length'    =>  'A senha deve ter pelo menos 5 caracteres',
                    'max_length'    =>  'A senha deve ter no máximo 12 caracteres'
                ]
            ]
        ]);
		
		if(!$validation && false){
            return view("pages/login/accountLogin", ['validation'=>$this->validator]);
        }else{  

            $id = $this->request->getPost('id');
            $password = $this->request->getPost('password');

            $responseBody = $this->login_api($id, $password, 'client');

            if($responseBody->status){
                session()->set('loggedUser', true);
                session()->set('userName', $responseBody->data->peopleData->PES_NOME);
                session()->set('function', $responseBody->data->function->funcao_nome);
                return redirect()->to(BASE_URL . 'administrativo');

            }else{
                session()->setFlashdata('error', 'Dados incorretos');
                return redirect()->to(BASE_URL . 'account-login-administrative')->withInput();
            }
        }

    }

	public function loginAdministrative()
	{

		$login = $this->request->getPost();

        $validation = $this->validate([
            'username'=>[
                'rules' =>'required',
                'errors'=>[
                    'required'      =>  'Email é um campo obrigatório',
                    ]
                ],
            'password'=>[
                'rules'     =>  'required|min_length[5]|max_length[12]',
                'errors'    =>  [
                    'required'      =>  'Senha é um campo obrigatório',
                    'min_length'    =>  'A senha deve ter pelo menos 5 caracteres',
                    'max_length'    =>  'A senha deve ter no máximo 12 caracteres'
                ]
            ]
        ]);

        if(!$validation){
            return view("login", ['validation'=>$this->validator]);
        }else{  

            $username = $this->request->getPost('username');
            $password = $this->request->getPost('password');

            $responseBody = $this->login_api($username, $password, 'administrative');

            if($responseBody->status){
                session()->set('loggedUser', true);
                session()->set('userName', $responseBody->data->peopleData->PES_NOME);
                session()->set('function', $responseBody->data->function->funcao_nome);
                return redirect()->to(BASE_URL . 'administrativo');

            }else{
                session()->setFlashdata('error', 'Dados incorretos');
                return redirect()->to(BASE_URL . 'account-login-administrative')->withInput();
            }
        }
	}

    public function logout(){
        session()->destroy();
        return redirect()->to(BASE_URL);
    }

    private function login_api(string $username, string $password, string $segment = 'client'){
        $dataRequest = [
            'username' => $username,
            'password' => $password
        ];

        $client = \Config\Services::curlrequest(); // inicializa o curl

        $response = $client->request('POST', API_URL.'federal-bank/login/' . $segment, [
            'query' => $dataRequest // Dados passados na requisição
        ], false);

        $responseBody = json_decode($response->getBody()); //Corpo da Requisição
        var_dump($responseBody);die;
        return $responseBody;
    }

}
