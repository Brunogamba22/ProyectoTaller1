<?php
namespace App\Models;
use CodeIgniter\Model;

class Categoria_model extends Model
{
    protected $table = 'categorias'; 
    protected $primaryKey = 'id';
    protected $allowedFields = ['nombre'];
    protected $returnType = 'array'; // Asegura que devuelva arrays

    public function getCategorias()
    {
        return $this->findAll();
    }
}

