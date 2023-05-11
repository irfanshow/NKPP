<?php

namespace App\Models;

use CodeIgniter\Model;

class Bimbingan extends Model
{
    protected $table            = 'bimbingan';
    protected $primaryKey       = 'idBimbingan';
    protected $useAutoIncrement = true;
    protected $allowedFields;
}
