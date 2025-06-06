<?php
namespace app\Models;
use CodeIgniter\Model;

class Usuario_model extends Model{
    protected $table = 'usuarios'; // Nombre de la tabla
    protected $primaryKey = 'id_usuarios'; //llave primaria
    protected $allowedFields = ['nombre','apellido','email','usuario', 'pass','perfil_id','baja']; //Columnas de la tabla
}