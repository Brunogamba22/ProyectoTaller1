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
        'stock'
    ];
}
