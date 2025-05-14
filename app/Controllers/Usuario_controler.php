<?php
namespace App\Controllers;
use App\Models\Usuario_model;
use CodeIgniter\Controller;

class Usuario_controller extends Controller
{
    public function __construct(){
        helper(['form', 'url']);
    }

    public function create()
    {
        $dato['titulo'] = 'Registro';
        echo view('front/head_view', $dato);
        echo view('front/nav_view');
        echo view('back/usuario/registro'); // Esta es la vista con el formulario
        echo view('front/footer_view');
    }

    public function formValidation()
    {
        $input = $this->validate([
            'nombre'  => 'required|min_length[3]',
            'apellido'=> 'required|min_length[3]|max_length[25]',
            'usuario' => 'required|min_length[3]',
            'email'   => 'required|min_length[10]|max_length[100]|valid_email|is_unique[usuarios.email]',
            'pass'    => 'required|min_length[3]|max_length[10]'
        ]);

        if (!$input) {
            return redirect()->back()->withInput()->with('validation', \Config\Services::validation())
                                                 ->with('fail', 'Error en los datos ingresados');
        }

        // Guardar en base de datos
        $usuarioModel = new Usuario_model();
        $usuarioModel->save([
            'nombre'   => $this->request->getPost('nombre'),
            'apellido' => $this->request->getPost('apellido'),
            'usuario'  => $this->request->getPost('usuario'),
            'email'    => $this->request->getPost('email'),
            'pass'     => password_hash($this->request->getPost('pass'), PASSWORD_DEFAULT)
        ]);

        return redirect()->to('/registro')->with('success', 'Usuario registrado exitosamente');
    }
}
