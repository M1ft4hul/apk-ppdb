<?php

namespace App\Models;

use CodeIgniter\Model;

class Msekolah extends Model
{
    protected $table = 'sekolah';

    protected $primaryKey = 'id_sekolah';

    protected $allowedFields = ['nama_smk'];
}
