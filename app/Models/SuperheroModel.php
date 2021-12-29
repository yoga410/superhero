<?php

namespace App\Models;

use CodeIgniter\Model;

class SuperheroModel extends Model
{
    protected $table = 'superhero';
    protected $primaryKey = 'id';
    protected $useTimestamps =true;

    public function getSuperhero($id = false)
    {
    if ($id == false) {
             return $this->findAll();
         }

     }
}