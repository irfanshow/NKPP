<?php

namespace App\Controllers;

use App\Models\NkpModel;
use App\Models\NktModel;
use App\Models\NKPATModel;
use App\Models\NKTATModel;
use App\Models\SoalNKPModel;
use App\Models\SasaranATModel;
use App\Controllers\BaseController;

class ATController extends BaseController
{
    public function index()
    {
        return view('at/index');
    }

    //BImbingan
    public function BimbinganView()
    {
        return view('at/bimbingan');
    }

    public function CreateBimbingan()
    {
        return view('at/create_bimbingan');
    }

    public function DetailBimbingan()
    {
        return view('at/detail_bimbingan');
    }

    public function EditBimbingan()
    {
        return view('at/edit_bimbingan');
    }

    //NKP
    public function NKPView()
    {
        $nkpATModel = new NKPATModel();
        $nkpAT = $nkpATModel->findAll();
     
        $data= [
            'nkpAT'=>$nkpAT
        ];
        return view('at/nkp',$data);
    }

    public function CreateNKP()
    {
        $nkpModel = new NkpModel();
        $nkp = $nkpModel->getAT();

        $data= [
            'nkp'=>$nkp,

        ];



        return view('at/create_nkp',$data);
    }

    public function saveNKP()
    {
        // $file = $this->request->getFile('foto');
        // $nama = $file ->getRandomName();
        if(!$this->validate([
            'periode' => 'required',

            
        ])){
            return redirect()->to('/at/create_nkp');
        }

        $no = 1;
        $no1 = $this->request->getPost('nilai'.''.$no) * 0.25;
        $no2 = $this->request->getPost('nilai'.''.$no+1) * 0.25;
        $no3 = $this->request->getPost('nilai'.''.$no+2) * 0.2;
        $no4 = $this->request->getPost('nilai'.''.$no+3) * 0.3;
        $total1 = $no1+$no2+$no3+$no4;
        $total1 = $total1*0.3;

        $no5 = $this->request->getPost('nilai'.''.$no+4) * 0.4;
        $no6 = $this->request->getPost('nilai'.''.$no+5) * 0.6;
        $total2 = $no5+$no6;
        $total2 = $total2*0.2;

        $no7 = $this->request->getPost('nilai'.''.$no+6) * 0.5;
        $no8 = $this->request->getPost('nilai'.''.$no+7) * 0.5;
        $total3 = $no7+$no8;
        $total3 = $total3*0.3;

        $no9 = $this->request->getPost('nilai'.''.$no+8) * 0.2;
        $no10 = $this->request->getPost('nilai'.''.$no+9) * 0.25;
        $no11 = $this->request->getPost('nilai'.''.$no+10) * 0.25;
        $no12 = $this->request->getPost('nilai'.''.$no+11) * 0.3;
        $total4 = $no9+$no10+$no11+$no12;
        $total4 = $total4*0.2;

        $nkp = $total1+$total2+$total3+$total4;
     
        
        
        $nkpATModel = new NKPATModel();
        $nkpSoalModel = new SoalNKPModel();
        $data=[
            'nilai' => $nkp,
            'periode'=>$this->request->getPost('periode'),

            'status'=> "proses",

            // 'nilai'=>$this->request->getPost('pt'),
            // 'tanggal'=>$this->request->getPost('periode'),
            
        ];

        // $data1=[
        //     'no1'=>$this->request->getPost('nilai'.''.$no),
        //     'no2'=>$this->request->getPost('nilai'.''.$no+1),
        //     'no3'=> $this->request->getPost('nilai'.''.$no+2),
        //     'no4'=> $this->request->getPost('nilai'.''.$no+3),
        //     'no5'=> $this->request->getPost('nilai'.''.$no+4),
        //     'no6'=> $this->request->getPost('nilai'.''.$no+5),
        //     'no7'=> $this->request->getPost('nilai'.''.$no+6),
        //     'no8'=> $this->request->getPost('nilai'.''.$no+7),
        //     'no9'=> $this->request->getPost('nilai'.''.$no+8),
        //     'no10'=> $this->request->getPost('nilai'.''.$no+9),
        //     'no11'=> $this->request->getPost('nilai'.''.$no+10),
        //     'no12'=> $this->request->getPost('nilai'.''.$no+11),
        //     'bagian'=>"at",
        // ];


        $nkpATModel->protect(false)->save($data);
        // $nkpSoalModel->protect(false)->save($data1);

                
        // $file->move(ROOTPATH . 'public/assets/img/',$nama);
        return redirect()->to('/at/nkp');
    }

