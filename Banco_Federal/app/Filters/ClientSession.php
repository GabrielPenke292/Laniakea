<?php

namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

class ClientSession implements FilterInterface
{
  public function before(RequestInterface $request, $arguments = null)
  {
    $session = \Config\Services::session();

    if ($session->has('ClientLogged')) {
      return redirect()->to(base_url('client/home'));
    }else if($session->has('AdmLogged')){
      return redirect()->to(base_url('administrativo'));
    }
  }

  public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
  {
  }
}
