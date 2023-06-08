<?php

namespace App\Controllers\Client;

use CodeIgniter\API\ResponseTrait;
use App\Controllers\BaseController;


class Pay extends BaseController
{
    // Retorn a view principal
    public function home(){
        return view('client/pay/payView');
    }

    // Retorna o card de detalhes da conta a pagar
    public function details_bill($idBill){
        $dataView = $this->request->getGet();
        $dataView['idBill'] = $idBill;

        return view('client/pay/detailsBillCard', $dataView);

    }

    
}