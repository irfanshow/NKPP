<?php

namespace App\Controllers;

use App\Models\PjModel;
use App\Controllers\BaseController;

class AdminController extends BaseController
{
    public function index()
    {
        return view('admin/index');
    }

    //AT
    public function ATview()
    {
        return view('admin/at');
    }

    public function ATcreate()
    {
        return view('admin/create_at');
    }

    //PJ
    public function PJview()
    {
        $pjModel = new PjModel();
        $pj = $pjModel->findAll();
     
        $data= [
            'pj'=>$pj
        ];


        return view('admin/pj',$data);
    }

    public function PJcreate()
    {
        return view('admin/create_pj');
    }

    public function savePJ()
    {
        // $file = $this->request->getFile('foto');
        // $nama = $file ->getRandomName();
        if(!$this->validate([
            'email' => 'required',
            'password' => 'required',
            'nama' => 'required',
            'nip' =>'required',
            'periode'=>'required',
            'surat'=>'required',
            
        ])){
            return redirect()->to('/admin/create_pj');
        }
        $pjModel = new PjModel();
        $data=[
            'email' => $this->request->getPost('email'),
            'password'=> $this->request->getPost('password'),
            'nama'=>$this->request->getPost('nama'),
            'nip'=>$this->request->getPost('nip'),
            'periode'=>$this->request->getPost('periode'),
            'no_surat_dinas'=>$this->request->getPost('surat'),
            

        ];

        $pjModel->protect(false)
        ->save($data);
                
        // $file->move(ROOTPATH . 'public/assets/img/',$nama);
        return redirect()->to('/admin/pj');
    }

    //PT
    public function PTview()
    {
        return view('admin/pt');
    }

    public function PTcreate()
    {
        return view('admin/create_pt');
    }

    //KT
    public function KTview()
    {
        return view('admin/kt');
    }

    public function KTcreate()
    {
        return view('admin/create_kt');
    }

    //NKP
    public function NKPview()
    {
        return view('admin/nkp');
    }

    public function NKPcreate()
    {
        return view('admin/create_nkp');
    }

    //NKT
    public function NKTview()
    {
        return view('admin/nkt');
    }

    public function NKTcreate()
    {
        return view('admin/create_nkt');
    }

}
