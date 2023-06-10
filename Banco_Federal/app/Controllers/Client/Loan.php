<?php

namespace App\Controllers\Client;

use CodeIgniter\API\ResponseTrait;
use App\Controllers\BaseController;


class Loan extends BaseController
{
    // Retorn a view principal
    public function home(){


        return view('client/loan/loanView');
    }

    
}