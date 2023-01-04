<?php

namespace App\Models;

use CodeIgniter\Model;

class PengetahuanModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'pengetahuan';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['id','benar','salah','penyakit_id','gejala_id'];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];
    public function getpengetahuan()
    {
        $db = \Config\Database::connect();
        $result = $db->query("SELECT
        `pengetahuan`.`gejala_id`,
        `gejala`.`id`,
        `pengetahuan`.`penyakit_id`,
        `penyakit`.`id` AS `id1`,
        `pengetahuan`.`benar`,
        `pengetahuan`.`salah`,
        `gejala`.`kode`,
        `gejala`.`gejala`,
        `penyakit`.`kode`,
        `penyakit`.`penyakit`,
        `penyakit`.`solusi`,
        `gejala`.`pertanyaan`
      FROM
        `pengetahuan`
        INNER JOIN `gejala` ON `pengetahuan`.`gejala_id` = `gejala`.`id`
        INNER JOIN `penyakit` ON `pengetahuan`.`penyakit_id` = `penyakit`.`id`
        ")->getResult();
        return $result;
    }
   
    public function getGejala($id = null)
    {
      $db = \config\Database::connect();
      return $db->query("SELECT
        `pengetahuan`.*,
        `gejala`.`kode`,
        `gejala`.`gejala`,
        `gejala`.`pertanyaan`
      FROM
        `pengetahuan`
        LEFT JOIN `gejala` ON `pengetahuan`.`gejala_id` = `gejala`.`id`
      WHERE penyakit_id='$id'")->getResult();
    }
}


