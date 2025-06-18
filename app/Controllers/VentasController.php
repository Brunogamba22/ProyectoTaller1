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

    public function ventas()
    {
        $ventas = $this->cabModel->getVentas();
        $ventas_con_detalles = [];
        $totalVentas = 0;

        foreach ($ventas as $venta) {
            $detalles = $this->detModel->getDetalles($venta['id']);
            $venta['detalles'] = $detalles;
            $venta['total_venta'] = array_sum(array_column($detalles, 'subtotal'));

            $ventas_con_detalles[] = $venta;
            $totalVentas += $venta['total_venta'];
        }

        $data = [
            'titulo' => "Gestión de Ventas",
            'ventas' => $ventas_con_detalles,
            'totalVentas' => $totalVentas
        ];

        echo view('front/head_view', $data);
        echo view('back/Admin_Navbar');
        echo view('back/CRUD_Ventas/Ventas', $data);
        echo view('back/Admin_Footer');
    }
}
