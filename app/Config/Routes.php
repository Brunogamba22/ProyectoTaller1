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
//ruta para el perfil del usuario logueado
$routes->get('miPerfil', 'Home::');


// ==============================================
// RUTAS PARA EL CARRITO DE COMPRAS
// ==============================================
// Rutas para el carrito

// muestra todos los productos del catálogo
$routes->get('productos', 'carrito_controller::catalogo', ['filter' => 'auth']);
// carga la vista carrito_parte_view
$routes->get('/muestro', 'carrito_controller::muestra', ['filter' => 'auth']);
// actualiza los datos del carrito
$routes->get('/carrito_actualiza', 'carrito_controller::actualiza_carrito', ['filter' => 'auth']);
// agregar los ítems seleccionados
$routes->post('carrito/add', 'carrito_controller::add', ['filter' => 'auth']);
// elimina un ítem del carrito
$routes->get('carrito_elimina/(:any)', 'carrito_controller::remove/$1', ['filter' => 'auth']);
// eliminar todo el carrito
$routes->get('/borrar', 'carrito_controller::borrar_carrito', ['filter' => 'auth']);
// registrar la venta en las tablas
$routes->get('/carrito-comprar', 'Ventascontroller::registrar_venta', ['filter' => 'auth']);
// botones de sumar y restar en la vista del carrito
$routes->get('carrito_suma/(:any)', 'carrito_controller::suma/$1');
$routes->get('carrito_resta/(:any)', 'carrito_controller::resta/$1');


// ===================================================================================
// RUTAS PARA ADMINISTRADORES (perfil_id = 1)
// ===================================================================================
//rutas para el dashboard del administrador
// Esta ruta muestra el panel de administración
$routes->get('admin', 'Dashboard_Admin::index');
//rutas para el listado de productos del administrador
// Esta ruta muestra la lista de productos en el panel de administración
$routes->get('Listado', 'Dashboard_Admin::listaProductosAdmin');
//ruta para alta de productos
// Esta ruta muestra el formulario para crear un nuevo producto
$routes->get('AltaProductos', 'Dashboard_Admin::altaProductos');

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
// Ruta para reactivar un producto eliminadoo
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

// Gestion de consultas 
$routes->get('listaConsultas', 'Usuario_controller::listar_consultas');
$routes->get('atenderConsultas/(:segment)', 'Usuario_controller::atender_consulta/$1');
$routes->get('eliminarConsulta/(:segment)', 'Usuario_controller::eliminar_consulta/$1');
// Ruta para recibir el formulario de contacto
$routes->post('enviar-consulta', 'Usuario_controller::registrarConsulta');






