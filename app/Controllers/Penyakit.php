<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;

class Penyakit extends ResourceController
{
    protected $modelName = "App\Models\PenyakitModel";
    protected $format ="json";
    public function index()
    {
        return view('penyakit');
    }
    public function read(){
        $data = $this->model->findAll();
        return $this->respond($data);
    }
}
