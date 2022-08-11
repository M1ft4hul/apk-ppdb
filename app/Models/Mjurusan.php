<?php

namespace App\Models;

use CodeIgniter\Model;

class Mjurusan extends Model
{
    protected $table = 'jurusan';

    protected $primaryKey = 'id_jurusan';

    protected $allowedFields = ['id_sekolah', 'jurusan'];
}
