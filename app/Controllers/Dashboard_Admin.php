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

    

    



    /*****************************************************************
     * SECCIÓN PRODUCTOS
     *****************************************************************/
    public function altaProductos()
    {
        helper('form');

        $categoriaModel = new Categoria_model();
        $tallaModel = new Tallas_model(); // <-- agregá esta línea

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
        $productoModel = new Producto_model();
        $tallasModel = new ProductoTallas_model();
        $tallaModel = new Tallas_model();
        // Obtener todos los productos con stock total
            $productos = $productoModel->getProductosConStockTotal();

            // 🔁 Asociar tallas a cada producto
            foreach ($productos as &$p) {
                $p['tallas'] = $tallasModel->obtenerTallasPorProducto($p['id']);
            }
            $data['productos'] = $productos;
            $data['titulo'] = 'Lista de Productos';
            $data['todasLasTallas'] = $tallaModel->findAll();

        // Cargar la vista con los datos
        echo view('front/head_view', $data);
        echo view('back/Admin_Navbar');
        echo view('back/CRUD_Productos/ListaDeProductos', $data);
        echo view('back/Admin_Footer');
    }



}