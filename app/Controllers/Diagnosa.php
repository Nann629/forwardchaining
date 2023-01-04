<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;

class Diagnosa extends ResourceController
{
    protected $modelName = "App\Models\DiagnosaModel";
    protected $format = "json";
    protected $pengetahuan;
    protected $gejala;
    protected $penyakit;
    public function __construct() {
        $this->pengetahuan = new \App\Models\PengetahuanModel();
        $this->gejala = new \App\Models\GejalaModel();
        $this->penyakit = new \App\Models\PenyakitModel();
    }
    public function index()
    {
        return view('diagnosa');
    }
    public function read()
    {
        $result['pengetahuan'] = $this->pengetahuan->getpengetahuan();
        $result['gejala'] = $this->gejala->findAll();
        $result['penyakit'] = $this->penyakit->findAll();
        return $this->respond($result);
    }
}
