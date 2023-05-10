<?php

namespace App\Models;

use CodeIgniter\Model;

class SasaranATModel extends Model
{
    protected $table            = 'sasaran_kinerja_anggota';
    protected $primaryKey       = 'id_kinerja_anggota';
    protected $useAutoIncrement = true;
    protected $allowedFields;
}
