<?php

namespace App\Controllers;

use App\Models\AtModel;
use App\Models\KtModel;
use App\Models\PjModel;
use App\Models\PtModel;
use App\Controllers\BaseController;

class AdminController extends BaseController
{
    public function index()
    {
        $atModel = new AtModel();
        $ktModel = new KtModel();
        $ptModel = new PtModel();
        $pjModel = new PjModel();
        //indikatorNKP
        //indikatorNKT
        $at = $atModel->CountAll();
        $kt = $ktModel->CountAll();
        $pt = $ptModel->CountAll();
        $pj = $pjModel->CountAll();
     
        $data= [
            'at'=>$at,
            'kt'=>$kt,
            'pt'=>$pt,
            'pj'=>$pj,
        ];

        return view('admin/index',$data);
    }

    //AT
    public function ATview()
    {
        $atModel = new AtModel();
        $at = $atModel->getAll();
     
        $data= [
            'at'=>$at
        ];

        return view('admin/at',$data);
    }

    public function ATcreate()
    {

        $kt = new KtModel();
        $pt = new PtModel();

        $data= [
            'kt'=>$kt->findAll(),
            'pt'=>$pt->findAll(),
        ];

        return view('admin/create_at',$data);
    }

    public function saveAT()
    {
        // $file = $this->request->getFile('foto');
        // $nama = $file ->getRandomName();
        if(!$this->validate([
            'email' => 'required',
            'password' => 'required',
            'nama' => 'required',
            'nip' =>'required',
            'unit' =>'required',
            'kt' =>'required',
            'pt' =>'required',
            'periode'=>'required',
            'surat'=>'required',
            
        ])){
            return redirect()->to('/admin/create_at');
        }
        $atModel = new AtModel();
        $data=[
            'email_at' => $this->request->getPost('email'),
            'password_at'=> $this->request->getPost('password'),
            'nama_at'=>$this->request->getPost('nama'),
            'nip_at'=>$this->request->getPost('nip'),
            'unit_kerja_at'=>$this->request->getPost('unit'),
            'idKT'=>$this->request->getPost('kt'),
            'idPT'=>$this->request->getPost('pt'),
            'periode_at'=>$this->request->getPost('periode'),
            'no_surat_dinas_at'=>$this->request->getPost('surat'),
            

        ];

        $atModel->protect(false)
        ->save($data);
                
        // $file->move(ROOTPATH . 'public/assets/img/',$nama);
        return redirect()->to('/admin/at');
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
            'email_pj' => $this->request->getPost('email'),
            'password_pj'=> $this->request->getPost('password'),
            'nama_pj'=>$this->request->getPost('nama'),
            'nip_pj'=>$this->request->getPost('nip'),
            'periode_pj'=>$this->request->getPost('periode'),
            'no_surat_dinas_pj'=>$this->request->getPost('surat'),
            

        ];

        $pjModel->protect(false)
        ->save($data);
                
        // $file->move(ROOTPATH . 'public/assets/img/',$nama);
        return redirect()->to('/admin/pj');
    }

    //PT
    public function PTview()
    {
        $ptModel = new PtModel();
        $pt = $ptModel->getAll();
     
        $data= [
            'pt'=>$pt
        ];

        return view('admin/pt',$data);
    }


    public function PTcreate()
    {

        $pj = new PjModel();

        $data= [
            'pj'=>$pj->findAll()
        ];

        return view('admin/create_pt',$data);
    }

    public function savePT()
    {
        // $file = $this->request->getFile('foto');
        // $nama = $file ->getRandomName();
        if(!$this->validate([
            'email' => 'required',
            'password' => 'required',
            'nama' => 'required',
            'nip' =>'required',
            'unit' =>'required',
            'pj' =>'required',
            'periode'=>'required',
            'surat'=>'required',
            
        ])){
            return redirect()->to('/admin/create_pt');
        }
        $ktModel = new PtModel();
        $data=[
            'email_pt' => $this->request->getPost('email'),
            'password_pt'=> $this->request->getPost('password'),
            'nama_pt'=>$this->request->getPost('nama'),
            'nip_pt'=>$this->request->getPost('nip'),
            'unit_kerja_pt'=>$this->request->getPost('unit'),
            'idPJ'=>$this->request->getPost('pj'),
            'periode_pt'=>$this->request->getPost('periode'),
            'no_surat_dinas_pt'=>$this->request->getPost('surat'),
            

        ];

        $ktModel->protect(false)
        ->save($data);
                
        // $file->move(ROOTPATH . 'public/assets/img/',$nama);
        return redirect()->to('/admin/pt');
    }

    //KT
    public function KTview()
    {

        $ktModel = new KtModel();
        $kt = $ktModel->getAll();
   
     
        $data= [
            'kt'=>$kt,

        ];

        return view('admin/kt',$data);
    }

    public function KTcreate()
    {
        $ktModel = new KtModel();
        $pj = new PjModel();
        $pt = new PtModel();

        $data= [
            'pj'=>$pj->findAll(),
            'pt'=>$pt->findAll(),
        ];

        return view('admin/create_kt',$data);
    }

    public function saveKT()
    {
        // $file = $this->request->getFile('foto');
        // $nama = $file ->getRandomName();
        if(!$this->validate([
            'email' => 'required',
            'password' => 'required',
            'nama' => 'required',
            'nip' =>'required',
            'unit' =>'required',
            'pt' =>'required',
            'pj' =>'required',
            'periode'=>'required',
            'surat'=>'required',
            
        ])){
            return redirect()->to('/admin/create_kt');
        }
        $ktModel = new KtModel();
        $data=[
            'email_kt' => $this->request->getPost('email'),
            'password_kt'=> $this->request->getPost('password'),
            'nama_kt'=>$this->request->getPost('nama'),
            'nip_kt'=>$this->request->getPost('nip'),
            'unit_kerja_kt'=>$this->request->getPost('unit'),
            'idPJ'=>$this->request->getPost('pj'),
            'idPT'=>$this->request->getPost('pt'),
            'periode_kt'=>$this->request->getPost('periode'),
            'no_surat_dinas_kt'=>$this->request->getPost('surat'),
            

        ];

        $ktModel->protect(false)
        ->save($data);
                
        // $file->move(ROOTPATH . 'public/assets/img/',$nama);
        return redirect()->to('/admin/kt');
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
