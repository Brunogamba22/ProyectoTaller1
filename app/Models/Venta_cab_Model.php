<?php
namespace App\Models;
use CodeIgniter\Model;
class Venta_cab_Model extends Model {

    protected $table = 'venta_cabecera';
    protected $primaryKey = 'id'; // llave primaria
    protected $allowedFields = ['id_usuario', 'fecha_venta', 'total', 'metodo_pago']; // columnas de la tabla


    public function getBuilderVentas_cabecera(){
        $db = \Config\Database::connect(); 
        $builder = $db->table('venta_cabecera');
        $builder->select('venta_cabecera.*, usuarios.nombre AS nombre_usuario, usuarios.email AS email_usuario');
        $builder->join('usuarios', 'usuarios.id_usuarios = venta_cabecera.id_usuario');
        $query = $builder->get();
        return $query->getResultArray();
    }

    //Esta función devuelve las ventas según si se pasa o no un $id_usuario
    public function getVentas($id_usuario = null){
        //Si no se pasa un ID de usuario (es null)
        if ($id_usuario == null) {
            //this.function getBuilderVentas_cabecera() devuelve el resultado de la consulta como array.
            return $this->getBuilderVentas_cabecera();
        } else {
            $db = \Config\Database::connect();
            $builder = $db->table('venta_cabecera');
            $builder->select('venta_cabecera.*, usuarios.nombre AS nombre_usuario, usuarios.email AS email_usuario');
            $builder->join('usuarios', 'usuarios.id_usuarios = venta_cabecera.id_usuario');
            $builder->where('venta_cabecera.id_usuario', $id_usuario);
            $query = $builder->get();
            return $query->getResultArray();
        }
    }

    

}
