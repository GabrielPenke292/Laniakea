<?php

namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

class SignIn implements FilterInterface
{
  public function before(RequestInterface $request, $arguments = null)
  {
    $session = \Config\Services::session();

    if (!$session->has('loggedUser')) {
      return redirect()->to(base_url());
    }
  }

  public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
  {
  }
}
