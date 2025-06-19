<?php namespace App\Controllers;

use App\Models\Venta_cab_Model;
use App\Models\Venta_det_Model;

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
}
