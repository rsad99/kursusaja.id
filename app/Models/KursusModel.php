<?php

namespace App\Models;

use CodeIgniter\Model;

class KursusModel extends Model
{
    protected $table = 'kursus';
    protected $useTimestamps = true;
    protected $allowedFields = ['id_lmbg', 'judul', 'gambar', 'deskripsi', 'harga', 'daerah', 'tgl_mulai', 'lama_kursus'];

    public function getKursus($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }

        return $this->where(['id' => $id])->first();
    }

    public function getKursusMitra($idmitra)
    {
        return $this->where(['id_lmbg' => $idmitra])->findAll();
    }
}
