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

    
}