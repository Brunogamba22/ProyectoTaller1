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
        'precio_vta',
        'stock',
        'imagen',
        'categoria_id',
        'activo'
    ];

      // Modificar el métodoo para obtener productos
    public function getProductosConCategorias() {
      return $this->db->table('productos p')
          ->select('p.*, categorias.nombre as categoria_nombre, 
                  SUM(pt.stock) as stock_total')
          ->join('categorias', 'categorias.id = p.categoria_id')
          ->join('producto_tallas pt', 'pt.producto_id = p.id', 'left')
          ->groupBy('p.id')
          ->get()
          ->getResultArray();
  }
    // Método para obtener productos con stock total
    public function getProductosConStockTotal()
  {
      return $this->select('productos.*, categorias.nombre as categoria_nombre, 
                          COALESCE(SUM(producto_tallas.stock), 0) as stock_total')
                  ->join('categorias', 'categorias.id = productos.categoria_id')
                  ->join('producto_tallas', 'producto_tallas.producto_id = productos.id', 'left')
                  ->groupBy('productos.id')
                  ->findAll();
  }

}
