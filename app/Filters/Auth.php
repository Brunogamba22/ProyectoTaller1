<?php
namespace App\Filters;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\ResponseInterface;

class Auth implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        $session = session();
        
        // Verifica si está logueado
        if(!$session->get('logged_in')){
            return redirect()->to('/login');
        }
        
        // Verifica roles si se especifican
        if (!empty($arguments)) {
            $perfil = $session->get('perfil_id');
            if (!in_array($perfil, $arguments)) {
                return redirect()->to('/login')->with('error', 'Acceso no autorizado');
            }
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Do something here
    }
}