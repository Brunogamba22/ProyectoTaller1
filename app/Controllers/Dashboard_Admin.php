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



        public function listaProductosAdmin()
    {
        $productoModel = new Producto_model();
        $tallasModel = new ProductoTallas_model();
        $tallaModel = new Tallas_model();

        // Usamos el query builder desde el modelo
        $productos = $productoModel
            ->getProductosConStockTotalQuery()
             ->orderBy('productos.id', 'desc')
            ->paginate(10); //  paginación de 10 productos

        //  Asignamos tallas a cada producto paginado
        foreach ($productos as &$p) {
            $p['tallas'] = $tallasModel->obtenerTallasPorProducto($p['id']);
        }
        $currentPage = $productoModel->pager->getCurrentPage();
        $totalPages = $productoModel->pager->getPageCount();


        // Lista de productos paginados (ya vienen ordenados por ID descendente)
        $data['productos'] = $productos;

        // Título que se usará en la vista (por ejemplo, en el <title> o encabezado)
        $data['titulo'] = 'Lista de Productos';

        // Se obtienen todas las tallas disponibles desde el modelo de tallas (para mostrar en filtros o formularios)
        $data['todasLasTallas'] = $tallaModel->findAll();

        // Se pasa el paginador para que la vista pueda usarlo (aunque lo estamos usando de forma personalizada)
        $data['pager'] = $productoModel->pager;

        // Página actual del paginado (número actual)
        $data['pagina'] = $currentPage;

        // Total de páginas disponibles según la cantidad de productos y la paginación (10 por página)
        $data['totalPaginas'] = $totalPages;


        echo view('front/head_view', $data);
        echo view('back/Admin_Navbar');
        echo view('back/CRUD_Productos/ListaDeProductos', $data);
        echo view('back/Admin_Footer');
    }




}