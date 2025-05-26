<?php
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// ==============================================
// RUTAS PÚBLICAS (accesibles sin autenticación)
// ==============================================

// Páginas principales
$routes->get('/', 'Home::index');
$routes->get('principal', 'Home::index');

// Catálogo de productos
$routes->get('Productos', 'Home::productos');
$routes->get('Remeras', 'Home::remeras');
$routes->get('Buzos', 'Home::buzos');
$routes->get('Camperas', 'Home::camperas');
$routes->get('Calzado', 'Home::calzado');
$routes->get('Camisas', 'Home::camisas');

// Información de la empresa
$routes->get('Comercializacion', 'Home::comercializacion');
$routes->get('Sobrenosotros', 'Home::sobrenosotros');
$routes->get('Contacto', 'Home::contacto');

// Autenticación
$routes->get('login', 'Home::loguearse');
$routes->post('/auth', 'login_controller::auth');
$routes->get('logout', 'login_controller::logout');
$routes->get('Registrarse', 'Home::registro');
$routes->post('/enviar-form', 'Usuario_controller::formValidation');

// Páginas legales
$routes->get('TerminoYcondiciones', 'Home::TerminosYcondiciones');
$routes->get('PoliticaDeprivacidad', 'Home::PoliticaDeprivacidad');
$routes->get('PreguntasFrecuentes', 'Home::PreguntasFrecuentes');

// ==============================================
// RUTAS PARA CLIENTES LOGUEADOS (perfil_id = 2)
// ==============================================
$routes->group('cliente', ['filter' => 'auth:2'], function($routes) {
    // Panel de cliente
    $routes->get('panel', 'Cliente\Cliente_controller::panel');
    
    // Carrito y compras
    $routes->get('carrito', 'Cliente_controller::carrito');
    $routes->get('mis-pedidos', 'Cliente_controller::misPedidos');
    $routes->get('mi-perfil', 'Cliente_controller::miPerfil');
    
    // Cerrar sesión
   
});
 $routes->get('logout', 'Login_controller::logout');
// ==============================================
// RUTAS PARA ADMINISTRADORES (perfil_id = 1)
// ==============================================
$routes->group('admin', ['filter' => 'auth:1'], function($routes) {
    $routes->get('panel', 'Dashboard_Admin::panel');
    // ... otras rutas de admin
});

// ==============================================1
// RUTAS COMUNES AUTENTICADAS (cualquier perfil)
// ==============================================
$routes->group('', ['filter' => 'auth'], function($routes) {
    // Rutas que requieren login pero no un perfil específico
    $routes->get('perfil', 'User_controller::perfil');
});







