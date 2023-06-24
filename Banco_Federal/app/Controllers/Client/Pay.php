<?php

namespace App\Controllers\Client;

use CodeIgniter\API\ResponseTrait;
use App\Controllers\BaseController;


class Pay extends BaseController
{
    // Retorn a view principal
    public function home(){
        $dataView = [
            'page' => 'pay',
        ];
        return view('client/pay/payView', $dataView);
    }

    // Retorna o card de detalhes da conta a pagar
    public function details_bill($idBill){
        $dataView = $this->request->getGet();
        $dataView['idBill'] = $idBill;

        return view('client/pay/detailsBillCard', $dataView);

    }

    // Realiza o pagamento de uma conta
    public function pay_bill($idBill){

        // verifica o valor da conta

        // verifica o saldo do cliente

        // realiza o pagamento

        // retorna o status do pagamento

        $dataReturn = [
            'error' => false,
            'message' => 'Pagamento realizado com sucesso!',
            'data' => []
        ];

        echo json_encode($dataReturn);
        exit();
    }

    
}