    public function DetailNKP($id)
    {
        $nkpATModel = new NKPATModel();
        $nkp = $nkpATModel->find($id);
        $nkpModel = new NkpModel();
        $soal = $nkpModel->getAT();
        $data= [
            'nkp'=>$nkp,
            'soal'=>$soal

        ];

        return view('at/detail_nkp',$data);
    }

    public function deleteNKP($id)
    {
        $nkpATModel = new NKPATModel();
        $nkpATModel->delete($id);


        return redirect()->to('/at/nkp');
    }

    public function EditNKP($id)
    {
        $nkpATModel = new NKPATModel();
        $nkp = $nkpATModel->find($id);
        $nkpModel = new NkpModel();
        $soal = $nkpModel->getAT();

        $data= [
           'nkp'=>$nkp,
            'soal'=>$soal

        ];
        return view('at/edit_nkp',$data);
    }

    public function updateNKP($id)
    {
        // $file = $this->request->getFile('foto');
        // $nama = $file ->getRandomName();
        if(!$this->validate([
            'periode' => 'required',

            
        ])){
            return redirect()->to('/at/create_nkp');
        }

        $no = 1;
        $no1 = $this->request->getPost('nilai'.''.$no) * 0.25;
        $no2 = $this->request->getPost('nilai'.''.$no+1) * 0.25;
        $no3 = $this->request->getPost('nilai'.''.$no+2) * 0.2;
        $no4 = $this->request->getPost('nilai'.''.$no+3) * 0.3;
        $total1 = $no1+$no2+$no3+$no4;
        $total1 = $total1*0.3;

        $no5 = $this->request->getPost('nilai'.''.$no+4) * 0.4;
        $no6 = $this->request->getPost('nilai'.''.$no+5) * 0.6;
        $total2 = $no5+$no6;
        $total2 = $total2*0.2;

        $no7 = $this->request->getPost('nilai'.''.$no+6) * 0.5;
        $no8 = $this->request->getPost('nilai'.''.$no+7) * 0.5;
        $total3 = $no7+$no8;
        $total3 = $total3*0.3;

        $no9 = $this->request->getPost('nilai'.''.$no+8) * 0.2;
        $no10 = $this->request->getPost('nilai'.''.$no+9) * 0.25;
        $no11 = $this->request->getPost('nilai'.''.$no+10) * 0.25;
        $no12 = $this->request->getPost('nilai'.''.$no+11) * 0.3;
        $total4 = $no9+$no10+$no11+$no12;
        $total4 = $total4*0.2;

        $nkp = $total1+$total2+$total3+$total4;
     
        
        
        $nkpATModel = new NKPATModel();
        $nkpSoalModel = new SoalNKPModel();
        $data=[
            'nilai' => $nkp,
            'periode'=>$this->request->getPost('periode'),

            'status'=> "proses",

            // 'nilai'=>$this->request->getPost('pt'),
            // 'tanggal'=>$this->request->getPost('periode'),
            
        ];



        $nkpATModel->protect(false)->update($id,$data);
        // $nkpSoalModel->protect(false)->save($data1);

                
        // $file->move(ROOTPATH . 'public/assets/img/',$nama);
        return redirect()->to('/at/nkp');
    }

    //NKT
    public function NKTVIew()
    {
        $nktATModel = new NKTATModel();
        $nktAT = $nktATModel->findAll();
     
        $data= [
            'nktAT'=>$nktAT
        ];
        return view('at/nkt',$data);
    }

    public function CreateNKT()
    {
        $nktModel = new NktModel();
        $nkt = $nktModel->getAT();

        $data= [
            'nkt'=>$nkt,

        ];

        return view('at/create_nkt',$data);
    }

