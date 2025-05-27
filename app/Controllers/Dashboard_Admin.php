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
        $data['titulo'] = 'Alta de Productos';
        echo view('front/head_view', $data);
        echo view('back/CRUD_Productos/AltaDeProductos');
        echo view('back/dashboard');
    }

    public function listaProductos()
    {   
        $data['titulo'] = 'Lista de Productos';
        echo view('front/head_view', $data);
        echo view('back/CRUD_Productos/ListaDeProductos');
        echo view('back/dashboard');
    }

     public function edicionProductos()
    {   
        $data['titulo'] = 'edición de Productos';
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