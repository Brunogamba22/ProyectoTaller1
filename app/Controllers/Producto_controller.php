<?php
namespace App\Controllers;

use App\Models\Producto_Model;
use App\Models\Categoria_Model;
use App\Models\Usuario_model;  
use App\Models\Ventas_Cabecera_Model;
use App\Models\Ventas_Detalle_Model;
use CodeIgniter\Controller;

class Producto_controller extends Controller
{
    public function __construct()
    {
        helper(['url', 'form']);
        $session = session();
    }

    //  Mostrar productos (lista general)
    public function index()
    {
        $productoModel = new Producto_Model();
        $data['producto'] = $productoModel->getProductoAll(); // función definida en el modelo

        $data['titulo'] = "Crud productos";

        echo view('front/head_view', $data);
        echo view('front/nav_view');
        echo view('back/productos/producto_nuevo_view', $data);
        echo view('front/footer_view');
    }

    //  Formulario para alta de producto
    public function create()
    {
        $categoriaModel = new Categoria_Model();
        $data['categoria'] = $categoriaModel->getCategoriaAll(); // función definida en el modelo
        $productoModel = new Producto_Model();
        $data['producto'] = $productoModel->getProductoAll();

        $data['titulo'] = "Alta producto";

        echo view('front/head_view', $data);
        echo view('front/nav_view');
        echo view('back/productos/alta_producto_view', $data);
        echo view('front/footer_view');
    }

    // Guardar producto (store)
    public function store()
    {
        // Validaciones
        $input = $this->validate([
            'nombre_prod'  => 'required|min_length[3]',
            'categoria'    => 'is_not_unique[categorias.id]',
            'descripcion'  => 'required',
            'precio'       => 'required|numeric',
            'precio_vta'   => 'required|numeric',
            'stock_min'    => 'required|integer',
            'stock'        => 'required|integer',
            'imagen'       => 'uploaded[imagen]|max_size[imagen,2048]|is_image[imagen]'
        ]);

        if (!$input) {
            $categoriaModel = new Categoria_Model();
            $data['categoria'] = $categoriaModel->getCategoriaAll();
            $data['validation'] = $this->validator;

            $data['titulo'] = "Alta";
            echo view('front/head_view', $data);
            echo view('front/nav_view');
            echo view('back/productos/alta_producto_view', $data);
            echo view('front/footer_view');
        } else {
            // Subida de imagen
            $img = $this->request->getFile('imagen');
            $nombre_aleatorio = $img->getRandomName();
            $img->move(ROOTPATH . 'assets/uploads', $nombre_aleatorio);

            // Armado de datos
            $data = [
                'nombre_prod'  => $this->request->getVar('nombre_prod'),
                'descripcion'  => $this->request->getVar('descripcion'),
                'imagen'       => $nombre_aleatorio,
                'categoria_id' => $this->request->getVar('categoria'),
                'precio'       => $this->request->getVar('precio'),
                'precio_vta'   => $this->request->getVar('precio_vta'),
                'stock_min'    => $this->request->getVar('stock_min'),
                'stock'        => $this->request->getVar('stock'),
                'activo'       => 1 // o campo 'eliminado' si usás soft delete
            ];

            // Guardar en la base de datos
            $productoModel = new Producto_Model();
            $productoModel->insert($data);

            // Mensaje de éxito y redirección
            session()->setFlashdata('success', 'Alta Exitosa...');
            return $this->response->redirect(site_url('crear'));
        }
    }
}
