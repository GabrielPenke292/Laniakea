<?php

namespace App\Controllers;

use CodeIgniter\API\ResponseTrait;
use App\Controllers\BaseController;


class Client extends BaseController
{
    // Retorn a view principal
    public function home(){
        return view('client/home');
    }
}