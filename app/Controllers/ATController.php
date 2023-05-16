<?php

namespace App\Controllers;

use App\Models\AtModel;
use App\Models\NkpModel;
use App\Models\NktModel;
use App\Models\Bimbingan;
use App\Models\NKPATModel;
use App\Models\NKTATModel;
use App\Models\SoalNKPModel;
use App\Models\NilaiNKTModel;
use App\Models\SasaranATModel;
use App\Controllers\BaseController;

class ATController extends BaseController
{
    public function index($id)
    {
        $atModel = new AtModel();
        
        $at = $atModel->find($id);

        $data=[
            'at' => $at
        ];
        return view('at/index',$data);
    }

    //BImbingan
    public function BimbinganView()
    {
        $bimbinganModel = new Bimbingan();
        $bimbingan = $bimbinganModel->getAT();

        $data=[
            'bimbingan' => $bimbingan
        ];
        return view('at/bimbingan',$data);
    }

    public function CreateBimbingan()
    {
        return view('at/create_bimbingan');
    }

    public function saveBimbingan()
    {
        // $file = $this->request->getFile('foto');
        // $nama = $file ->getRandomName();
        if(!$this->validate([
            'kendala1' => 'required',
            'kendala2' => 'required',
            
        ])){
            return redirect()->to('/at/create_bimbingan');
        }
        $bimbinganModel = new Bimbingan();
        $data1=[
            'bimbingan_satu' => $this->request->getPost('kendala1'),
            'bimbingan_dua'=> $this->request->getPost('kendala2'),
            'nama'=>$this->request->getPost('nama'),
            'periode'=>$this->request->getPost('periode'),
            'nip' => $this->request->getPost('nip'),
            'bagian' =>"at",
            'status' => "belum",

            // 'nilai'=>$this->request->getPost('pt'),
            // 'tanggal'=>$this->request->getPost('periode'),
            
        ];


        $bimbinganModel->protect(false)
        ->save($data1);

                
        // $file->move(ROOTPATH . 'public/assets/img/',$nama);
        return redirect()->to('/at/bimbingan');
    }

    public function DetailBimbingan($id)
    {

        $bimbinganModel = new Bimbingan();
        $bimbingan = $bimbinganModel->find($id);

        $data=[
            'bimbingan' => $bimbingan
        ];

        return view('at/detail_bimbingan',$data);
    }

    public function EditBimbingan($id)
    {
        $bimbinganModel = new Bimbingan();
        $bimbingan = $bimbinganModel->find($id);

        $data= [
           'bimbingan'=>$bimbingan,

        ];
        return view('at/edit_bimbingan',$data);
    }

    public function updateBimbingan($id)
    {
        // $file = $this->request->getFile('foto');
        // $nama = $file ->getRandomName();
        if(!$this->validate([
            'kendala1' => 'required',
            'kendala2' => 'required',
            
        ])){
            return redirect()->to('/at/edit_bimbingan/'.$id);
        }
        $bimbinganModel = new Bimbingan();
        $data1=[
            'bimbingan_satu' => $this->request->getPost('kendala1'),
            'bimbingan_dua'=> $this->request->getPost('kendala2'),
            'nama'=>$this->request->getPost('nama'),
            'periode'=>$this->request->getPost('periode'),
            'nip' => "at",
            'status' => "belum",

            // 'nilai'=>$this->request->getPost('pt'),
            // 'tanggal'=>$this->request->getPost('periode'),
            
        ];


        $bimbinganModel->protect(false)
        ->update($id,$data1);

                
        // $file->move(ROOTPATH . 'public/assets/img/',$nama);
        return redirect()->to('/at/detail_bimbingan/'.$id);
    }

    public function deleteBimbingan($id)
    {
        $bimbingan = new Bimbingan();
        $bimbingan->delete($id);


        return redirect()->to('/at/bimbingan');
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
            'nilai_nkp' => $nkp,
            'nilai' => $nkp,
            'periode'=>$this->request->getPost('periode'),
            'status'=> "proses",
            'nama_at' =>$this->request->getPost('nama'),
            'nip_at' =>$this->request->getPost('nip')

            // 'nilai'=>$this->request->getPost('pt'),
            // 'tanggal'=>$this->request->getPost('periode'),
            
        ];


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
            'nilai_nkt' => $nkt,
            'nilai' => $nkt,
            'periode'=>$this->request->getPost('periode'),

