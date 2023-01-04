<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;

class Gejala extends ResourceController
{
    protected $modelName = "App\Models\GejalaModel";
    protected $format ="json";
    public function index()
    {
        return view('gejala');
    }
    public function read(){
        $data = $this->model->findAll();
        return $this->respond($data);
    }

   
}
