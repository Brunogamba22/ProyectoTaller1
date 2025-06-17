<?php

namespace App\Controllers;

// Importamos los modelos necesarios
use App\Models\Producto_model;
use App\Models\Usuario_Model;
use App\Models\Ventas_cabecera_model;
use App\Models\Ventas_detalle_model;
use App\Models\categoria_model;
use App\Models\ProductoTallas_model;
use CodeIgniter\Controller;
use App\Models\Tallas_model;

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
        $data['producto'] = $productoModel->getProductosConStockTotal();

        $dato['titulo'] = 'Crud productos';

        // Cargamos las vistas
        echo view('front/head_view', $dato);
        echo view('front/nav_view');
        echo view('back/productos/AltaDeProductos', $data);
        echo view('front/footer_view');
    }

    // 🟠 Muestra el formulario de alta de producto
    public function crearproducto()
    {
        $categoriasModel = new Categoria_model();
        $productoModel = new Producto_model();
        $tallasModel = new ProductoTallas_model();
        $tallaModel = new Tallas_model(); // 👈 nuevo modelo para traer tallas

        // Obtenemos todas las tallas disponibles
        $productos = $productoModel->getProductosConStockTotal();

        // Agregamos las tallas con su stock por producto
        foreach ($productos as &$p) {
            $p['tallas'] = $tallasModel->obtenerTallasPorProducto($p['id']);
        }
        // Preparamos los datos para la vista
        $data['producto'] = $productos;
        $data['categorias'] = $categoriasModel->getCategorias();
        $data['todasLasTallas'] = $tallaModel->findAll(); // 👈 esta es la línea clave
        $data['titulo'] = 'Alta de Productos';
        // Cargamos las vistas
        echo view('front/head_view', $data);   
        echo view('back/Admin_Navbar');
        echo view('back/CRUD_Productos/ListaDeProductos', $data);
        echo view('back/Admin_Footer');
    }

    // 🔴 Procesa el formulario de alta de producto
    public function store()
    {
        // Definimos las reglas de validación
        $input = $this->validate([
            'nombre' => 'required|min_length[3]',
            'categoria'   => 'required|is_not_unique[categorias.id]',
            'precio'      => 'required|numeric',
            'precio_vta'  => 'required|numeric',
            'stock'       => 'required',
            'imagen'      => 'uploaded[imagen]|mime_in[imagen,image/jpg,image/jpeg,image/png]'
        ]);

        $productoModel = new Producto_model();

        // ❌ Si falla la validación
        if (!$input) {
            $categoriaModel = new Categoria_model();
            $data['categorias'] = $categoriaModel->getCategorias();
            $data['validation'] = $this->validator;

            $dato['titulo'] = 'Alta';

            echo view('front/head_view', $data);
            echo view('back/Admin_Navbar');
            echo view('back/CRUD_Productos/AltaDeProductos', $data);
            echo view('back/Admin_Footer');
        } else {
            // ✅ Si la validación fue exitosa

            // Obtenemos el archivo de imagen
            $img = $this->request->getFile('imagen');

             // Creamos nombre legible en lugar de aleatorio
            $nombreImagen = strtolower(str_replace(' ', '_', $this->request->getVar('nombre'))) . '.' . $img->guessExtension();

            // Movemos la imagen a la carpeta específica
            $img->move(ROOTPATH . 'assets/uploads/productos/', $nombreImagen);

            // Armamos el array con los datos del formulario
            $data = [
                'nombre' => $this->request->getVar('nombre'),
                'imagen'      => $nombreImagen, // Guardamos solo el nombre del archivo
                'categoria_id'=> $this->request->getVar('categoria'),
                'precio'      => $this->request->getVar('precio'),
                'precio_vta'  => $this->request->getVar('precio_vta'),
                'stock'       => $this->request->getVar('stock'),
                // 'eliminado' => NO (opcional, si manejás baja lógica)
            ];

            // Insertamos en la base de datos
            $productoModel->insert($data);

            $tallasProductoModel = new \App\Models\ProductoTallas_model();
            //. Guarda tallas
            $producto_id = $productoModel->insertID(); // ID recién insertado
            $stocks = $this->request->getPost('stock_por_talla'); // array con [talla_id => cantidad]

            foreach ($stocks as $talla_id => $cantidad) {
                if ($cantidad !== '' && $cantidad >= 0) {
                    $tallasProductoModel->insert([
                        'producto_id' => $producto_id,
                        'talla_id' => $talla_id,
                        'stock' => $cantidad,
                        'stock_min' => 1 // o podrías tomarlo de un input si lo querés configurable
                    ]);
                }
            }

            // Mensaje flash de éxito
            session()->setFlashdata('success', 'Alta Exitosa...');

            // Redireccionamos al formulario de alta
            return $this->response->redirect(site_url('producto/crear'));
        }
    }

        // 🟡 Muestra el formulario para editar un producto existente
        public function editar($id = null)
    {
        $productoModel = new Producto_model();
        $categoriaModel = new Categoria_model();
        $tallasModel = new ProductoTallas_model();
        $tallaBaseModel = new Tallas_model();

        $producto = $productoModel->find($id);
        $categorias = $categoriaModel->getCategorias();

        if (!$producto) {
            session()->setFlashdata('error', 'Producto no encontrado');
            return redirect()->to(base_url('Listado'));
        }

        // 🟢 Filtrar tallas según categoría
        $todasLasTallas = $tallaBaseModel->findAll();
        $tallasFiltradas = [];

        if ($producto['categoria_id'] == 5) { // Calzado
            $tallasFiltradas = array_filter($todasLasTallas, function($talla) {
                return in_array($talla['nombre'], ['40', '41', '42', '43', '44']);
            });
        } else { // Ropa
            $tallasFiltradas = array_filter($tallasFiltradas = array_filter($todasLasTallas, function($talla) {
                return in_array($talla['nombre'], ['S', 'M', 'L', 'XL', 'XXL']);
            }));
        }

        $data = [
            'todasLasTallas' => $tallasFiltradas,
            'tallasProducto' => $tallasModel->obtenerTallasPorProducto($id),
            'producto' => $producto,
            'categorias' => $categorias,
            'validation' => session()->getFlashdata('validation'),
            'titulo' => 'Editar Producto',
        ];

        echo view('front/head_view', ['titulo' => 'Editar Producto']);
        echo view('back/Admin_Navbar');
        echo view('back/CRUD_Productos/Edit', $data);
        echo view('back/Admin_Footer');
    }


    // 🔵 Procesa el formulario de edición y actualiza el producto
    public function actualizar($id)
    {
        $productoModel = new Producto_model();
        

        // Validaciones mínimas necesarias
        $rules = [
            'nombre' => 'required|min_length[3]',
            'categoria'   => 'required|integer',
            'precio'      => 'required|numeric',
            'precio_vta'  => 'required|numeric',
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
            'nombre'  => $this->request->getVar('nombre'),
            'categoria_id' => $this->request->getVar('categoria'),
            'precio'       => $this->request->getVar('precio'),
            'precio_vta'   => $this->request->getVar('precio_vta'),
            'stock'        => $this->request->getVar('stock'),
            'stock_min'    => $this->request->getVar('stock_min')
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

            // Procesamos tallas
        $productoTallasModel = new ProductoTallas_model();
        $stockPorTalla = $this->request->getPost('stock_por_talla');
        $stockMinPorTalla = $this->request->getPost('stock_min_por_talla');

        foreach ($stockPorTalla as $talla_id => $cantidad) {
            $minimo = $stockMinPorTalla[$talla_id] ?? 1;

            $existente = $productoTallasModel->where([
                'producto_id' => $id,
                'talla_id' => $talla_id
            ])->first();

            if ($existente) {
                $productoTallasModel->where([
                    'producto_id' => $id,
                    'talla_id' => $talla_id
                ])->set([
                    'stock' => $cantidad,
                    'stock_min' => $minimo
                ])->update();
            } else {
                $productoTallasModel->insert([
                    'producto_id' => $id,
                    'talla_id' => $talla_id,
                    'stock' => $cantidad,
                    'stock_min' => $minimo
                ]);
            }
        }

        // Mensaje flash de éxito
        session()->setFlashdata('success', 'Producto actualizado correctamente.');

        // Redirigimos al listado
        return redirect()->to(base_url('Listado')) ;
    }


}