    public function saveNKT()
    {
        // $file = $this->request->getFile('foto');
        // $nama = $file ->getRandomName();
        if(!$this->validate([
            'periode' => 'required',

            
        ])){
            return redirect()->to('/at/create_nkt');
        }

        $no = 1;
        $no1 = $this->request->getPost('nilai'.''.$no) * 0.4;
        $no2 = $this->request->getPost('nilai'.''.$no+1) * 0.6;
        $total1 = $no1+$no2;
        $total1 = $total1*0.1;

        $no3 = $this->request->getPost('nilai'.''.$no+2) * 0.2;
        $no4 = $this->request->getPost('nilai'.''.$no+3) * 0.3;
        $no5 = $this->request->getPost('nilai'.''.$no+4) * 0.5;
        $total2 = $no3+$no4+$no5;
        $total2 = $total2*0.25;

        $no6 = $this->request->getPost('nilai'.''.$no+5) * 0.5;
        $no7 = $this->request->getPost('nilai'.''.$no+6) * 0.3;
        $no8 = $this->request->getPost('nilai'.''.$no+7) * 0.2;
        $total3 = $no6+$no7+$no8;
        $total3 = $total3*0.25;

        $no9 = $this->request->getPost('nilai'.''.$no+8) * 0.33;
        $no10 = $this->request->getPost('nilai'.''.$no+9) * 0.34;
        $no11 = $this->request->getPost('nilai'.''.$no+10) * 0.33;
        $total4 = $no9+$no10+$no11;
        $total4 = $total4*0.25;

        $no12 = $this->request->getPost('nilai'.''.$no+11) * 0.4;
        $no13 = $this->request->getPost('nilai'.''.$no+11) * 0.2;
        $no14 = $this->request->getPost('nilai'.''.$no+11) * 0.4;
        $total5 = $no12+$no13+$no14;
        $total5 = $total5*0.15;

        $nkt = $total1+$total2+$total3+$total4+$total5;
     
        
        $nktATModel = new NKTATModel();
      
        $data=[
            'nilai' => $nkt,
            'periode'=>$this->request->getPost('periode'),

            'status'=> "proses",

            
        ];




        $nktATModel->protect(false)->save($data);
  

                
        // $file->move(ROOTPATH . 'public/assets/img/',$nama);
        return redirect()->to('/at/nkt');
    }

    public function DetailNKT($id)
    {
        $nktATModel = new NKTATModel();
        $nkt = $nktATModel->find($id);
        $nktModel = new NktModel();
        $soal = $nktModel->getAT();
        $data= [
            'nkt'=>$nkt,
            'soal'=>$soal

        ];
        return view('at/detail_nkt',$data);
    }

    public function deleteNKT($id)
    {
        $nktATModel = new NKTATModel();
        $nktATModel->delete($id);


        return redirect()->to('/at/nkt');
    }

    public function EditNKT($id)
    {
        $nktATModel = new NKTATModel();
        $nkt = $nktATModel->find($id);
        $nktModel = new NktModel();
        $soal = $nktModel->getAT();

        $data= [
           'nkt'=>$nkt,
            'soal'=>$soal

        ];
        return view('at/edit_nkt',$data);
    }

