<?php
namespace App\Controllers;
use App\Models\Usuario_model;
use CodeIgniter\Controller;

class Usuario_controller extends Controller
{
    
    //Constructor:  Carga los helpers de formularios y URLs para usarlos fácilmente
    public function construct(){
        helper(['form', 'url']);
    }
    

    //Este método se ejecuta cuando el formulario se envía
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
