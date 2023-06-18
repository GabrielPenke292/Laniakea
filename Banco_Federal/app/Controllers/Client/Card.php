<?php

namespace App\Controllers\Client;

use CodeIgniter\API\ResponseTrait;
use App\Controllers\BaseController;


class Card extends BaseController
{
    // Retorn a view principal
    public function home(){

        return view('client/card/cardView');
    }

    public function invoices(){
            

        return view('client/card/invoicesView');
    }

    public function getInvoiceMonth(){
        $month = $this->request->getPost('month');

        return view('client/card/invoiceMonth');
        
    }

    /**
     * Realiza o pagamento de uma fatura
     * @param int $invoice_id // id da fatura
     */
    public function payInvoice(int $invoice_id){
        $data_return = [
            'status' => true,
            'message' => 'Fatura paga com sucesso!'
        ];

        echo json_encode($data_return); 
        exit();
    }
    
}