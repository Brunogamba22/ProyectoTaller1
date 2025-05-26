<?php
namespace App\Controllers;

use App\Controllers\BaseController;

class Dashboard_Admin extends BaseController
{
    public function index()
    {
        $data['titulo'] = 'Administrador';
        echo view('front/head_view', $data);
        echo view('back/dashboard');
    }








    
}