<?php
namespace App\Models;
use CodeIgniter\Model;

class Tallas_model extends Model{
    protected $table = 'tallas'; // Nombre de la tabla
    protected $primaryKey = 'id_talla'; //llave primaria
    protected $allowedFields = ['nombre','descripcion']; //Columnas de la tabla



    public function obtenerNombreTalle($id_talla)
{
    return $this->where('id_talla', $id_talla)->first()['nombre'] ?? 'Sin Talle';
}

}

