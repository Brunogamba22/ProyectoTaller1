<?php
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Usuario_model;

class Login_controller extends BaseController
{
    public function index()
    {
        // Carga los helpers de formulario y URL
        helper(['form', 'url']);
        return view('login');
    }

    public function auth()
    {
        // Inicia sesión
        $session = session();

        // Instancia del modelo de usuarios
        $model = new Usuario_model();

        // Recibe los datos del formulario
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('pass');

        // Busca en la base de datos el usuario con ese email
        $data = $model->where('email', $email)->first();

        // Si encuentra al usuario
        if ($data) {
            $pass_bd = $data['pass'];         // Contraseña guardada en la base de datos (hasheada)
            $baja = $data['baja'];            // Verifica si está dado de baja

            // Si el usuario está dado de baja, no puede ingresar
            if ($baja == '1') {
                $session->setFlashdata('msg', 'Usuario dado de baja');
                return redirect()->to('/');
            }

            // Verifica si la contraseña ingresada coincide con la almacenada (usa password_verify)
            $verify_pass = password_verify($password, $pass_bd);
            if ($verify_pass) {
                // Si la verificación es correcta, se crean los datos de sesión
                $ses_data = [
                    'id_usuario' => $data['id_usuario'],
                    'nombre'     => $data['nombre'],
                    'apellido'   => $data['apellido'],
                    'email'      => $data['email'],
                    'usuario'    => $data['usuario'],
                    'perfil_id'  => $data['perfil_id'],
                    'logged_in'  => TRUE
                ];

                // Guarda los datos en sesión
                $session->set($ses_data);

                // Mensaje de bienvenida
                $session->setFlashdata('msg', '¡Bienvenido!');

                // Redirecciona al panel principal
                return redirect()->to('/panel');
            } else {
                // Si la contraseña no es correcta
                $session->setFlashdata('msg', 'Contraseña incorrecta');
                return redirect()->to('/login');
            }
        } else {
            // Si no se encuentra el usuario
            $session->setFlashdata('msg', 'No ingresó un email válido o no está registrado');
            return redirect()->to('/login');
        }
    }

    public function logout() {
        // Cerramos la sesión y redirigimos al inicio
        $session = session();
        $session->destroy();
        return redirect()->to('/');
    }

}
