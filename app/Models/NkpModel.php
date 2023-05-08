<?php

namespace App\Models;

use CodeIgniter\Model;

class NkpModel extends Model
{
    protected $table            = 'nkp';
    protected $primaryKey       = 'id_nkp';
    protected $useAutoIncrement = true;
    protected $allowedFields;

    function getAt(){
        return $this->db->table('nkp')
        ->where('bagian = ','at')
        ->Get()
        ->getResultArray();
    }

}
