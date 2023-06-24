<?php

namespace App\Controllers\Client;

use CodeIgniter\API\ResponseTrait;
use App\Controllers\BaseController;


class Investment extends BaseController
{
    // Retorn a view principal
    public function home(){

        $maintenance = true;
        $dataView = [
            'page' => 'investments',
        ];

        if($maintenance){
            return view('client/maintenance', $dataView);
        }
        return view('client/investments/investmentView', $dataView);
    }

    
}