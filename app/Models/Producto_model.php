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
}
