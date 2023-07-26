<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\BookModel;
use App\Models\AuthorModel;

class Books extends Controller
{
    public function index()
    {
        $model = new BookModel();
        $data['books'] = $model->findAll();
        return view('book_list', $data);
    }

     public function add()
    {
        // Obtener los autores disponibles para mostrar en la lista desplegable
        $authorModel = new AuthorModel();
        $data['autores'] = $authorModel->findAll();

        return view('add_book', $data);
    }

     public function save()
    {
        $model = new BookModel();
        $data = [
            'title' => $this->request->getVar('title'),
            'description' => $this->request->getVar('description'),
            'price' => $this->request->getVar('price'),
            'author_id' => $this->request->getVar('author_id'), // Obtenemos el author_id seleccionado desde el formulario
        ];
        $model->insert($data);

        // Redireccionar a la lista de libros después de guardar el nuevo libro
        return redirect()->to(base_url('books'));
    }
    
        public function search()
    {
        // Obtener el texto de búsqueda enviado desde el formulario
        $keyword = $this->request->getVar('keyword');

        // Si el campo de búsqueda está vacío, redirigir a la lista de libros
        if (empty($keyword)) {
            return redirect()->to(base_url('books'));
        }

        // Filtrar los libros que coinciden con el texto de búsqueda utilizando el modelo BookModel
        $model = new BookModel();
        $data['books'] = $model->like('title', $keyword)
                              ->orLike('author', $keyword)
                              ->findAll();

        return view('book_list', $data);
    }
    


}
