<?php
namespace App\Models;
use CodeIgniter\Model;

class Producto_model extends Model
{
   // Nombre de la tabla principal usada por este modelo
    protected $table = 'productos';

    // Clave primaria de la tabla (campo que identifica de forma única cada producto)
    protected $primaryKey = 'id';

    // Campos que están permitidos para insertar o actualizar desde formularios o datos externos
    protected $allowedFields = [
        'nombre',
        'descripcion',
        'precio',
        'precio_vta',
        'stock',
        'imagen',
        'categoria_id',
        'activo' // indica si el producto está visible o eliminado lógicamente
    ];

    //  Método que devuelve todos los productos con nombre de categoría y stock total
    public function getProductosConCategorias() {
        return $this->db->table('productos p') // usamos alias "p" para productos
            ->select('p.*, categorias.nombre as categoria_nombre, 
                     SUM(pt.stock) as stock_total') // agregamos categoría y sumatoria de stock por talla
            ->join('categorias', 'categorias.id = p.categoria_id') // unimos con tabla de categorías
            ->join('producto_tallas pt', 'pt.producto_id = p.id', 'left') // unimos con tallas (puede no haber)
            ->groupBy('p.id') // agrupamos por producto para usar SUM
            ->get()
            ->getResultArray(); // devolvemos todo como array asociativo
    }

    //  Método que devuelve un query builder con productos y categoría (sin ejecutarlo)
    public function getProductosConStockTotalQuery()
    {
        return $this->select('productos.*, categorias.nombre as categoria_nombre') // selección de campos
                    ->join('categorias', 'categorias.id = productos.categoria_id') // unión con categorías
                    ->where('productos.activo', 1); // sólo productos activos (no eliminados)
    }

    //  Método que ejecuta y devuelve productos con su stock total ya sumado
    public function getProductosConStockTotal()
    {
        return $this->select('productos.*, categorias.nombre as categoria_nombre, 
                             COALESCE(SUM(producto_tallas.stock), 0) as stock_total') // usamos COALESCE por si no hay stock
                    ->join('categorias', 'categorias.id = productos.categoria_id')
                    ->join('producto_tallas', 'producto_tallas.producto_id = productos.id', 'left') // unión con tallas (puede estar vacío)
                    ->groupBy('productos.id')
                    ->where('productos.activo', 1) // sólo productos activos
                    ->findAll(); // ejecuta y devuelve el resultado
    }

    //  Método para obtener productos que han sido eliminados (activo = 0)
    public function getProductosEliminados()
    {
        return $this->select('productos.*, categorias.nombre as categoria_nombre, 
                             COALESCE(SUM(producto_tallas.stock), 0) as stock_total')
                    ->join('categorias', 'categorias.id = productos.categoria_id')
                    ->join('producto_tallas', 'producto_tallas.producto_id = productos.id', 'left')
                    ->where('productos.activo', 0) // solo los que están desactivados
                    ->groupBy('productos.id')
                    ->findAll();
    }

    //  Devuelve un único producto por ID con su categoría y el total de stock (sumando tallas)
    public function getProductoConStockTotalPorId($id)
    {
        return $this->db->table('productos p')
            ->select('p.*, categorias.nombre as categoria_nombre, COALESCE(SUM(pt.stock), 0) as stock_total')
            ->join('categorias', 'categorias.id = p.categoria_id')
            ->join('producto_tallas pt', 'pt.producto_id = p.id', 'left')
            ->where('p.id', $id) // filtro por ID
            ->groupBy('p.id')
            ->get()
            ->getRowArray(); // devuelve un solo registro como array
    }


    public function getStockTotalPorProducto($id)
    {
        return $this->db->table('producto_tallas')
            ->selectSum('stock')
            ->where('producto_id', $id)
            ->get()
            ->getRowArray();
    }

}
