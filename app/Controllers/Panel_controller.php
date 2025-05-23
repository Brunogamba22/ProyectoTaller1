<?php
namespace App\Controllers;

use CodeIgniter\Controller;

class Panel_controller extends BaseController
{
    public function index()
    {
        $data['titulo'] = 'Panel principal';
        return view('front/head_view', $data)
             . view('front/nav_view')
             . view('panel') // esta será tu vista protegida
             . view('front/footer_view');
    }
}
