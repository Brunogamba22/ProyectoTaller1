<?php
namespace App\Models;
use CodeIgniter\Model;

class Detalles_pedido extends Model
{
    protected $table = 'detalles_pedido';
    protected $primaryKey = 'id_detalle';
    protected $allowedFields = [
        'pedido_id',
        'producto_id',
        'cantidad',
        'precio_unitario'
    ];
}
