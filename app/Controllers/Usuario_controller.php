<?php
namespace App\Controllers;
use App\Models\Usuario_model;
use CodeIgniter\Controller;

class Usuario_controller extends Controller
{
    // Constructor: Carga los helpers de formularios y URLs para usarlos fácilmente
    public function __construct(){
        helper(['form', 'url']);
    }

    // Este método se ejecuta cuando el formulario se envía
    public function formValidation()
    {
        $input = $this->validate([
            'nombre'  => 'required|min_length[3]',
            'apellido'=> 'required|min_length[3]|max_length[25]',
            'usuario' => 'required|min_length[3]',
            'email'   => 'required|min_length[10]|max_length[100]|valid_email|is_unique[usuarios.email]',
            'pass'    => 'required|min_length[3]|max_length[20]'
        ]);


        //Instanciamos el modelo yguardamos losdatos si lavalidación fuecorrecta.
        //Lugo enviamoselmensaje deéxito consetFlashdata
        $formModel = new Usuario_model();

        if (!$input) {
            $data['titulo']= 'registro';
            echo view('front/head_view', $data);
            echo view('front/nav_view');
            echo view('back/registro', ['validation' => $this->validator]);
            echo view('front/footer_view');
            ;
        } else {
    // Guardar los datos si la validación fue correcta
    $formModel->save([
        'nombre'   => $this->request->getVar('nombre'),
        'apellido' => $this->request->getVar('apellido'),
        'usuario'  => $this->request->getVar('usuario'),
        'email'    => $this->request->getVar('email'),
        'pass'     => password_hash($this->request->getVar('pass'), PASSWORD_DEFAULT)
    ]);

    // Mensaje de éxito usando Flashdata (se muestra una sola vez)
    session()->setFlashdata('success', 'Usuario registrado con éxito');
    return redirect()->to('/Registrarse');
        }
    }
}
