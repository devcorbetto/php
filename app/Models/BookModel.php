<?php

namespace App\Models;
use App\Models\AuthorModel;
use CodeIgniter\Model;

class BookModel extends Model
{
    protected $table = 'books'; // Nombre de la tabla en la base de datos
    protected $primaryKey = 'id'; // Nombre de la clave primaria de la tabla
    protected $allowedFields = ['title', 'author', 'description', 'price']; // Campos permitidos para ser guardados en la base de datos
}
