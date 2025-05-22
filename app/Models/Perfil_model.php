<?php
namespace App\Models;
use CodeIgniter\Model;

class Perfil_model extends Model
{
    protected $table = 'perfiles';
    protected $primaryKey = 'id_perfil';
    protected $allowedFields = ['descripcion'];
}
