<?php

namespace App\Models;

use CodeIgniter\Model;

class NKTATModel extends Model
{
    protected $table            = 'nkt_at';
    protected $primaryKey       = 'id_nkt_at';
    protected $useAutoIncrement = true;
    protected $allowedFields;
}
