<?php 
namespace App\Models;

use CodeIgniter\Model;

class Estudiante extends Model{
    protected $table      = 'tbl_estudiantes';
   
    protected $primaryKey = 'id';
    protected $allowedFields = ['identificacion', 'nombre', 'nivel', 'seccion', 'telefonoContacto'];
}