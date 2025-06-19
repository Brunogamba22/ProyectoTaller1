<?php
namespace App\Models;

use CodeIgniter\Model;

class Consulta_model extends Model
{
    protected $table = 'consultas';
    protected $primaryKey = 'id_consulta';

    protected $allowedFields = [
        'nombre',
        'apellido',
        'email',
        'telefono',
        'respuesta',
        'mensaje'
    ];

    // Obtener todas las consultas
    public function getConsultas($estado = 'all')
    {
        if ($estado === 'pending') {
            $this->where('respuesta', 'NO');
        } elseif ($estado === 'answered') {
            $this->where('respuesta', 'SI');
        }

        return $this->orderBy('id_consulta', 'DESC')->findAll();
    }

    // Obtener una consulta por ID
    public function getConsulta($id)
    {
        return $this->find($id);
    }
}
