<?php

namespace App\Controllers;

use App\Models\Producto_model;
use App\Models\ProductoTallas_model;
use CodeIgniter\Controller;

class CarritoController extends Controller
{
    public function agregar()
    {
        $session = session();

        $producto_id = $this->request->getPost('producto_id');
        $talla_id = $this->request->getPost('talla_id');

        $productoModel = new Producto_model();
        $tallasModel = new ProductoTallas_model();

        $producto = $productoModel->find($producto_id);
        $talle = $tallasModel->where(['producto_id' => $producto_id, 'talla_id' => $talla_id])->first();

        if (!$producto || !$talle) {
            return redirect()->back()->with('error', 'Producto o talla no válida');
        }

        // Armar estructura del carrito
        $carrito = $session->get('carrito') ?? [];

        $key = $producto_id . '-' . $talla_id;

        if (isset($carrito[$key])) {
            $carrito[$key]['cantidad']++;
        } else {
            $carrito[$key] = [
                'producto_id' => $producto_id,
                'talla_id' => $talla_id,
                'nombre' => $producto['nombre'],
                'precio' => $producto['precio_vta'],
                'cantidad' => 1,
                'imagen' => $producto['imagen'],
                'talle' => $talle['talla'] ?? '',
            ];
        }

        $session->set('carrito', $carrito);

        return redirect()->to(base_url('carrito'));
    }

    public function index()
    {
        $data = [
            'carrito' => session()->get('carrito') ?? [],
            'titulo' => 'Tu Carrito'
        ];

        echo view('front/head_view', $data);
        echo view('front/nav_view');
        echo view('front/Carrito', $data);
        echo view('front/footer_view');
    }
}
