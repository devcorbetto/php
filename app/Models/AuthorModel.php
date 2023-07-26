<?php

namespace App\Models;

use CodeIgniter\Model;

class AuthorModel extends Model
{
    protected $table = 'authors'; // Nombre de la tabla de autores
    protected $primaryKey = 'id';
    protected $allowedFields = ['name', 'bio']; // Campos permitidos para ser guardados en la base de datos
}
