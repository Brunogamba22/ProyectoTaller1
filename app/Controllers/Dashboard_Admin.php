<?php
namespace App\Controllers;

use App\Controllers\BaseController;

class Dashboard_Admin extends BaseController
{
    public function index()
    {
        $data['titulo'] = 'Administrador';
        echo view('front/head_view', $data);
        echo view('back/dashboard');
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
    echo view('back/CRUD_Productos/AltaDeProductos', $data); // <-- Pasamos $data correctamente
    echo view('back/dashboard');
}


       //PARA MOSTRAR LA LISTA DE PRODUCTOS EN EL ADMIN
   public function listaProductosAdmin()
{
    $productoModel = new \App\Models\Producto_model();

    // Usamos tu método que ya trae las categorías
    $data['producto'] = $productoModel->getProductosConCategorias();
    $data['titulo'] = 'Lista de Productos';

    echo view('front/head_view', $data);
    echo view('front/nav_view');
    echo view('back/CRUD_Productos/ListaDeProductos', $data);
    echo view('front/footer_view');
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
        echo view('back/dashboard');
    }
//ESTO LO SAQUE
    public function categoriaProductos()
    {   
        $data['titulo'] = 'categoría de Productos';
        // Aquí podrías cargar los datos de los productos para edición desde la base de datos
        echo view('front/head_view', $data);
        echo view('back/CRUD_Productos/CategoriaProductos');
        echo view('back/dashboard');
    }
}