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

    // Método para procesar la actualización de edicion
    public function update($id = null)
    {
        helper(['form']);
        
        // Reglas de validación (modificadas para edición)
        $rules = [
            'nombre'  => 'required|min_length[3]',
            'apellido'=> 'required|min_length[3]|max_length[25]',
            'usuario' => 'required|min_length[3]',
            'email'   => "required|min_length[10]|max_length[100]|valid_email|is_unique[usuarios.email,id_usuario,{$id}]",
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
        
        // Solo actualizar contraseña si se proporcionó una nueva
        if ($this->request->getVar('pass')) {
            $data['pass'] = password_hash($this->request->getVar('pass'), PASSWORD_DEFAULT);
        }
        
        $model->update($id, $data);
        
        session()->setFlashdata('success', 'Usuario actualizado correctamente');
        return redirect()->to(base_url('usuarios'));
    }

    // Método para eliminar usuario
    public function eliminar($id = null)
    {
        $model = new Usuario_model();
        $model->where('id_usuarios', $id)->delete($id);
        
        session()->setFlashdata('success', 'Usuario eliminado correctamente');
        return redirect()->to(base_url('usuarios'));
    }

    public function cambiarEstado($id)
    {
        $usuarioModel = new Usuario_model();
        $usuario = $usuarioModel->find($id);

        if ($usuario) {
            $nuevoEstado = ($usuario['baja'] == 'NO') ? 'SI' : 'NO';
            $usuarioModel->update($id, ['baja' => $nuevoEstado]);
            session()->setFlashdata('success', 'Estado del usuario actualizado');
        }

        return redirect()->to(base_url('listaUsuarios'));
    }
}
