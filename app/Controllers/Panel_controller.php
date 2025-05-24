<?php
namespace App\Controllers;

use CodeIgniter\Controller;

class Panel_controller extends Controller
{
    // Método principal: decide qué panel mostrar según el tipo de usuario
    public function index()
    {
        $session = session();
        
        // Verificar si el usuario está logueado
        if(!$session->get('logged_in')){
            // Si no está logueado, redirige a login
            return redirect()->to('/login');
        }
        
        // Redirigir según el perfil del usuario
        if($session->get('perfil_id') == 1) {
            // Si es admin (perfil_id = 1), muestra el panel de admin
            return $this->adminDashboard();
        } else {
            // Si es cliente, muestra el panel de cliente
            return $this->clienteDashboard();
        }
    }
    
    // Panel exclusivo para administrador
    protected function adminDashboard()
    {
        $data = [
            'titulo' => 'Panel de Administración',
            'usuario' => session()->get('nombre')
        ];
        return view('panel/admin_dashboard', $data);
    }
    
    // Panel exclusivo para cliente
    protected function clienteDashboard()
    {
        $data = [
            'titulo' => 'Panel de Cliente',
            'usuario' => session()->get('nombre')
        ];
        return view('panel/cliente_dashboard', $data);
    }
}