    public function updateNKT($id)
    {
        // $file = $this->request->getFile('foto');
        // $nama = $file ->getRandomName();
        if(!$this->validate([
            'periode' => 'required',

            
        ])){
            return redirect()->to('/at/create_nkt');
        }

        $no = 1;
        $no1 = $this->request->getPost('nilai'.''.$no) * 0.4;
        $no2 = $this->request->getPost('nilai'.''.$no+1) * 0.6;
        $total1 = $no1+$no2;
        $total1 = $total1*0.1;

        $no3 = $this->request->getPost('nilai'.''.$no+2) * 0.2;
        $no4 = $this->request->getPost('nilai'.''.$no+3) * 0.3;
        $no5 = $this->request->getPost('nilai'.''.$no+4) * 0.5;
        $total2 = $no3+$no4+$no5;
        $total2 = $total2*0.25;

        $no6 = $this->request->getPost('nilai'.''.$no+5) * 0.5;
        $no7 = $this->request->getPost('nilai'.''.$no+6) * 0.3;
        $no8 = $this->request->getPost('nilai'.''.$no+7) * 0.2;
        $total3 = $no6+$no7+$no8;
        $total3 = $total3*0.25;

        $no9 = $this->request->getPost('nilai'.''.$no+8) * 0.33;
        $no10 = $this->request->getPost('nilai'.''.$no+9) * 0.34;
        $no11 = $this->request->getPost('nilai'.''.$no+10) * 0.33;
        $total4 = $no9+$no10+$no11;
        $total4 = $total4*0.25;

        $no12 = $this->request->getPost('nilai'.''.$no+11) * 0.4;
        $no13 = $this->request->getPost('nilai'.''.$no+11) * 0.2;
        $no14 = $this->request->getPost('nilai'.''.$no+11) * 0.4;
        $total5 = $no12+$no13+$no14;
        $total5 = $total5*0.15;

        $nkt = $total1+$total2+$total3+$total4+$total5;
     
     
        
        
        $nktATModel = new NKTATModel();
   
        $data=[
            'nilai' => $nkt,
            'periode'=>$this->request->getPost('periode'),

            'status'=> "proses",

            // 'nilai'=>$this->request->getPost('pt'),
            // 'tanggal'=>$this->request->getPost('periode'),
            
        ];



        $nktATModel->protect(false)->update($id,$data);
    

                
        // $file->move(ROOTPATH . 'public/assets/img/',$nama);
        return redirect()->to('/at/nkt');
    }

    //Sasaran
    public function SasaranKinerjaVIew()
    {
        $SasaranATModel = new SasaranATModel();
        
        $sasaranAT = $SasaranATModel->findAll();
     
        $data= [
            'sasaranAT'=>$sasaranAT
        ];

        return view('at/sasarankinerja',$data);
    }

    public function CreateSasaran()
    {
        return view('at/create_sasaran');
    }

    public function saveSasaran()
    {
        // $file = $this->request->getFile('foto');
        // $nama = $file ->getRandomName();
        if(!$this->validate([
            'kuant1' => 'required',
            'kual1' => 'required',
            'waktu1' => 'required',
            'kuant2' => 'required',
            'kual2' => 'required',
            'waktu2' => 'required',
            'periode' =>'required',

            
        ])){
            return redirect()->to('/at/create_sasaran');
        }
        $sasaranModel = new SasaranATModel();
        $data1=[
            'kuantitas' => $this->request->getPost('kuant1'),
            'kualitas'=> $this->request->getPost('kual1'),
            'waktu'=>$this->request->getPost('waktu1'),
            'periode_at'=>$this->request->getPost('periode'),
            'catatan_at'=>$this->request->getPost('catatan'),
            'status'=>"belum",
            // 'nilai'=>$this->request->getPost('pt'),
            // 'tanggal'=>$this->request->getPost('periode'),
            
        ];

        $data2=[
            'kuantitas' => $this->request->getPost('kuant2'),
            'kualitas'=> $this->request->getPost('kual2'),
            'waktu'=>$this->request->getPost('waktu2'),
            'periode_at'=>$this->request->getPost('periode'),
            'catatan_at'=>$this->request->getPost('catatan'),
            'status'=>"belum",

            // 'nilai'=>$this->request->getPost('pt'),
            // 'tanggal'=>$this->request->getPost('periode'),
            
        ];

        $sasaranModel->protect(false)
        ->save($data1);

        $sasaranModel->protect(false)
        ->save($data2);
                
        // $file->move(ROOTPATH . 'public/assets/img/',$nama);
        return redirect()->to('/at/sasarankinerja');
    }

    public function DetailSasaran()
    {
        return view('at/detail_sasaran');
    }

    public function EditSasaran()
    {
        return view('at/edit_sasaran');
    }

    //Profile
    public function ProfileVIew()
    {
        return view('at/profile');
    }

    //NKPP
    public function NKPPVIew()
    {
        return view('at/nkpp');
    }

    public function DetailNKPP()
    {
        return view('at/detail_nkpp');
    }

}
