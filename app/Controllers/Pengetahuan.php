<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;

class Pengetahuan extends ResourceController
{
    protected $modelName = "App\Models\PengetahuanModel";
    protected $format ="json";
    public function index()
    {
        return view('pengetahuan');
    }
    public function read(){
        $data = $this->model->getpengetahuan();
        return $this->respond($data);
    }

   
}
