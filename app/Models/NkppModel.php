<?php

namespace App\Models;

use CodeIgniter\Model;

class NkppModel extends Model
{
    protected $table            = 'nkpp';
    protected $primaryKey       = 'id_nkpp';
    protected $useAutoIncrement = true;
    protected $allowedFields;

    function getAT(){
        return $this->db->table('nkpp')
        ->where('bagian = ','at')
        ->where ('nip = ',$_SESSION['nip'])
        ->Get()
        ->getResultArray();
    }

    function getKT(){
        return $this->db->table('nkpp')
        ->where('bagian = ','kt')
        ->where ('nip = ',$_SESSION['nip'])
        ->Get()
        ->getResultArray();
    }

    function getPT(){
        return $this->db->table('nkpp')
        ->where('bagian = ','pt')
        ->where ('nip = ',$_SESSION['nip'])
        ->Get()
        ->getResultArray();
    }

}
