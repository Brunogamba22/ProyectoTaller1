<?php
namespace App\Models;
use CodeIgniter\Model;

class Tallas_model extends Model{
    protected $table = 'tallas'; // Nombre de la tabla
    protected $primaryKey = 'id_talla'; //llave primaria
    protected $allowedFields = ['nombre','descripcion']; //Columnas de la tabla

}