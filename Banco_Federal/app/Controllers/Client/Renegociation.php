<?php 

namespace App\Controllers\Client;

use CodeIgniter\API\ResponseTrait;
use App\Controllers\BaseController;

class Renegociation extends BaseController
{
    // Retorn a view principal
    public function home(){

        return view('client/renegociation/renegociationView');
    }
}