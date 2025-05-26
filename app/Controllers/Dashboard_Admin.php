<?php
namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Dashboard_Admin extends BaseController
{
    public function panel()
    {
        $data['titulo'] = 'Administrador';
        echo view('front/head_view', $data);
        echo view('front/nav_adminstrador');
        echo view('front/Productos/productos');
        echo view('front/footer_view');
    }
}