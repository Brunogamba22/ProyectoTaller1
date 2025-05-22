<?php
namespace App\Models;
use CodeIgniter\Model;

class Pedidos_model extends Model
{
    protected $table = 'pedidos';
    protected $primaryKey = 'id_pedido';

    protected $allowedFields = [
        'usuario_id',
        'fecha_pedido',
        'estado',
        'total',
        'direccion_envio',
        'metodo_pago'
    ];
}
