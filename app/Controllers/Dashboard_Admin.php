<?php
namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Usuario_model;

class Dashboard_Admin extends BaseController
{
    public function index()
    {
        $data['titulo'] = 'Administrador';
        echo view('front/head_view', $data);
        echo view('back/Admin_Navbar');
        echo view('back/Admin_Footer');
    }

    /*****************************************************************
     * SECCIÓN USUARIOS
     *****************************************************************/

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



    /*****************************************************************
     * SECCIÓN PRODUCTOS
     *****************************************************************/

    public function altaProductos()
    {   
        helper('form'); // <-- Agregá esta línea

        $categoriaModel = new \App\Models\Categoria_model();
        $data['categorias'] = $categoriaModel->getCategorias(); // ⬅️ También faltaba esto

        $data['titulo'] = 'Alta de Productos';
            echo view('front/head_view', $data);
            echo view('back/CRUD_Productos/AltaDeProductos');
            echo view('back/Admin_Navbar');
            echo view('back/Admin_Footer');
    }


    //PARA MOSTRAR LA LISTA DE PRODUCTOS EN EL ADMIN
    public function listaProductosAdmin()
    {
        $productoModel = new \App\Models\Producto_model();

        // Usamos tu método que ya trae las categorías
        $data['producto'] = $productoModel->getProductosConCategorias();
        $data['titulo'] = 'Lista de Productos';

        echo view('front/head_view', $data);
        echo view('back/Admin_Navbar');
        echo view('back/CRUD_Productos/ListaDeProductos', $data);
        echo view('back/Admin_Footer');
    }

    public function edicionProductos()
    {   
        $categoriaModel = new \App\Models\Categoria_model();
    
        $data = [
            'titulo' => 'Edición de Productos',
            'categorias' => $categoriaModel->getCategorias(),
            'producto' => [] // Array vacío para evitar errores en la vista
        ];
        // Aquí podrías cargar los datos de los productos para edición desde la base de datos
        echo view('front/head_view', $data);
        echo view('back/CRUD_Productos/Edit');
        echo view('back/Admin_Navbar');
        echo view('back/Admin_Footer');
    }
//ESTO LO SAQUE
    public function categoriaProductos()
    {   
        $data['titulo'] = 'categoría de Productos';
        // Aquí podrías cargar los datos de los productos para edición desde la base de datos
        echo view('front/head_view', $data);
        echo view('back/CRUD_Productos/CategoriaProductos');
        echo view('back/Admin_Navbar');
        echo view('back/Admin_Footer');
    }
}