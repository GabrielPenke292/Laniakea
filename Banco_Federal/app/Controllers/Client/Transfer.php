<?php

namespace App\Controllers\Client;

use CodeIgniter\API\ResponseTrait;
use App\Controllers\BaseController;


class Transfer extends BaseController
{
    // Retorn a view principal
    public function home(){
        return view('client/transfer/transferView');
    }

    
}