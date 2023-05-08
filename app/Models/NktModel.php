<?php

namespace App\Models;

use CodeIgniter\Model;

class NktModel extends Model
{
    protected $table            = 'nkt';
    protected $primaryKey       = 'id_nkt';
    protected $useAutoIncrement = true;
    protected $allowedFields;
}
