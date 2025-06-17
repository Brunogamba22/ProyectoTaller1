<?php
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Usuario_model;

class Login_controller extends BaseController
{
    public function index()
    {
        helper(['form', 'url']);
        return view('login');
    }

    

    public function auth()
    {
        $session = session();
        $model = new Usuario_model();

        $email = $this->request->getVar('email');
        $password = trim($this->request->getVar('pass'));


        $data = $model->where('email', $email)->first();




            if ($data) {
                $pass_bd = $data['pass'];
                $baja = $data['baja'];

            if ($baja == 'SI') { // Ajusta según tu campo 'baja'
                $session->setFlashdata('error', 'Usuario dado de baja');
                return redirect()->to('/login');
            }

            // Verifica la contraseña (ahora debería estar hasheada)
            if (password_verify($password, $pass_bd)) {
                $ses_data = [
                    'id_usuario' => $data['id_usuarios'], // Ajustado a tu campo en BD
                    'nombre'     => $data['nombre'],
                    'apellido'   => $data['apellido'],
                    'email'      => $data['email'],
                    'usuario'    => $data['usuario'],
                    'perfil_id'  => $data['perfil_id'],
                    'logged_in' => TRUE
                ];

                $session->set($ses_data);

                // Redirección según perfil
                if ($data['perfil_id'] == 1) { // Admin
                    return redirect()->to('admin');
                } else { // Cliente
                    return redirect()->to('/');
                }
            } else {
                $session->setFlashdata('error', 'Contraseña incorrecta');
                return redirect()->to('/login');
                }
                } else {
                    $session->setFlashdata('error', 'Email no registrado');
                    return redirect()->to('/login');
                }
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        // Redirige siempre al login tras cerrar sesión
        return redirect()->to('/login');
    }
}