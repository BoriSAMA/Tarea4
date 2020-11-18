<?php namespace App\Models;

use CodeIgniter\Model;

class PetModel extends Model
{
        protected $table      = 'mascota';
        protected $primaryKey = 'pkIdMascota';

        protected $returnType = 'array';
        protected $useSoftDeletes = false;

        protected $allowedFields = ['nombreMascota', 'tipoMascota', 'razaMascota', 'fechaUltimaVacuna', 'fechaAdopcion', 'fkIdPersona'];
}

?>