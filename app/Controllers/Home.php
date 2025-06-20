<?php

namespace App\Controllers;

class Home extends BaseController
{

    public function index()
    {
        if (session()->get('perfil_id') == 1) {
            return redirect()->to('admin');
        }

        $data['titulo'] = 'principal'; 
        $modalShown = (isset($_COOKIE['modalShown']) && $_COOKIE['modalShown'] == '1')
            || (isset($_SESSION['modalMostrado']) && $_SESSION['modalMostrado'] == 'true');

        $data['show_login_modal'] = !session()->get('logged_in') && !$modalShown;

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
        $data['titulo'] = 'Contacto';
        echo view('front/head_view', $data);
        echo view('front/nav_view');
        echo view('front/contacto');
        echo view('front/footer_view');
    }

    //muestra la vista de politica de priv
     public function PoliticaDePrivacidad()
    {
        $data['titulo'] = 'PoliticaDePrivacidad';
        echo view('front/head_view', $data);
        echo view('front/nav_view');
        echo view('front/PoliticaDePrivacidad');
        echo view('front/footer_view');
    }

    //muestra la vista de TerminosYcondiciones
     public function TerminosYcondiciones()
    {
        $data['titulo'] = 'TerminosYcondiciones';
        echo view('front/head_view', $data);
        echo view('front/nav_view');
        echo view('front/terminosYcondiciones');
        echo view('front/footer_view');
    }

    //muestra la vista de PreguntasFrecuentes
     public function PreguntasFrecuentes()
    {
        $data['titulo'] = 'PreguntasFrecuentes';
        echo view('front/head_view', $data);
        echo view('front/nav_view');
        echo view('front/preguntasFrecuentes');
        echo view('front/footer_view');
    }

  

    //Muestra la vista del formulario registro
    public function registro()
    {
        $dato['titulo'] = 'registrarse';
        echo view('front/head_view', $dato);
        echo view('front/nav_view');
        echo view('back/registro'); // Esta es la vista con el formulario
        echo view('front/footer_view');
    }

    public function loguearse()
    {
        
        $data['titulo'] = 'Login';
        echo view('front/head_view', $data);
        echo view('front/nav_view');
        echo view('back/login'); // Esta es la vista con el formulario
        echo view('front/footer_view');
    }


}
