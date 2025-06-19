<?php namespace App\Controllers;

use App\Models\Venta_cab_Model;
use App\Models\Venta_det_Model;
use App\Models\Producto_model;
use App\Models\ProductoTallas_model;

class VentasController extends BaseController
{

    protected $cabModel;
    protected $detModel;

    public function __construct()
    {
        helper(['form', 'url']);
        $this->cabModel = new Venta_cab_Model();
        $this->detModel = new Venta_det_Model();
    }

    /**
     * Muestra el reporte de ventas con filtro por fecha, búsqueda y paginación
     */
    public function ventas()
    {
        $filtro = $this->request->getGet('filtro') ?? 'all';
        $pagina = (int)($this->request->getGet('page') ?? 1);
        $porPagina = 10; // Cantidad de ventas por página
        $busqueda = trim($this->request->getGet('busqueda') ?? '');

        $ventaModel = new \App\Models\Venta_cab_Model();
        $detalleModel = new \App\Models\Venta_det_Model();
        $db = \Config\Database::connect();
        $builder = $db->table('venta_cabecera');
        $builder->select('venta_cabecera.*, usuarios.nombre AS nombre_usuario, usuarios.email AS email_usuario');
        $builder->join('usuarios', 'usuarios.id_usuarios = venta_cabecera.id_usuario');

        // Filtrado por fecha
        if ($filtro === 'today') {
            $builder->where('DATE(fecha_venta)', date('Y-m-d'));
        } elseif ($filtro === 'week') {
            $inicioSemana = date('Y-m-d', strtotime('monday this week'));
            $finSemana = date('Y-m-d', strtotime('sunday this week'));
            $builder->where('DATE(fecha_venta) >=', $inicioSemana)
                    ->where('DATE(fecha_venta) <=', $finSemana);
        } elseif ($filtro === 'month') {
            $inicioMes = date('Y-m-01');
            $finMes = date('Y-m-t');
            $builder->where('DATE(fecha_venta) >=', $inicioMes)
                    ->where('DATE(fecha_venta) <=', $finMes);
        }

        // Búsqueda por cliente, email o ID de venta
        if ($busqueda !== '') {
        if (ctype_digit($busqueda)) {
            $builder->where('venta_cabecera.id', (int)$busqueda); // búsqueda exacta, fuera del OR
            } else {
                $builder->groupStart();
                $builder->like('usuarios.nombre', $busqueda);
                $builder->orLike('usuarios.email', $busqueda);
                $builder->groupEnd();
            }
        }



        // Paginación
        $totalVentas = $builder->countAllResults(false); // false para no reiniciar el builder
        $builder->limit($porPagina, ($pagina - 1) * $porPagina);
        $ventas = $builder->get()->getResultArray();

        foreach ($ventas as &$venta) {
            $venta['detalles'] = $detalleModel->getDetalles($venta['id']);
            $venta['total_venta'] = $venta['total'];
        }

        $totalPaginas = ($totalVentas > 0) ? ceil($totalVentas / $porPagina) : 1;

        $data = [
            'titulo' => "Gestión de Ventas",
            'ventas' => $ventas,
            'totalVentas' => array_sum(array_column($ventas, 'total_venta')),
            'filtro' => $filtro,
            'pagina' => $pagina,
            'totalPaginas' => $totalPaginas
        ];

        echo view('front/head_view', $data);
        echo view('back/Admin_Navbar');
        echo view('back/CRUD_Ventas/Ventas', $data);
        echo view('back/Admin_Footer');
    }

    
    public function registrar_venta()
    {
        $session = session();
        require(APPPATH . 'Controllers/Carrito_controller.php');
        $cartController = new Carrito_controller();
        $carrito_contents = $cartController->devolver_carrito();

        $productoTallaModel = new ProductoTallas_model();
        $ventasModel = new Venta_cab_model();
        $detalleModel = new Venta_det_model();

        $productos_validos = [];
        $productos_sin_stock = [];
        $total = 0;

        foreach ($carrito_contents as $item) {

            $stockData = $productoTallaModel
                ->where('producto_id', $item['id'])
                ->where('talla_id', $item['options']['talle'])
                ->first();

            if ($stockData && $stockData['stock'] >= $item['qty']) {
                $productos_validos[] = $item;
                $total += $item['subtotal'];
            } else {
                $productos_sin_stock[] = $item['name'];
                $cartController->eliminar_item($item['rowid']);
            }
        }

        if (!empty($productos_sin_stock)) {
            $mensaje = 'Los siguientes productos no tienen stock suficiente y fueron eliminados del carrito:<br>' . implode(', ', $productos_sin_stock);
            $session->setFlashdata('mensaje', $mensaje);
            return redirect()->to(base_url('muestro'));
        }

        if (empty($productos_validos)) {
            $session->setFlashdata('mensaje', 'No hay productos válidos para registrar la venta.');
            return redirect()->to(base_url('muestro'));
        }

        $nueva_venta = [
            'id_usuario' => $session->get('id_usuario'),
            'total' => $total
        ];
        $venta_id = $ventasModel->insert($nueva_venta);

        foreach ($productos_validos as $item) {
            $detalle = [
                'id_venta'    => $venta_id,
                'id_producto' => $item['id'],
                'cantidad'    => $item['qty'],
                'precio_unitario' => $item['subtotal'] / $item['qty']
            ];
            $detalleModel->insert($detalle);

            // Actualizar stock en producto_tallas
            $productoTallaModel
                ->where('producto_id', $item['id'])
                ->where('talla_id', $item['talla_id'])
                ->set('stock', 'stock - ' . (int)$item['qty'], false)
                ->update();
        }

        $cartController->borrar_carrito();
        $session->setFlashdata('mensaje', 'Venta registrada exitosamente.');
        return redirect()->to(base_url('vista_compras/' . $venta_id));
    }


    // Función del usuario cliente para ver sus compras
    public function verCompras($perfil_id)
    {
        $detalle_ventas = new Venta_det_model();
        $data['venta'] = $detalle_ventas->getDetalles($perfil_id);

        $dato['titulo'] = "Mi compra";

        echo view('front/head_view', $dato);
        echo view('front/nav_view');
        echo view('back/CRUD_Ventas/compras_cliente', $data);
        echo view('front/footer_view');
    }

    // Función del cliente para ver el detalle de sus facturas de compras
    public function verDetalleCompra($id_usuario)
    {
        $ventas = new Venta_cab_model();

        $data['ventas'] = $ventas->getVentas($id_usuario);
        $dato['titulo'] = "Todos mis compras";

        echo view('front/head_view', $dato);
        echo view('front/nav_view');
        echo view('back/CRUD_Ventas/detalle_cliente', $data);
        echo view('front/footer_view');
    }


}
