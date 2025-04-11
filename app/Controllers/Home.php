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

    public function ropa()
    {
        $data['titulo'] = 'ropa';
        echo view('front/head_view', $data);
        echo view('front/nav_view');
        echo view('front/ropa');
        echo view('front/footer_view');
    }

    public function remeras()
    {
        $data['titulo'] = 'remeras';
        echo view('front/head_view', $data);
        echo view('front/nav_view');
        echo view('front/ropa/remeras');
        echo view('front/footer_view');
    }

    public function camperas()
    {
        $data['titulo'] = 'camperas';
        echo view('front/head_view', $data);
        echo view('front/nav_view');
        echo view('front/ropa/camperas');
        echo view('front/footer_view');
    }



    public function calzado()
    {
        $data['titulo'] = 'calzado';
        echo view('front/head_view', $data);
        echo view('front/nav_view');
        echo view('front/calzado');
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
