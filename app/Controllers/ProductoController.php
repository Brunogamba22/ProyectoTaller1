<?php

namespace App\Controllers;

// Importamos los modelos necesarios
use App\Models\Producto_model;
use App\Models\Usuario_Model;
use App\Models\Ventas_cabecera_model;
use App\Models\Ventas_detalle_model;
use App\Models\categoria_model;

use CodeIgniter\Controller;

class ProductoController extends Controller
{
    public function __construct()
    {
        // Cargamos los ayudantes necesarios
        helper(['url', 'form']);
        // Iniciamos la sesión
        $session = session();
    }


    // 🟢 Muestra la lista de productos
    public function index()
    {
        $productoModel = new Producto_model();

        // Obtener todos los productos desde el modelo
        $data['producto'] = $productoModel->getProductoAll(); // Esta función debe estar en el modelo

        $dato['titulo'] = 'Crud productos';

        // Cargamos las vistas
        echo view('front/head_view_crud', $dato);
        echo view('front/nav_view');
        echo view('back/productos/AltaDeProductos', $data);
        echo view('front/footer_view');
    }

    // 🟠 Muestra el formulario de alta de producto
    public function crearproducto()
    {
        $categoriasModel = new Categoria_model();
        $data['categorias'] = $categoriasModel->getCategorias(); // Obtener categorías desde BD

        $productoModel = new Producto_model();
        $data['producto'] = $productoModel->getProductoAll();

        echo view('back/CRUD_Productos/AltaDeProductos', $data);
    }

    // 🔴 Procesa el formulario de alta de producto
    public function store()
    {
        // Definimos las reglas de validación
        $input = $this->validate([
            'nombre_prod' => 'required|min_length[3]',
            'categoria'   => 'required|is_not_unique[categorias.id]',
            'precio'      => 'required|numeric',
            //'precio_vta'  => 'required|numeric',
            'stock'       => 'required',
            //'stock_min'   => 'required',
            'imagen'      => 'uploaded[imagen]|mime_in[imagen,image/jpg,image/jpeg,image/png]'
        ]);

        $productoModel = new Producto_model();

        // ❌ Si falla la validación
        if (!$input) {
            $categoriaModel = new Categoria_model();
            $data['categorias'] = $categoriaModel->getCategorias();
            $data['validation'] = $this->validator;

            $dato['titulo'] = 'Alta';

            echo view('front/head_view', $dato);
            echo view('front/nav_view');
            echo view('back/productos/AltaDeProductos', $data);
            echo view('front/footer_view');
        } else {
            // ✅ Si la validación fue exitosa

            // Obtenemos el archivo de imagen
            $img = $this->request->getFile('imagen');

             // Creamos nombre legible en lugar de aleatorio
            $nombreImagen = strtolower(str_replace(' ', '_', $this->request->getVar('nombre_prod'))) . '.' . $img->guessExtension();

            // Movemos la imagen a la carpeta específica
            $img->move(ROOTPATH . 'assets/uploads/productos/', $nombreImagen);

            // Armamos el array con los datos del formulario
            $data = [
                'nombre_prod' => $this->request->getVar('nombre_prod'),
                'imagen'      => $nombreImagen, // Guardamos solo el nombre del archivo
                'categoria_id'=> $this->request->getVar('categoria'),
                'precio'      => $this->request->getVar('precio'),
                //'precio_vta'  => $this->request->getVar('precio_vta'),
                'stock'       => $this->request->getVar('stock'),
                //'stock_min'   => $this->request->getVar('stock_min'),
                // 'eliminado' => NO (opcional, si manejás baja lógica)
            ];

            // Insertamos en la base de datos
            $productoModel->insert($data);

            // Mensaje flash de éxito
            session()->setFlashdata('success', 'Alta Exitosa...');

            // Redireccionamos al formulario de alta
            return $this->response->redirect(site_url('crear'));
        }
    }

        // 🟡 Muestra el formulario para editar un producto existente
    public function editar($id = null)
    {
        $productoModel = new Producto_model();
        $categoriaModel = new Categoria_model();
        
        $producto = $productoModel->find($id);
        $categorias = $categoriaModel->getCategoria();

        // Verifica que el producto exista
        
        if (!$producto) {
            // Mejor manejo del error
                session()->setFlashdata('error', 'Producto no encontrado');
                return redirect()->to(base_url('Listado'));
        }

        $data = [
            'titulo' => 'Editar Producto',
            'producto' => $producto,
            'categorias' => $categorias,
            'validation' => session()->getFlashdata('validation') // Para mantener errores de validación
        ];


        
        //echo view('back/CRUD_Productos/Edit', $data);
    }

    // 🔵 Procesa el formulario de edición y actualiza el producto
    public function actualizar($id)
    {
        $productoModel = new Producto_model();

        // Validaciones mínimas necesarias
        $rules = [
            'nombre_prod' => 'required|min_length[3]',
            'categoria'   => 'is_not_unique(categorias.id)',
            'precio'      => 'required|numeric',
            'precio_vta'  => 'required|numeric',
            'stock'       => 'required|numeric',
            'stock_min'   => 'required|numeric',
        ];

        // Si hay una imagen nueva, la validamos también
        if ($this->request->getFile('imagen')->isValid()) {
            $rules['imagen'] = 'uploaded[imagen]|mime_in[imagen,image/jpg,image/jpeg,image/png]';
        }

        // Ejecutamos validación
        if (!$this->validate($rules)) {
            // Si falla, redirigimos con errores
            $data['validation'] = $this->validator;

            // También pasamos el producto actual y las categorías
            $data['producto'] = $productoModel->find($id);
            $categoriaModel = new Categoria_model();
            $data['categorias'] = $categoriaModel->getCategorias();

            echo view('back/CRUD_Productos/Edit', $data);
            return;
        }

        // Obtenemos los datos del formulario
        $data = [
            'nombre_prod'  => $this->request->getVar('nombre_prod'),
            'categoria_id' => $this->request->getVar('categoria'),
            'precio'       => $this->request->getVar('precio'),
           // 'precio_vta'   => $this->request->getVar('precio_vta'),
            'stock'        => $this->request->getVar('stock'),
           // 'stock_min'    => $this->request->getVar('stock_min')
        ];

        // Si se subió una imagen nueva, la procesamos
        $img = $this->request->getFile('imagen');
        if ($img->isValid() && !$img->hasMoved()) {
            $nombre_aleatorio = $img->getRandomName();
            $img->move(ROOTPATH . 'assets/uploads/productos', $nombre_aleatorio);
            $data['imagen'] = $nombre_aleatorio; // reemplazamos la imagen
        }

        // Actualizamos en la base de datos
        $productoModel->update($id, $data);

        // Mensaje flash de éxito
        session()->setFlashdata('success', 'Producto actualizado correctamente.');

        // Redirigimos al listado
        return redirect()->to(base_url('admin/productos'));
    }


}
