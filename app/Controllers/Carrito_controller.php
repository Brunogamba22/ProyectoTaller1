<?php
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Usuarios_model;
use App\Models\Producto_Model;
use App\Models\Ventas_cabecera_model;
use App\Models\Ventas_detalle_model;

class carrito_controller extends BaseController
{
    public function __construct()
    {
        helper(['form', 'url', 'cart']);
        $cart = \Config\Services::cart(); // inicializa la clase cart de CI
        $session = session(); // inicia la sesión


    }

    // ✅ Muestra todos los productos del catálogo
    public function catalogo()
    {
        $productoModel = new Producto_Model();

        // obtenemos todos los productos ordenados por id descendente
        $data['productos'] = $productoModel->orderBy('id', 'DESC')->findAll();

        // cargamos la vista con los productos
        $dato['titulo'] = 'Todos los Productos';
        echo view('front/head_view', $dato);
        echo view('front/nav_view');
        echo view('/front/Productos/productos', $data);
        echo view('front/footer_view');
    }

    // ✅ Función muestra() para ver el carrito
        public function muestra()
    {
        $cart = \Config\Services::cart()->contents();
        $data['cart'] = $cart;

        // 👉 Importamos modelo de tallas
        $tallaModel = new \App\Models\Tallas_model();

        // Convertimos los ID de talles a nombre (S, M, etc.)
        foreach ($data['cart'] as &$item) {
            $idTalle = $item['options']['talle'];
            $nombreTalle = $tallaModel->obtenerNombreTalle($idTalle);
            $item['options']['talle_nombre'] = $nombreTalle;
        }

        $dato['titulo'] = 'Confirmar compra';

        echo view('front/head_view', $dato);
        echo view('front/nav_view');
        echo view('back/CRUD_Ventas/CarritoVista', ['cart' => $data['cart']]);
        echo view('front/footer_view');
    }

        public function add() //agregar productos al carrito
    {
        

        $request = \Config\Services::request(); //trae todo lo relacionado con la solicitud http
        $cart = \Config\Services::Cart(); //devuelve una instancia del carrito activa

        $cart->insert([
        'id'    => $request->getPost('id'),                       // id del producto
        'qty'   => 1,                                             // cantidad inicial
        'name'  => $request->getPost('nombre_prod'),             // nombre del producto
        'price' => $request->getPost('precio_vta'),              // precio de venta
        'options' => [                                            // opciones adicionales
            'talle'  => $request->getPost('talle'),              // talle elegido
            'imagen' => $request->getPost('imagen')              // imagen del producto
        ]
        ]); 
        return redirect()->to(base_url('muestro')); // te lleva a la vista del carrito
    }

    public function eliminar_item($rowid)
    {
        $cart = \Config\Services::Cart();
        $cart->remove($rowid);
        return redirect()->to(base_url('muestro'));
    }

    public function borrar_carrito()
    {
        $cart = \Config\Services::Cart();
        $cart->destroy();
        return redirect()->to(base_url('muestro'));
    }
    
        public function remove($rowid)
    {
        $cart = \Config\Services::cart();
        if ($rowid === "all") {
            $cart->destroy(); // vacía el carrito
        } else {
            $cart->remove($rowid);
        }
        return redirect()->back()->withInput();
    }

    public function actualiza_carrito()
    {
        $cart = \Config\Services::cart();
        $request = \Config\Services::request();

        $cart->update([
            'id' => $request->getPost('id'),
            'qty' => 1,
            'price' => $request->getPost('precio_Vta'),
            'name' => $request->getPost('nombre_prod'),
            'imagen' => $request->getPost('imagen'),
        ]);

        return redirect()->back()->withInput();
    }

    public function devolver_carrito()
    {
        $cart = \Config\Services::cart();
        return $cart->contents();
    }

    public function suma($rowid)
    {
        // suma 1 a la cantidad del producto
        $cart = \Config\Services::cart();
        $item = $cart->getItem($rowid);
        if ($item) {
            $cart->update([
                'rowid' => $rowid,
                'qty' => $item['qty'] + 1
            ]);
        }
        return redirect()->to('muestro');
    }

    public function resta($rowid)
    {
        // resta 1 a la cantidad del producto
        $cart = \Config\Services::cart();
        $item = $cart->getItem($rowid);
        if ($item) {
            if ($item['qty'] > 1) {
                $cart->update([
                    'rowid' => $rowid,
                    'qty' => $item['qty'] - 1
                ]);
            } else {
                $cart->remove($rowid);
            }
        }
        return redirect()->to('muestro'); // redirecciona a la vista del carrito
    }


}
