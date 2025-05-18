<?php
//Este archivo de Filtro comprobará si el usuario ha iniciado sesión,
//y lo  redirigirá a la página de inicio de sesión si el mismo  no ha iniciado la misma.
namespace App\Filters;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\ResponseInterface;

class Auth implements FilterInterface{
    public function before(RequestInterface $request, $arguments = null){
        //si el usuario no esta logueado
        if(!session()->get('logged_in')){
            //entonces redirecciona a la pagina login page
            return redirect()->to('/login');
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        //Do something here
    }
}

