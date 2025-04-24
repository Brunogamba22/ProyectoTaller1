<?php

namespace App\Controllers;

class Home extends BaseController
{

    public function index()
    {
        $data['titulo'] = 'principal'; 
        echo view('front/head_view', $data);
        echo view('front/nav_view');
        echo view('front/principal');
        echo view('front/footer_view');
    }

    public function productos()
    {
        $data['titulo'] = 'Productos';
        echo view('front/head_view', $data);
        echo view('front/nav_view');
        echo view('front/Productos/productos');
        echo view('front/footer_view');
    }

    public function remeras()
    {
        $data['titulo'] = 'Remeras';
        echo view('front/head_view', $data);
        echo view('front/nav_view');
        echo view('front/Productos/remeras');
        echo view('front/footer_view');
    }

    public function buzos()
    {
        $data['titulo'] = 'Buzos';
        echo view('front/head_view', $data);
        echo view('front/nav_view');
        echo view('front/Productos/buzos');
        echo view('front/footer_view');
    }

    public function camisas()
    {
        $data['titulo'] = 'Camisas';
        echo view('front/head_view', $data);
        echo view('front/nav_view');
        echo view('front/Productos/camisas');
        echo view('front/footer_view');
    }


    public function camperas()
    {
        $data['titulo'] = 'Camperas';
        echo view('front/head_view', $data);
        echo view('front/nav_view');
        echo view('front/Productos/camperas');
        echo view('front/footer_view');
    }


    public function calzado()
    {
        $data['titulo'] = 'Calzado';
        echo view('front/head_view', $data);
        echo view('front/nav_view');
        echo view('front/Productos/calzado');
        echo view('front/footer_view');
    }



    public function comercializacion()
    {
        $data['titulo'] = 'Comercializacion';
        echo view('front/head_view', $data);
        echo view('front/nav_view');
        echo view('front/Comercializacion');
        echo view('front/footer_view');
    }
    public function sobrenosotros()
    {
        $data['titulo'] = 'sobrenosotros';
        echo view('front/head_view', $data);
        echo view('front/nav_view');
        echo view('front/sobrenosotros');
        echo view('front/footer_view');
    }
    public function contacto()
    {
        $data['titulo'] = 'contacto';
        echo view('front/head_view', $data);
        echo view('front/nav_view');
        echo view('front/contacto');
        echo view('front/footer_view');
    }
}
