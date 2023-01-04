<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;

class BcDiagnosa extends ResourceController
{

    protected $modelName = "App\Models\BcDiagnosaModel";
    protected $format = "json";
    protected $penyakit;
    protected $pengetahuan;

    public function __construct() {
       
        $this->penyakit = new \App\Models\PenyakitModel();
        $this->pengetahuan = new \App\Models\PengetahuanModel();
    }
    public function index()
    {
            return view('bcdiagnosa');
    }

    public function read()
    {

        $data['pengetahuan'] = $this->pengetahuan->getpengetahuan();
        $data['penyakit'] = $this->penyakit->findAll();
        foreach ($data['penyakit'] as $key=>$d) {
            $data['penyakit'][$key]['gejala'] = $this->pengetahuan->getGejala($d['id']);
        }
        return $this->respond($data);
    }
}
