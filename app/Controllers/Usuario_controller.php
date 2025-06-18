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


        //Instanciamos el modelo y guardamos los datos si lavalidación fuecorrecta.
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
                // Guardar la contraseña hasheada
                'pass'     => password_hash($this->request->getVar('pass'), PASSWORD_DEFAULT)
            ]);

            // Mensaje de éxito usando Flashdata (se muestra una sola vez)
            session()->setFlashdata('success', 'Usuario registrado con éxito');
                return redirect()->to('/Registrarse');
        }
    }

    public function nuevoUsuario()
    {
        $data['titulo'] = 'Alta de Usuario';

        echo view('front/head_view', $data);
        echo view('back/Admin_Navbar');
        echo view('back/CRUD_Usuarios/AltaUsuario', $data);
        echo view('back/Admin_Footer');
    }

    public function crearUsuario()
    {
        helper(['form', 'url']);

        $rules = [
            'nombre'    => 'required|min_length[3]',
            'apellido'  => 'required|min_length[3]|max_length[25]',
            'usuario'   => 'required|min_length[3]',
            'email'     => 'required|valid_email|is_unique[usuarios.email]',
            'pass'      => 'required|min_length[6]|max_length[20]',
            'perfil_id' => 'required|in_list[1,2]'
        ];

        if (!$this->validate($rules)) {
            $data = [
                'titulo'     => 'Alta de Usuario',
                'validation' => $this->validator
            ];
            echo view('front/head_view', $data);
            echo view('back/Admin_Navbar');
            echo view('back/CRUD_Usuarios/AltaUsuario', $data);
            echo view('back/Admin_Footer');
            return;
        }

        $usuarioModel = new Usuario_model();
        $usuarioModel->save([
            'nombre'    => $this->request->getPost('nombre'),
            'apellido'  => $this->request->getPost('apellido'),
            'usuario'   => $this->request->getPost('usuario'),
            'email'     => $this->request->getPost('email'),
            'pass'      => password_hash($this->request->getPost('pass'), PASSWORD_DEFAULT),
            'perfil_id' => $this->request->getPost('perfil_id'),
            'baja'      => 'NO'
        ]);

        session()->setFlashdata('success', 'Usuario creado correctamente');
        return redirect()->to(base_url('listaUsuarios'));
    }


    public function listarUsuarios(){
        $usuarioModel = new Usuario_model();

        $data = [
            'usuarios' => $usuarioModel->orderBy('id_usuarios', 'ASC')->findAll(),
            'titulo' => 'Lista de Usuarios'
        ];

        echo view('front/head_view', $data);
        echo view('back/Admin_Navbar');
        echo view('back/CRUD_Usuarios/ListaUsuarios', $data);
        echo view('back/Admin_Footer');
    }

    public function editar($id = null)
    {
        $usuarioModel = new Usuario_model();

        // Verificamos si el ID es válido
        if ($id === null || !$usuarioModel->find($id)) {
            return redirect()->to('/listaUsuarios')->with('error', 'Usuario no encontrado');
        } else {
            $data = [
            'usuario' => $usuarioModel->find($id),
            'titulo' => 'Editar Usuario'
            ];
        }
        echo view('front/head_view', $data);
            echo view('back/Admin_Navbar');
            echo view('back/CRUD_Usuarios/EditUsuarios', $data);
            echo view('back/Admin_Footer');

        
    }

    // Método para procesar la actualización de edicion
    public function update($id = null)
    {
        helper(['form']);
        
        // Reglas de validación (modificadas para edición)
        $rules = [
            'nombre'  => 'required|min_length[3]',
            'apellido'=> 'required|min_length[3]|max_length[25]',
            'usuario' => 'required|min_length[3]',
            'email'   => "required|min_length[10]|max_length[100]|valid_email|is_unique[usuarios.email,id_usuarios,{$id}]",
            'pass'    => 'permit_empty|min_length[6]|max_length[20]'
        ];
        
        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('validation', $this->validator);
        }
        
        $model = new Usuario_model();
        $data = [
            'nombre'   => $this->request->getVar('nombre'),
            'apellido' => $this->request->getVar('apellido'),
            'usuario'  => $this->request->getVar('usuario'),
            'email'    => $this->request->getVar('email'),
            'perfil_id'=> $this->request->getVar('perfil_id'),
            'baja'     => $this->request->getVar('baja')
        ];
        
        
        $model->update($id, $data);
        
        session()->setFlashdata('success', 'Usuario actualizado correctamente');
        return redirect()->to(base_url('listaUsuarios'));
    }

    public function cambiarEstado($id, $estado = null)
    {
        $usuarioModel = new Usuario_model();
        $usuario = $usuarioModel->find($id);

        if ($usuario) {
            // Protección para admin (opcional)
            if ($usuario['usuario'] === 'admin') {
                session()->setFlashdata('error', 'No se puede modificar al administrador.');
                return redirect()->to(base_url('listaUsuarios'));
            }

            $nuevoEstado = ($estado === 'SI') ? 'SI' : 'NO';
            $usuarioModel->update($id, ['baja' => $nuevoEstado]);
            session()->setFlashdata('success', 'Estado del usuario actualizado');
        }

        return redirect()->to(base_url('listaUsuarios'));
    }

}
