<?php
namespace App\Models;
use CodeIgniter\Model;

class Carrito_model extends Model
{
    protected $table = 'carrito';
    protected $primaryKey = 'id';
    protected $allowedFields = ['usuario_id', 'producto_id', 'cantidad'];
}
