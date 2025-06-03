<?php
namespace App\Models;
use CodeIgniter\Model;

class Producto_model extends Model
{
    protected $table = 'productos';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'nombre',
        'descripcion',
        'precio',
        'stock',
        'imagen',
        'categoria_id',
        'activo'
    ];

    // Modificar el método para obtener productos
    public function getProductosConCategorias() {
    return $this->db->table('productos')
        ->select('productos.*, categorias.nombre as categoria_nombre')
        ->join('categorias', 'categorias.id = productos.categoria_id')
        ->get()
        ->getResultArray();
}


}
