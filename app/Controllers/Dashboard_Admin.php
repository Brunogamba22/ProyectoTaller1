<?php
namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Usuario_model;
use App\Models\Categoria_model;
use App\Models\Producto_model;  
use App\Models\ProductoTallas_model;
use App\Models\Tallas_model;
// Asegúrate de que los modelos estén correctamente importados

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
        helper('form');

        $categoriaModel = new \App\Models\Categoria_model();
        $tallaModel = new \App\Models\Tallas_model(); // <-- agregá esta línea

        $data['categorias'] = $categoriaModel->getCategorias();
        $data['todasLasTallas'] = $tallaModel->findAll(); //
        $data['titulo'] = 'Alta de Productos';

        echo view('front/head_view', $data);
        echo view('back/CRUD_Productos/AltaDeProductos', $data); //
        echo view('back/Admin_Navbar');
        echo view('back/Admin_Footer');
    }



    //PARA MOSTRAR LA LISTA DE PRODUCTOS EN EL ADMIN
    public function listaProductosAdmin()
    {
        $productoModel = new \App\Models\Producto_model();
        $tallasModel = new \App\Models\ProductoTallas_model();
        $tallaModel = new \App\Models\Tallas_model();
        // Obtener todos los productos con stock total
            $productos = $productoModel->getProductosConStockTotal();

            // 🔁 Asociar tallas a cada producto
            foreach ($productos as &$p) {
                $p['tallas'] = $tallasModel->obtenerTallasPorProducto($p['id']);
            }

            $data['productos'] = $productos;
            $data['titulo'] = 'Lista de Productos';
            $data['todasLasTallas'] = $tallaModel->findAll();
        echo view('front/head_view', $data);
        echo view('back/Admin_Navbar');
        echo view('back/CRUD_Productos/ListaDeProductos', $data);
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