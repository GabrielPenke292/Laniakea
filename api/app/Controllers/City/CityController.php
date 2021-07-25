<?php

namespace App\Controllers\City;

use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\API\ResponseTrait;
use App\models\city\cityModel;


class Citycontroller extends ResourceController
{
    use ResponseTrait;
    
    public function get_cities_by_uf(){
        $cityModel = new CityModel();

        $dados = $this->request->getGet();

        $cities = $cityModel->where("CIDADE_ESTADO_ID", $dados['uf'])->get()->getResult();

        return $this->respond($cities);
    }

}