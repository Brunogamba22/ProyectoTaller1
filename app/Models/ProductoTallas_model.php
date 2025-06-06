<?php
namespace App\Models;
use CodeIgniter\Model;

class ProductoTallas_model extends Model
{
    protected $table = 'producto_tallas';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'producto_id',
        'talla_id',
        'stock',
        'stock_min'
    ];

    // Método para actualizar stock mínimo por producto/talla
    public function actualizarStockMin($producto_id, $talla_id, $nuevo_min)
    {
        return $this->where('producto_id', $producto_id)
                   ->where('talla_id', $talla_id)
                   ->set(['stock_min' => $nuevo_min])
                   ->update();
    }
    
    // Método para verificar stock bajo
    public function verificarStockBajo($producto_id = null)
    {
        $builder = $this->db->table('producto_tallas pt')
            ->select('pt.*, p.nombre as producto, t.nombre as talla')
            ->join('productos p', 'p.id = pt.producto_id')
            ->join('tallas t', 't.id_talla = pt.talla_id')
            ->where('pt.stock < pt.stock_min');
            
        if ($producto_id) {
            $builder->where('pt.producto_id', $producto_id);
        }
        
        return $builder->get()->getResultArray();
    }
}
