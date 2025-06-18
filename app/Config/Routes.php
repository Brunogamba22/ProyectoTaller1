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


// RUTAS PARA VISUALIZAR TODOS LOS PRODUCTOS
$routes->get('productos', 'ProductoController::mostrarProductos');
// RUTAS PARA VISUALIZAR PRODUCTOS POR CATEGORÍA
$routes->get('productos/remeras', 'ProductoController::verRemeras');
$routes->get('productos/buzos', 'ProductoController::verBuzos');
$routes->get('productos/camisas', 'ProductoController::verCamisas');
$routes->get('productos/camperas', 'ProductoController::verCamperas');
$routes->get('productos/calzado', 'ProductoController::verCalzado');



// Catálogo de productos CON DATOS ESTATICOS
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
// Rutas para el carrito de compras
$routes->post('carrito/agregar', 'CarritoController::agregar');
$routes->get('carrito', 'CarritoController::index');


$routes->get('miPerfil', 'Home::');


// ===================================================================================
// RUTAS PARA ADMINISTRADORES (perfil_id = 1)
// ===================================================================================

$routes->get('admin', 'Dashboard_Admin::index');
$routes->get('Listado', 'Dashboard_Admin::listaProductosAdmin');

// ===================================================================================
// ===================================================================================

// RUTAS PARA CRUD DE PRODUCTOS
// Ruta para mostrar la lista de productos
$routes->get('producto/lista', 'ProductoController::listarProductos');
// Ruta para crear un nuevo producto
$routes->get('producto/crear', 'ProductoController::crearproducto');
// Ruta para enviar el formulario de alta de productos
$routes->post('enviar-prod', 'ProductoController::store');
//editar producto
$routes->get('producto/editar/(:num)', 'ProductoController::editar/$1');
//actualizar producto
$routes->post('producto/actualizar/(:num)', 'ProductoController::actualizar/$1');
// Rutas para eliminar productos
$routes->get('eliminar/(:num)', 'ProductoController::eliminarProducto/$1');
// Rutas para ver productos eliminados y reactivarlos
$routes->get('eliminados', 'ProductoController::productosEliminados');
// Ruta para reactivar un producto eliminado
$routes->get('reactivar-producto/(:num)', 'ProductoController::reactivarProducto/$1');

// ===================================================================================
// ===================================================================================

//Rutas para CRUD de usuarios
$routes->get('listaUsuarios', 'Usuario_controller::listarUsuarios');
$routes->get('usuarioEdit/(:num)', 'Usuario_controller::editar/$1');
$routes->post('usuario/actualizar/(:num)', 'Usuario_controller::update/$1');
$routes->get('usuarioEstado/(:num)/(:alpha)', 'Usuario_controller::cambiarEstado/$1/$2');
$routes->get('altaUsuario', 'Usuario_controller::nuevoUsuario');
$routes->post('guardarUsuario', 'Usuario_controller::crearUsuario');




// Rutas para CRUD de ventas
$routes->get('admin/ventas', 'VentasController::ventas');






