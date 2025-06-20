<?php 
namespace App\Models; 
use CodeIgniter\Model;

class Venta_det_Model extends Model {
    protected $table = 'venta_detalle';
    protected $primaryKey = 'id';
    protected $allowedFields = ['id', 'id_venta', 'id_producto', 'cantidad', 'precio_unitario', 'subtotal'];
    
    public function getDetalles($id = null)
    {
        $db = \Config\Database::connect();
        $builder = $db->table('venta_detalle');
        $builder->select('
            venta_detalle.*,
            productos.nombre AS nombre_producto,
            productos.imagen AS imagen,
            usuarios.nombre AS nombre_usuario,
            usuarios.email
        ');
        $builder->join('venta_cabecera', 'venta_cabecera.id = venta_detalle.id_venta');
        $builder->join('productos', 'productos.id = venta_detalle.id_producto');
        $builder->join('usuarios', 'usuarios.id_usuarios = venta_cabecera.id_usuario');

        if ($id !== null) {
            $builder->where('venta_cabecera.id', $id);
        }

        return $builder->get()->getResultArray();
    }

}

// Trae todos los detalles de ventas desde la tabla ventas_detalle
// - de la cabecera de la venta,
// - del producto vendido, y
