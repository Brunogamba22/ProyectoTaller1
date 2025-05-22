<?php
namespace App\Models;
use CodeIgniter\Model;

class ImagenesProducto_model extends Model
{
    protected $table = 'imagenes_producto';
    protected $primaryKey = 'id_imagen';
    protected $allowedFields = [
        'producto_id',
        'imagen',
        'orden'
    ];
}
