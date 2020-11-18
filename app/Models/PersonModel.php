<?php namespace App\Models;

use CodeIgniter\Model;

class PersonModel extends Model
{
        protected $table      = 'persona';
        protected $primaryKey = 'pkIdPersona';

        protected $returnType = 'array';
        protected $useSoftDeletes = false;

        protected $allowedFields = ['nombreApellido', 'cedula', 'direccion', 'telefono', 'fkIdUsuario'];
}

?>