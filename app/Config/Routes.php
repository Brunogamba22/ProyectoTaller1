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
$routes->get('carrito', 'Home::carrito');
$routes->get('miPerfil', 'Home::');


// ==============================================
// RUTAS PARA ADMINISTRADORES (perfil_id = 1)
// ==============================================

$routes->get('admin', 'Dashboard_Admin::index');
$routes->get('AltaProductos', 'Dashboard_Admin::altaProductos');
$routes->get('Listado', 'Dashboard_Admin::listaProductosAdmin');
$routes->get('EdicionProductos', 'Dashboard_Admin::edicionProductos');
$routes->get('CategoriaProductos', 'Dashboard_Admin::categoriaProductos');

//Rutas para CRUD de usuarios
$routes->get('listaUsuarios', 'Dashboard_Admin::listarUsuarios');
$routes->get('usuarioEdit/(:num)', 'Dashboard_Admin::editar/$1');
$routes->post('usuarioEliminar', 'Dashboard_Admin::eliminarUsuario');
$routes->get('usuarioEstado', 'Dashboard_Admin::estadoUsuario');

// ... otras rutas de admins


// ==============================================
// RUTAS COMUNES AUTENTICADAS (cualquier perfil)
// ==============================================
// Rutas para CRUD de productos ARREGLAR ESTAS RUTAS
$routes->get('producto/editar/(:num)', 'ProductoController::editar/$1');
$routes->post('producto/actualizar/(:num)', 'ProductoController::actualizar/$1');
$routes->get('producto/crear', 'Dashboard_Admin::listaProductosAdmin');
$routes->post('enviar-prod', 'ProductoController::store');






