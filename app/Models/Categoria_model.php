<?php
namespace App\Models;
use CodeIgniter\Model;

class Categoria_model extends Model
{
    protected $table = 'categorias';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nombre'];

    // Método para obtener todas las categorías
    public function getCategorias()
    {
        return $this->findAll();
    }
}
