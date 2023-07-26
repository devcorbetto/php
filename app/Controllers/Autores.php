<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\AuthorModel;

class Autores extends Controller
{
    public function index()
    {
        $model = new AuthorModel();
        $data['autores'] = $model->findAll();

        return view('lista_autores', $data);
    }

    public function agregar()
    {
        return view('agregar_autor');
    }

    public function guardar()
    {
        $model = new AuthorModel();
        $data = [
            'name' => $this->request->getVar('name'),
            'bio' => $this->request->getVar('bio'),
        ];
        $model->insert($data);

        // Redireccionar a la lista de autores después de guardar el nuevo autor
        return redirect()->to(base_url('autores'));
    }
}
