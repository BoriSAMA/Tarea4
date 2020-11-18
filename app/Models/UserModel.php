<?php namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
        protected $table      = 'usuario';
        protected $primaryKey = 'pkIdUsuario';

        protected $returnType = 'array';
        protected $useSoftDeletes = false;

        protected $allowedFields = ['correoUsuario', 'claveUsuario'];
        /*protected $table      = 'users';
        protected $primaryKey = 'id';

        protected $returnType = 'array';
        protected $useSoftDeletes = false;
*/
        /*protected $allowedFields = ['name', 'email'];

        protected $useTimestamps = false;
        protected $createdField  = 'created_at';
        protected $updatedField  = 'updated_at';

        protected $validationRules    = [];
        protected $validationMessages = [];
        protected $skipValidation     = false;*/
}

?>