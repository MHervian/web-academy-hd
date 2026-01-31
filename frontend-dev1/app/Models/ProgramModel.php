<?php

namespace App\Models;

use CodeIgniter\Model;

class ProgramModel extends Model
{
    protected $table            = 'program';
    protected $primaryKey       = 'programid';

    public function search($keyword)
    {
        return $this->builder()
            ->groupStart()
            ->like('nama', $keyword)
            ->orLike('nama_en', $keyword)
            ->orLike('nama_kr', $keyword)
            ->groupEnd()
            ->limit(10)
            ->get()
            ->getResultArray();
    }
}
