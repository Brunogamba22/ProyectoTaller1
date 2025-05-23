<?php
namespace App\Controllers;

use CodeIgniter\Controller;

class Panel_controller extends BaseController
{
    public function index()
    {
        $data['titulo'] = 'Panel principal';
        // Simplemente muestra la vista 'panel' (puedes personalizarla para mostrar info general)
        return view('front/head_view', $data)
            . view('front/nav_view')
            . view('panel')
            . view('front/footer_view');
    }
}