            'status'=> "proses",
            'nama_at' =>$this->request->getPost('nama'),
            'nip_at' =>$this->request->getPost('nip')

            
        ];

        $NilaiNKTModel = new NilaiNKTModel();
        
        $NKTModel = new NKTModel();

        $nktATModel->protect(false)->save($data);
        // $NKTModel->protect(false)->insertBatch($data2);
  

                
        // $file->move(ROOTPATH . 'public/assets/img/',$nama);
        return redirect()->to('/at/nkt');
    }

    public function DetailNKT($id)
    {
        $nktATModel = new NKTATModel();
        $nkt = $nktATModel->find($id);

        $nktModel = new NktModel();
        $soal = $nktModel
        ->getAT();

        $NilaiNKTModel = new NilaiNKTModel();

        $data= [
            'nkt'=>$nkt,
            'soal'=>$soal,
          

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
            'kuantitas2' => $this->request->getPost('kuant2'),
            'kualitas2'=> $this->request->getPost('kual2'),
            'waktu2'=>$this->request->getPost('waktu2'),
            'periode_at'=>$this->request->getPost('periode'),
            'catatan_at'=>$this->request->getPost('catatan'),
            'status'=>"belum",
            'nama_at' =>$this->request->getPost('nama'),
            'nip_at' =>$this->request->getPost('nip')
            // 'nilai'=>$this->request->getPost('pt'),
            // 'tanggal'=>$this->request->getPost('periode'),
            
        ];


        $sasaranModel->protect(false)
        ->save($data1);

                
        // $file->move(ROOTPATH . 'public/assets/img/',$nama);
        return redirect()->to('/at/sasarankinerja');
    }

    public function DetailSasaran($id)
    {
        $SasaranATModel = new SasaranATModel();

        $sasaranAT = $SasaranATModel->find($id);
     
        $data= [
            'sasaranAT'=>$sasaranAT
        ];
        return view('at/detail_sasaran',$data);
    }

    public function EditSasaran($id)
    {
        $sasaranModel = new SasaranATModel();
        $sasaranAT = $sasaranModel->find($id);

        $data= [
            'sasaranAT'=>$sasaranAT

        ];
        return view('at/edit_sasaran',$data);
    }

    public function updateSasaran($id)
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
            return redirect()->to('/at/edit_sasaran/'.$id);
        }
        $sasaranModel = new SasaranATModel();
        $data1=[
            'kuantitas' => $this->request->getPost('kuant1'),
            'kualitas'=> $this->request->getPost('kual1'),
            'waktu'=>$this->request->getPost('waktu1'),
            'kuantitas2' => $this->request->getPost('kuant2'),
            'kualitas2'=> $this->request->getPost('kual2'),
            'waktu2'=>$this->request->getPost('waktu2'),
            'periode_at'=>$this->request->getPost('periode'),
            'catatan_at'=>$this->request->getPost('catatan'),
            'status'=>"belum",
            'nama_at' =>$this->request->getPost('nama'),
            'nip_at' =>$this->request->getPost('nip')
            // 'nilai'=>$this->request->getPost('pt'),
            // 'tanggal'=>$this->request->getPost('periode'),
            
        ];


        $sasaranModel->protect(false)
        ->update($id,$data1);

                
        // $file->move(ROOTPATH . 'public/assets/img/',$nama);
        return redirect()->to('/at/detail_sasaran/'.$id);
    }

    public function deleteSasaran($id)
    {
        $sasaranModel = new SasaranATModel();
        $sasaranModel->delete($id);


        return redirect()->to('/at/sasarankinerja');
    }

    //Profile
    public function ProfileVIew($id)
    {

        $atModel = new AtModel();
        
        $at = $atModel->find($id);

        $data=[
            'at' => $at
        ];

        return view('at/profile',$data);
    }

    public function saveProfile($id)
    {
        // $file = $this->request->getFile('foto');
        // $nama = $file ->getRandomName();
        if(!$this->validate([
            'nama' => 'required',
            'nip' => 'required',
            'unit' => 'required',
            'periode' => 'required',
            
        ])){
            return redirect()->to('/at/profile');
        }
        $atModel = new AtModel();
        $data1=[
            'nama_at' => $this->request->getPost('nama'),
            'nip_at'=> $this->request->getPost('nip'),
            'unit_kerja_at'=>$this->request->getPost('unit'),
            'periode_at'=>$this->request->getPost('periode'),

            //Foto
            
        ];


        $atModel->protect(false)
        ->update($id,$data1);

                
        // $file->move(ROOTPATH . 'public/assets/img/',$nama);
        return redirect()->to('/at/index/'.$id);
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
