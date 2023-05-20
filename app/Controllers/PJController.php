<?php

namespace App\Controllers;

use App\Models\PjModel;
use App\Models\NkpModel;
use App\Models\NktModel;
use App\Models\Bimbingan;
use App\Models\NKPKTModel;
use App\Models\NKPPTModel;
use App\Models\NKTKTModel;
use App\Models\NKTPTModel;
use App\Models\SasaranKTModel;
use App\Models\SasaranPTModel;
use App\Controllers\BaseController;

class PJController extends BaseController
{
    public function index($id)
    {
        $pjModel = new PjModel();
        
        $pj = $pjModel->find($id);

        $data=[
            'pj' => $pj
        ];
        return view ("pj/index",$data);
    }

    public function Profile($id)
    {
        $pjModel = new PjModel();
        
        $pj = $pjModel->find($id);

        $data=[
            'pj' => $pj
        ];
        return view ("pj/profile",$data);
    }

    public function saveProfile($id)
    {
        // $file = $this->request->getFile('foto');
        // $nama = $file ->getRandomName();
        if(!$this->validate([
            'nama' => 'required',
            'nip' => 'required',
            // 'unit' => 'required',
            'periode' => 'required',
            
        ])){
            return redirect()->to('/pt/profile/'.$id);
        }

        // $file = $this->request->getFile('foto');
        // $nama = $file ->getRandomName();

        $pjModel = new PjModel();
        $data1=[
            'nama_pj' => $this->request->getPost('nama'),
            'nip_pj'=> $this->request->getPost('nip'),
            // 'unit_kerja_pt'=>$this->request->getPost('unit'),
            'periode_pj'=>$this->request->getPost('periode'),
            // 'foto_pj'=>$nama,

            //Foto
            
        ];

        // $file->move(ROOTPATH . 'public/assets/img/',$nama);
        $pjModel->protect(false)
        ->update($id,$data1);

                
        // $file->move(ROOTPATH . 'public/assets/img/',$nama);
        return redirect()->to('/pj/index/'.$id);
    }

    public function saveFotoProfile($id)
    {

        $file = $this->request->getFile('foto');
        $nama = $file ->getRandomName();
        $rules = [];

        $pjModel = new PjModel();
        $data1=[

            'foto_pj'=>$nama,

            //Foto
            
        ];

        $file->move(ROOTPATH . 'public/assets/img/',$nama);
        $pjModel->protect(false)
        ->update($id,$data1);
        

                
        // $file->move(ROOTPATH . 'public/assets/img/',$nama);
        return redirect()->to('pj/profile/'.$id);
    }

    //KETUA
    //NKP
    public function DetailNKP($id)
    {
        $nkpKTModel = new NKPKTModel();
        $nkp = $nkpKTModel->find($id);
        $nkpModel = new NkpModel();
        $soal = $nkpModel->getKT();
        $data= [
            'nkp'=>$nkp,
            'soal'=>$soal

        ];
        return view ("pj/ketua/detail_nkp",$data);
    }

    public function ReviewNKP()
    {
        $nkpKTModel = new NKPKTModel();
        $nkpKT = $nkpKTModel->findAll();
     
        $data= [
            'nkpKT'=>$nkpKT
        ];
        return view ("pj/ketua/review_nkp",$data);
    }

    public function saveNKPKT($id)
    {
        // $file = $this->request->getFile('foto');
        // $nama = $file ->getRandomName();
        if(!$this->validate([
            'periode' => 'required',

            
        ])){
            return redirect()->to('/pj/ketua/do_review_nkp/'.$id);
        }

        $no = 1;
        $no1 = $this->request->getPost('nilai'.''.$no) * 0.5;
        $no2 = $this->request->getPost('nilai'.''.$no+1) * 0.5;
        $total1 = $no1+$no2;
        $total1 = $total1*0.2;

        $no3 = $this->request->getPost('nilai'.''.$no+2) * 0.4;
        $no4 = $this->request->getPost('nilai'.''.$no+3) * 0.6;
        $total2 = $no3+$no4;
        $total2 = $total2*0.2;

        $no5 = $this->request->getPost('nilai'.''.$no+4) * 0.5;
        $no6 = $this->request->getPost('nilai'.''.$no+5) * 0.5;
        $total3 = $no5+$no6;
        $total3 = $total3*0.2;

        $no7 = $this->request->getPost('nilai'.''.$no+6) * 0.4;
        $no8 = $this->request->getPost('nilai'.''.$no+7) * 0.6;
        $total4 = $no7+$no8;
        $total4 = $total4*0.2;

        $no9 = $this->request->getPost('nilai'.''.$no+8) * 0.25;
        $no10 = $this->request->getPost('nilai'.''.$no+9) * 0.25;
        $no11 = $this->request->getPost('nilai'.''.$no+10) * 0.25;
        $no12 = $this->request->getPost('nilai'.''.$no+11) * 0.3;
        $total5 = $no9+$no10+$no11+$no12;
        $total5 = $total5*0.2;

        $nkp = $total1+$total2+$total3+$total4+$total5;
     
        
        
        $nkpKTModel = new NKPKTModel();

        $data=[
            'nilai_nkp' => $nkp,
            'review_nilai' => $nkp,
            'periode'=>$this->request->getPost('periode'),
            'status'=> "realisasi",


            // 'nilai'=>$this->request->getPost('pt'),
            // 'tanggal'=>$this->request->getPost('periode'),
            
        ];


        $nkpKTModel->protect(false)->update($id,$data);


                
        // $file->move(ROOTPATH . 'public/assets/img/',$nama);
        return redirect()->to('/pj/ketua/detail_nkp/'.$id);
    }

    //NKT
    public function DetailNKT($id)
    {
        $nktKTModel = new NKTKTModel();
        $nkt = $nktKTModel->find($id);
        $nktModel = new NktModel();
        $soal = $nktModel->getKT();
        $data= [
            'nkt'=>$nkt,
            'soal'=>$soal

        ];
        return view ("pj/ketua/detail_nkt",$data);
    }

    public function ReviewNKT()
    {
        $nktKTModel = new NKTKTModel();
        $nktKT = $nktKTModel->findAll();
     
        $data= [
            'nktKT'=>$nktKT
        ];
        return view ("pj/ketua/review_nkt",$data);
    }

    public function saveNKTKT($id)
    {
        // $file = $this->request->getFile('foto');
        // $nama = $file ->getRandomName();
        if(!$this->validate([
            'periode' => 'required',

            
        ])){
            return redirect()->to('/pj/ketua/do_review_nkt/'.$id);
        }

        $no = 1;
        $no1 = $this->request->getPost('nilai'.''.$no) * 0.2;
        $no2 = $this->request->getPost('nilai'.''.$no+1) * 0.3;
        $no3 = $this->request->getPost('nilai'.''.$no+2) * 0.5;
        $total1 = $no1+$no2+$no3;
        $total1 = $total1*0.2;


        $no4 = $this->request->getPost('nilai'.''.$no+3) * 0.2;
        $no5 = $this->request->getPost('nilai'.''.$no+4) * 0.4;
        $no6 = $this->request->getPost('nilai'.''.$no+5) * 0.4;
        $total2 = $no4+$no5+$no6;
        $total2 = $total2*0.15;

        $no7 = $this->request->getPost('nilai'.''.$no+6) * 0.2;
        $no8 = $this->request->getPost('nilai'.''.$no+7) * 0.4;
        $no9 = $this->request->getPost('nilai'.''.$no+8) * 0.4;
        $total3 = $no7+$no8+$no9;
        $total3 = $total3*0.15;

        $no10 = $this->request->getPost('nilai'.''.$no+9) * 0.3;
        $no11 = $this->request->getPost('nilai'.''.$no+10) * 0.3;
        $no12 = $this->request->getPost('nilai'.''.$no+11) * 0.4;
        $total4 = $no10+$no11+$no12 ;
        $total4 = $total4*0.2;



        $no13 = $this->request->getPost('nilai'.''.$no+12) * 1;
        $total5 = $no13;
        $total5 = $total5*0.3;

        $nkt = $total1+$total2+$total3+$total4+$total5;
     
        
        
        $nktKTModel = new NKTKTModel();

        $data=[
            'nilai_nkt' => $nkt,
            'review_nilai' => $nkt,
            'periode'=>$this->request->getPost('periode'),
            'status'=> "sudah review",


            // 'nilai'=>$this->request->getPost('pt'),
            // 'tanggal'=>$this->request->getPost('periode'),
            
        ];


        $nktKTModel->protect(false)->update($id,$data);


                
        // $file->move(ROOTPATH . 'public/assets/img/',$nama);
        return redirect()->to('/pj/ketua/detail_nkt/'.$id);
    }

    //Sasaran
    public function DetailSasaran($id)
    {
        $SasaranKTModel = new SasaranKTModel();

        $sasaranKT = $SasaranKTModel->find($id);
     
        $data= [
            'sasaranKT'=>$sasaranKT
        ];
        return view ("pj/ketua/detail_sasaran",$data);
    }

    public function ReviewSasaran()
    {
        $SasaranKTModel = new SasaranKTModel();
        
        $sasaranKT = $SasaranKTModel->findAll();
     
        $data= [
            'sasaranKT'=>$sasaranKT
        ];
        return view ("pj/ketua/review_sasaran",$data);
    }

    public function saveSasaranKT($id)
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
            'kuant3' => 'required',
            'kual3' => 'required',
            'waktu3' => 'required',
            'kuant4' => 'required',
            'kual4' => 'required',
            'waktu4' => 'required',
            'periode' =>'required',

            
        ])){
            return redirect()->to('/pj/ketua/do_review_sasaran/'.$id);
        }

        $sasaranModel = new SasaranKTModel();

        //no1
        $waktuTarget = (int)$this->request->getPost('waktuKT1');

        $waktuRealisasi = (int)$this->request->getPost('waktu1');

        //no2
        $waktuTarget2 = (int)$this->request->getPost('waktuKT2');
     
        $waktuRealisasi2 = (int)$this->request->getPost('waktu2');

        //no3
        $waktuTarget3 = (int)$this->request->getPost('waktuKT3');
     
        $waktuRealisasi3 = (int)$this->request->getPost('waktu3');

        //no4
        $waktuTarget4 = (int)$this->request->getPost('waktuKT4');
     
        $waktuRealisasi4 = (int)$this->request->getPost('waktu4');
        
        // var_dump($waktuTarget);

        //RUmus Persentase1
        $totalPersentase = 0;
        
        $persenWaktu = 100 - (($waktuTarget / $waktuRealisasi)* 100) ;


        if($persenWaktu > 24)
        {
            $totalPersentase = ((((1.76 * $waktuTarget / $waktuRealisasi) / $waktuTarget)*100)-100);
            

        }
        else if($persenWaktu < 24)
        {
            $totalPersentase = 1.76 * $waktuTarget / $waktuRealisasi * 100;
            
        }

        //Rumus persentase2
        $totalPersentase2 = 0;

        $persenWaktu2 = 100 - (($waktuTarget2 / $waktuRealisasi2)* 100) ;

        
        if($persenWaktu2 > 24)
        {
            $totalPersentase2 = ((((1.76 * $waktuTarget2 / $waktuRealisasi2) / $waktuTarget2)*100)-100);
        }
        else if($persenWaktu2 < 24)
        {
            $totalPersentase2 = 1.76 * $waktuTarget2 / $waktuRealisasi2 * 100;
        }

        //Rumus persentase3
        $totalPersentase3 = 0;

        $persenWaktu3 = 100 - (($waktuTarget3 / $waktuRealisasi3)* 100) ;

        
        if($persenWaktu3 > 24)
        {
            $totalPersentase3 = ((((1.76 * $waktuTarget3 / $waktuRealisasi3) / $waktuTarget3)*100)-100);
        }
        else if($persenWaktu3 < 24)
        {
            $totalPersentase3 = 1.76 * $waktuTarget3 / $waktuRealisasi3 * 100;
        }

        //Rumus persentase4
        $totalPersentase4 = 0;

        $persenWaktu4 = 100 - (($waktuTarget4 / $waktuRealisasi4)* 100) ;

        
        if($persenWaktu4 > 24)
        {
            $totalPersentase4 = ((((1.76 * $waktuTarget4 / $waktuRealisasi4) / $waktuTarget4)*100)-100);
        }
        else if($persenWaktu4 < 24)
        {
            $totalPersentase4 = 1.76 * $waktuTarget4 / $waktuRealisasi4 * 100;
        }

        
        
        //Rumus Perhitungan no 1
        $perhitungan1 = $waktuTarget + $waktuRealisasi + $totalPersentase;
        
        //Rumus Perhitungan no 2
        $perhitungan2 = $waktuTarget2 + $waktuRealisasi2 + $totalPersentase2;
        
        //Rumus Perhitungan no 3
        $perhitungan3 = $waktuTarget3 + $waktuRealisasi3 + $totalPersentase3;

        //Rumus Perhitungan no 4
        $perhitungan4 = $waktuTarget4 + $waktuRealisasi4 + $totalPersentase4;

        //Kotak merah
        $nilaiSKP1 = $perhitungan1/3;
        $nilaiSKP2 = $perhitungan2/3;
        $nilaiSKP3 = $perhitungan3/3;
        $nilaiSKP4 = $perhitungan4/3;

        // var_dump($waktuRealisasi);
        // var_dump($waktuTarget);
        // var_dump($nilaiSKP2);



        //Kotak hijau
        $TotalnilaiSKP = $nilaiSKP1 + $nilaiSKP2 + $nilaiSKP3 + $nilaiSKP4 /4;
       

        $data1=[
            'review_kuantitas' => $this->request->getPost('kuant1'),
            'review_kualitas'=> $this->request->getPost('kual1'),
            'review_waktu'=>$this->request->getPost('waktu1'),
            'review_kuantitas2' => $this->request->getPost('kuant2'),
            'review_kualitas2'=> $this->request->getPost('kual2'),
            'review_waktu2'=>$this->request->getPost('waktu2'),
            'review_kuantitas3' => $this->request->getPost('kuant3'),
            'review_kualitas3'=> $this->request->getPost('kual3'),
            'review_waktu3'=>$this->request->getPost('waktu3'),
            'review_kuantitas4' => $this->request->getPost('kuant4'),
            'review_kualitas4'=> $this->request->getPost('kual4'),
            'review_waktu4'=>$this->request->getPost('waktu4'),
            'periode_kt'=>$this->request->getPost('periode'),
            'status'=>"sudah",
            'nilai'=>$nilaiSKP1,
            'nilai2'=>$nilaiSKP2,
            'nilai3'=>$nilaiSKP3,
            'nilai4'=>$nilaiSKP4,
            'nilai_skp'=>$TotalnilaiSKP,
            'review_nilai'=>$TotalnilaiSKP,
            // 'realisasi_nilai_kt'=>$TotalnilaiSKP,
            // 'nilai'=>$this->request->getPost('pt'),
            // 'tanggal'=>$this->request->getPost('periode'),
            
        ];


        $sasaranModel->protect(false)
        ->update($id,$data1);
        
                
        // $file->move(ROOTPATH . 'public/assets/img/',$nama);
        return redirect()->to('/pj/ketua/detail_sasaran/'.$id);
    }

    public function approveSasaranKT($id)
    {
        // $file = $this->request->getFile('foto');
        // $nama = $file ->getRandomName();
        if(!$this->validate([
            'kuant' => 'required',
            'kual' => 'required',
            'waktu' => 'required',
            'kuant2' => 'required',
            'kual2' => 'required',
            'waktu2' => 'required',
            'kuant3' => 'required',
            'kual3' => 'required',
            'waktu3' => 'required',
            'kuant4' => 'required',
            'kual4' => 'required',
            'waktu4' => 'required',
    

            
        ])){
            return redirect()->to('/pj/ketua/do_review_sasaran/'.$id);
        }

        $sasaranModel = new SasaranKTModel();

        //no1
        $waktuTarget = (int)$this->request->getPost('waktu');

        $waktuRealisasi = (int)$this->request->getPost('waktu');

        //no2
        $waktuTarget2 = (int)$this->request->getPost('waktu2');
     
        $waktuRealisasi2 = (int)$this->request->getPost('waktu2');

        //no3
        $waktuTarget3 = (int)$this->request->getPost('waktu3');
     
        $waktuRealisasi3 = (int)$this->request->getPost('waktu3');

        //no4
        $waktuTarget4 = (int)$this->request->getPost('waktu4');
     
        $waktuRealisasi4 = (int)$this->request->getPost('waktu4');
        
        // var_dump($waktuTarget);

        //RUmus Persentase1
        $totalPersentase = 0;
        
        $persenWaktu = 100 - (($waktuTarget / $waktuRealisasi)* 100) ;


        if($persenWaktu > 24)
        {
            $totalPersentase = ((((1.76 * $waktuTarget / $waktuRealisasi) / $waktuTarget)*100)-100);
            

        }
        else if($persenWaktu < 24)
        {
            $totalPersentase = 1.76 * $waktuTarget / $waktuRealisasi * 100;
            
        }

        //Rumus persentase2
        $totalPersentase2 = 0;

        $persenWaktu2 = 100 - (($waktuTarget2 / $waktuRealisasi2)* 100) ;

        
        if($persenWaktu2 > 24)
        {
            $totalPersentase2 = ((((1.76 * $waktuTarget2 / $waktuRealisasi2) / $waktuTarget2)*100)-100);
        }
        else if($persenWaktu2 < 24)
        {
            $totalPersentase2 = 1.76 * $waktuTarget2 / $waktuRealisasi2 * 100;
        }

        //Rumus persentase3
        $totalPersentase3 = 0;

        $persenWaktu3 = 100 - (($waktuTarget3 / $waktuRealisasi3)* 100) ;

        
        if($persenWaktu3 > 24)
        {
            $totalPersentase3 = ((((1.76 * $waktuTarget3 / $waktuRealisasi3) / $waktuTarget3)*100)-100);
        }
        else if($persenWaktu3 < 24)
        {
            $totalPersentase3 = 1.76 * $waktuTarget3 / $waktuRealisasi3 * 100;
        }

        //Rumus persentase4
        $totalPersentase4 = 0;

        $persenWaktu4 = 100 - (($waktuTarget4 / $waktuRealisasi4)* 100) ;

        
        if($persenWaktu4 > 24)
        {
            $totalPersentase4 = ((((1.76 * $waktuTarget4 / $waktuRealisasi4) / $waktuTarget4)*100)-100);
        }
        else if($persenWaktu4 < 24)
        {
            $totalPersentase4 = 1.76 * $waktuTarget4 / $waktuRealisasi4 * 100;
        }

        
        
        //Rumus Perhitungan no 1
        $perhitungan1 = $waktuTarget + $waktuRealisasi + $totalPersentase;
        
        //Rumus Perhitungan no 2
        $perhitungan2 = $waktuTarget2 + $waktuRealisasi2 + $totalPersentase2;
        
        //Rumus Perhitungan no 3
        $perhitungan3 = $waktuTarget3 + $waktuRealisasi3 + $totalPersentase3;

        //Rumus Perhitungan no 4
        $perhitungan4 = $waktuTarget4 + $waktuRealisasi4 + $totalPersentase4;

        //Kotak merah
        $nilaiSKP1 = $perhitungan1/3;
        $nilaiSKP2 = $perhitungan2/3;
        $nilaiSKP3 = $perhitungan3/3;
        $nilaiSKP4 = $perhitungan4/3;

        // var_dump($waktuRealisasi);
        // var_dump($waktuTarget);
        // var_dump($nilaiSKP2);



        //Kotak hijau
        $TotalnilaiSKP = $nilaiSKP1 + $nilaiSKP2 + $nilaiSKP3 + $nilaiSKP4 /4;
       

        $data1=[
            'review_kuantitas' => $this->request->getPost('kuant'),
            'review_kualitas'=> $this->request->getPost('kual'),
            'review_waktu'=>$this->request->getPost('waktu'),
            'review_kuantitas2' => $this->request->getPost('kuant2'),
            'review_kualitas2'=> $this->request->getPost('kual2'),
            'review_waktu2'=>$this->request->getPost('waktu2'),
            'review_kuantitas3' => $this->request->getPost('kuant3'),
            'review_kualitas3'=> $this->request->getPost('kual3'),
            'review_waktu3'=>$this->request->getPost('waktu3'),
            'review_kuantitas4' => $this->request->getPost('kuant4'),
            'review_kualitas4'=> $this->request->getPost('kual4'),
            'review_waktu4'=>$this->request->getPost('waktu4'),
            'periode_kt'=>$this->request->getPost('periode'),
            'status'=>"sudah",
            'nilai'=>$nilaiSKP1,
            'nilai2'=>$nilaiSKP2,
            'nilai3'=>$nilaiSKP3,
            'nilai4'=>$nilaiSKP4,
            'nilai_skp'=>$TotalnilaiSKP,
            'review_nilai'=>$TotalnilaiSKP,
            // 'realisasi_nilai_kt'=>$TotalnilaiSKP,
            // 'nilai'=>$this->request->getPost('pt'),
            // 'tanggal'=>$this->request->getPost('periode'),
            
        ];


        $sasaranModel->protect(false)
        ->update($id,$data1);
        
                
        // $file->move(ROOTPATH . 'public/assets/img/',$nama);
        return redirect()->to('/pj/ketua/detail_sasaran/'.$id);
    }

    //Do
    public function DoReviewNKP($id)
    {
        $nkpKTModel = new NKPKTModel();
        $nkp = $nkpKTModel->find($id);
        $nkpModel = new NkpModel();
        $soal = $nkpModel->getAT();

        $data= [
           'nkp'=>$nkp,
            'soal'=>$soal

        ];
        return view ("pj/ketua/do_review_nkp",$data);
    }

    public function DoReviewNKT($id)
    {
        $nktKTModel = new NKTKTModel();
        $nkt = $nktKTModel->find($id);
        $nktModel = new NktModel();
        $soal = $nktModel->getKT();

        $data= [
           'nkt'=>$nkt,
            'soal'=>$soal

        ];
        return view ("pj/ketua/do_review_nkt",$data);
    }

    public function DoReviewSasaran($id)
    {
        $SasaranKTModel = new SasaranKTModel();
        
        $sasaranKT = $SasaranKTModel->find($id);
     
        $data= [
            'sasaranKT'=>$sasaranKT
        ];
        return view ("pj/ketua/do_review_sasaran",$data);
    }

    //Pengendali


        //NKP
        public function DetailNKP_Pengendali($id)
        {
            $nkpPTModel = new NKPPTModel();
            $nkp = $nkpPTModel->find($id);
            $nkpModel = new NkpModel();
            $soal = $nkpModel->getPT();
            $data= [
                'nkp'=>$nkp,
                'soal'=>$soal
    
            ];
            return view ("pj/pengendali/detail_nkp",$data);
        }

        public function NKP_Pengendali()
        {
            $nkpPTModel = new NKPPTModel();
            $nkpPT = $nkpPTModel->findAll();
         
            $data= [
                'nkpPT'=>$nkpPT
            ];
            return view ("pj/pengendali/nkp",$data);
        }

        public function RealisasiNKP($id)
        {
            $nkpPTModel = new NKPPTModel();
            $nkp = $nkpPTModel->find($id);
            $nkpModel = new NkpModel();
            $soal = $nkpModel->getPT();
    
            $data= [
               'nkp'=>$nkp,
                'soal'=>$soal
    
            ];
            return view ("pj/pengendali/realisasi_nkp",$data);
        }

        public function saveNKPPT($id)
        {
            // $file = $this->request->getFile('foto');
            // $nama = $file ->getRandomName();
            if(!$this->validate([
                'periode' => 'required',
    
                
            ])){
                return redirect()->to('pj/pengendali/realisasi_nkp/'.$id);
            }
    
            $no = 1;
            $no1 = $this->request->getPost('nilai'.''.$no) * 0.5;
            $no2 = $this->request->getPost('nilai'.''.$no+1) * 0.5;
            $total1 = $no1+$no2;
            $total1 = $total1*0.2;
    
            $no3 = $this->request->getPost('nilai'.''.$no+2) * 0.4;
            $no4 = $this->request->getPost('nilai'.''.$no+3) * 0.6;
            $total2 = $no3+$no4;
            $total2 = $total2*0.2;
    
            $no5 = $this->request->getPost('nilai'.''.$no+4) * 0.5;
            $no6 = $this->request->getPost('nilai'.''.$no+5) * 0.5;
            $total3 = $no5+$no6;
            $total3 = $total3*0.2;
    
            $no7 = $this->request->getPost('nilai'.''.$no+6) * 0.4;
            $no8 = $this->request->getPost('nilai'.''.$no+7) * 0.6;
            $total4 = $no7+$no8;
            $total4 = $total4*0.2;
    
            $no9 = $this->request->getPost('nilai'.''.$no+8) * 0.25;
            $no10 = $this->request->getPost('nilai'.''.$no+9) * 0.25;
            $no11 = $this->request->getPost('nilai'.''.$no+10) * 0.25;
            $no12 = $this->request->getPost('nilai'.''.$no+11) * 0.3;
            $total5 = $no9+$no10+$no11+$no12;
            $total5 = $total5*0.2;
    
            $nkp = $total1+$total2+$total3+$total4+$total5;
         
            
            
            $nkpPTModel = new NKPPTModel();
    
            $data=[
                'nilai_nkp' => $nkp,
                'realisasi_nilai' => $nkp,
                'periode'=>$this->request->getPost('periode'),
                'status'=> "realisasi",
    
                // 'nilai'=>$this->request->getPost('pt'),
                // 'tanggal'=>$this->request->getPost('periode'),
                
            ];
    
    
            $nkpPTModel->protect(false)->update($id,$data);
    
    
                    
            // $file->move(ROOTPATH . 'public/assets/img/',$nama);
            return redirect()->to('/pj/pengendali/detail_nkp/'.$id);
        }

        //NKT
        public function DetailNKT_Pengendali($id)
        {
            $nktPTModel = new NKTPTModel();
            $nkt = $nktPTModel->find($id);
            $nktModel = new NktModel();
            $soal = $nktModel->getPT();
            $data= [
                'nkt'=>$nkt,
                'soal'=>$soal
    
            ];
            return view ("pj/pengendali/detail_nkt",$data);
        }

        public function NKT_Pengendali()
        {
            $nktPTModel = new NKTPTModel();
            $nktPT = $nktPTModel->findAll();
         
            $data= [
                'nktPT'=>$nktPT
            ];
            return view ("pj/pengendali/nkt",$data);
        }

        public function RealisasiNKT($id)
        {
            $nktPTModel = new NKTPTModel();
            $nkt = $nktPTModel->find($id);
            $nktModel = new NktModel();
            $soal = $nktModel->getPT();
    
            $data= [
               'nkt'=>$nkt,
                'soal'=>$soal
    
            ];
            return view ("pj/pengendali/realisasi_nkt",$data);
        }

        public function saveNKTPT($id)
        {
            // $file = $this->request->getFile('foto');
            // $nama = $file ->getRandomName();
            if(!$this->validate([
                'periode' => 'required',
    
                
            ])){
                return redirect()->to('pj/pengendali/realisasi_nkt/'.$id);
            }
    
            $no = 1;
            $no1 = $this->request->getPost('nilai'.''.$no) * 0.4;
            $no2 = $this->request->getPost('nilai'.''.$no+1) * 0.6;
            $total1 = $no1+$no2;
            $total1 = $total1*0.4;
    
            $no3 = $this->request->getPost('nilai'.''.$no+2) * 1;
            $total2 = $no3*0.2;
    
            $no4 = $this->request->getPost('nilai'.''.$no+3) * 1;
            $total3 = $no4*0.4;
    
            $nkt = $total1+$total2+$total3;
         
            
            
            $nktPTModel = new NKTPTModel();
    
            $data=[
                'nilai_nkt' => $nkt,
                'realisasi_nilai' => $nkt,
                'periode'=>$this->request->getPost('periode'),
                'status'=> "sudah realisasi",
                // 'nama_pt' =>$this->request->getPost('nama'),
                // 'nip_pt' =>$this->request->getPost('nip')
    
                // 'nilai'=>$this->request->getPost('pt'),
                // 'tanggal'=>$this->request->getPost('periode'),
                
            ];
    
    
            $nktPTModel->protect(false)->update($id,$data);
    
    
                    
            // $file->move(ROOTPATH . 'public/assets/img/',$nama);
            return redirect()->to('/pj/pengendali/detail_nkt/'.$id);
        }

        //NSKP
        public function Realisasi($id)
        {
            $SasaranPTModel = new SasaranPTModel();
        
            $sasaranPT = $SasaranPTModel->find($id);
         
            $data= [
                'sasaranPT'=>$sasaranPT
            ];
            return view ("pj/pengendali/realisasi",$data);
        }

        public function DetailNSKP_Pengendali($id)
        {
            $SasaranPTModel = new SasaranPTModel();

            $sasaranPT = $SasaranPTModel->find($id);
         
            $data= [
                'sasaranPT'=>$sasaranPT
            ];
            return view ("pj/pengendali/detail_nskp",$data);
        }

        public function NSKP_Pengendali()
        {
            $SasaranPTModel = new SasaranPTModel();
        
            $sasaranPT = $SasaranPTModel->findAll();
         
            $data= [
                'sasaranPT'=>$sasaranPT
            ];
            return view ("pj/pengendali/nskp",$data);
        }

        public function saveSasaranPT($id)
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
                'kuant3' => 'required',
                'kual3' => 'required',
                'waktu3' => 'required',
                'periode' =>'required',
    
                
            ])){
                return redirect()->to('/pj/pengendali/realisasi/'.$id);
            }

            $sasaranModel = new SasaranPTModel();

            //no1
            $waktuTarget = (int)$this->request->getPost('waktuPT1');
   
            $waktuRealisasi = (int)$this->request->getPost('waktu1');


            //no2
            $waktuTarget2 = (int)$this->request->getPost('waktuPT2');
         
            $waktuRealisasi2 = (int)$this->request->getPost('waktu2');

            //no3
            $waktuTarget3 = (int)$this->request->getPost('waktuPT3');
         
            $waktuRealisasi3 = (int)$this->request->getPost('waktu3');


            
            // var_dump($waktuTarget);

            //RUmus Persentase1
            $totalPersentase = 0;
            
            $persenWaktu = 100 - (($waktuTarget / $waktuRealisasi)* 100) ;
    

            if($persenWaktu > 24)
            {
                $totalPersentase = ((((1.76 * $waktuTarget / $waktuRealisasi) / $waktuTarget)*100)-100);
                

            }
            else if($persenWaktu < 24)
            {
                $totalPersentase = 1.76 * $waktuTarget / $waktuRealisasi * 100;
                
            }

            //Rumus persentase2
            $totalPersentase2 = 0;

            $persenWaktu2 = 100 - (($waktuTarget2 / $waktuRealisasi2)* 100) ;

            
            if($persenWaktu2 > 24)
            {
                $totalPersentase2 = ((((1.76 * $waktuTarget2 / $waktuRealisasi2) / $waktuTarget2)*100)-100);
            }
            else if($persenWaktu2 < 24)
            {
                $totalPersentase2 = 1.76 * $waktuTarget2 / $waktuRealisasi2 * 100;
            }

            //Rumus persentase3
            $totalPersentase3 = 0;

            $persenWaktu3 = 100 - (($waktuTarget3 / $waktuRealisasi3)* 100) ;

            
            if($persenWaktu3 > 24)
            {
                $totalPersentase3 = ((((1.76 * $waktuTarget3 / $waktuRealisasi3) / $waktuTarget3)*100)-100);
            }
            else if($persenWaktu3 < 24)
            {
                $totalPersentase3 = 1.76 * $waktuTarget3 / $waktuRealisasi3 * 100;
            }


            
            
            //Rumus Perhitungan no 1
            $perhitungan1 = $waktuTarget + $waktuRealisasi + $totalPersentase;
            
            //Rumus Perhitungan no 2
            $perhitungan2 = $waktuTarget2 + $waktuRealisasi2 + $totalPersentase2;
            
            //Rumus Perhitungan no 3
            $perhitungan3 = $waktuTarget3 + $waktuRealisasi3 + $totalPersentase3;



            //Kotak merah
            $nilaiSKP1 = $perhitungan1/3;
            $nilaiSKP2 = $perhitungan2/3;
            $nilaiSKP3 = $perhitungan3/3;



            //Kotak hijau
            $TotalnilaiSKP = $nilaiSKP1 + $nilaiSKP2 + $nilaiSKP3  /3;

     
            $data1=[
                'realisasi_kuantitas' => $this->request->getPost('kuant1'),
                'realisasi_kualitas'=> $this->request->getPost('kual1'),
                'realisasi_waktu'=>$this->request->getPost('waktu1'),
    
                'realisasi_kuantitas2' => $this->request->getPost('kuant2'),
                'realisasi_kualitas2'=> $this->request->getPost('kual2'),
                'realisasi_waktu2'=>$this->request->getPost('waktu2'),
    
                'realisasi_kuantitas3' => $this->request->getPost('kuant3'),
                'realisasi_kualitas3'=> $this->request->getPost('kual3'),
                'realisasi_waktu3'=>$this->request->getPost('waktu3'),
    
                'periode_pt'=>$this->request->getPost('periode'),
                // 'catatan_pt'=>$this->request->getPost('catatan'),
                'status'=>"sudah",
                'nilai'=>$nilaiSKP1,
                'nilai2'=>$nilaiSKP2,
                'nilai3'=>$nilaiSKP3,

                'nilai_skp'=>$TotalnilaiSKP,
                // 'nilai'=>$this->request->getPost('pt'),
                // 'tanggal'=>$this->request->getPost('periode'),
                
            ];
    
            // var_dump($waktuTarget);
            // var_dump($waktuRealisasi);
            // var_dump( $totalPersentase);
            // var_dump($perhitungan1);

           
            // var_dump($nilaiSKP1);
            // var_dump($nilaiSKP2);
    
            $sasaranModel->protect(false)
            ->update($id,$data1);
    
                    
  
            return redirect()->to('/pj/pengendali/detail_nskp/'.$id);
        }

        public function approveSasaranPT($id)
        {
            // $file = $this->request->getFile('foto');
            // $nama = $file ->getRandomName();
            if(!$this->validate([
                'kuant' => 'required',
                'kual' => 'required',
                'waktu' => 'required',
                'kuant2' => 'required',
                'kual2' => 'required',
                'waktu2' => 'required',
                'kuant3' => 'required',
                'kual3' => 'required',
                'waktu3' => 'required',
    
    
                
            ])){
                return redirect()->to('/pj/pengendali/realisasi/'.$id);
            }

            $sasaranModel = new SasaranPTModel();

            //no1
            $waktuTarget = (int)$this->request->getPost('waktu');
   
            $waktuRealisasi = (int)$this->request->getPost('waktu');


            //no2
            $waktuTarget2 = (int)$this->request->getPost('waktu2');
         
            $waktuRealisasi2 = (int)$this->request->getPost('waktu2');

            //no3
            $waktuTarget3 = (int)$this->request->getPost('waktu3');
         
            $waktuRealisasi3 = (int)$this->request->getPost('waktu3');


            
            // var_dump($waktuTarget);

            //RUmus Persentase1
            $totalPersentase = 0;
            
            $persenWaktu = 100 - (($waktuTarget / $waktuRealisasi)* 100) ;
    

            if($persenWaktu > 24)
            {
                $totalPersentase = ((((1.76 * $waktuTarget / $waktuRealisasi) / $waktuTarget)*100)-100);
                

            }
            else if($persenWaktu < 24)
            {
                $totalPersentase = 1.76 * $waktuTarget / $waktuRealisasi * 100;
                
            }

            //Rumus persentase2
            $totalPersentase2 = 0;

            $persenWaktu2 = 100 - (($waktuTarget2 / $waktuRealisasi2)* 100) ;

            
            if($persenWaktu2 > 24)
            {
                $totalPersentase2 = ((((1.76 * $waktuTarget2 / $waktuRealisasi2) / $waktuTarget2)*100)-100);
            }
            else if($persenWaktu2 < 24)
            {
                $totalPersentase2 = 1.76 * $waktuTarget2 / $waktuRealisasi2 * 100;
            }

            //Rumus persentase3
            $totalPersentase3 = 0;

            $persenWaktu3 = 100 - (($waktuTarget3 / $waktuRealisasi3)* 100) ;

            
            if($persenWaktu3 > 24)
            {
                $totalPersentase3 = ((((1.76 * $waktuTarget3 / $waktuRealisasi3) / $waktuTarget3)*100)-100);
            }
            else if($persenWaktu3 < 24)
            {
                $totalPersentase3 = 1.76 * $waktuTarget3 / $waktuRealisasi3 * 100;
            }


            
            
            //Rumus Perhitungan no 1
            $perhitungan1 = $waktuTarget + $waktuRealisasi + $totalPersentase;
            
            //Rumus Perhitungan no 2
            $perhitungan2 = $waktuTarget2 + $waktuRealisasi2 + $totalPersentase2;
            
            //Rumus Perhitungan no 3
            $perhitungan3 = $waktuTarget3 + $waktuRealisasi3 + $totalPersentase3;



            //Kotak merah
            $nilaiSKP1 = $perhitungan1/3;
            $nilaiSKP2 = $perhitungan2/3;
            $nilaiSKP3 = $perhitungan3/3;



            //Kotak hijau
            $TotalnilaiSKP = $nilaiSKP1 + $nilaiSKP2 + $nilaiSKP3  /3;

     
            $data1=[
                'realisasi_kuantitas' => $this->request->getPost('kuant'),
                'realisasi_kualitas'=> $this->request->getPost('kual'),
                'realisasi_waktu'=>$this->request->getPost('waktu'),
    
                'realisasi_kuantitas2' => $this->request->getPost('kuant2'),
                'realisasi_kualitas2'=> $this->request->getPost('kual2'),
                'realisasi_waktu2'=>$this->request->getPost('waktu2'),
    
                'realisasi_kuantitas3' => $this->request->getPost('kuant3'),
                'realisasi_kualitas3'=> $this->request->getPost('kual3'),
                'realisasi_waktu3'=>$this->request->getPost('waktu3'),
    
                'periode_pt'=>$this->request->getPost('periode'),
                // 'catatan_pt'=>$this->request->getPost('catatan'),
                'status'=>"sudah",
                'nilai'=>$nilaiSKP1,
                'nilai2'=>$nilaiSKP2,
                'nilai3'=>$nilaiSKP3,

                'nilai_skp'=>$TotalnilaiSKP,
                // 'nilai'=>$this->request->getPost('pt'),
                // 'tanggal'=>$this->request->getPost('periode'),
                
            ];
    
            // var_dump($waktuTarget);
            // var_dump($waktuRealisasi);
            // var_dump( $totalPersentase);
            // var_dump($perhitungan1);

           
            // var_dump($nilaiSKP1);
            // var_dump($nilaiSKP2);
    
            $sasaranModel->protect(false)
            ->update($id,$data1);
    
                    
  
            return redirect()->to('/pj/pengendali/detail_nskp/'.$id);
        }

        //Tanggapan
        public function DoTanggapan($id)
        {
            $bimbinganModel = new Bimbingan();
            $bimbingan = $bimbinganModel->find($id);
    
            $data=[
                'bimbingan' => $bimbingan
            ];


            $bimbinganModel = new Bimbingan();
            return view ("pj/pengendali/do_tanggapan",$data);
        }

        public function SaveTanggapan($id)
        {

            if(!$this->validate([
                'tanggapan1' => 'required',
                'tanggapan2' => 'required',
                
            ])){
                return redirect()->to('/pj/pengendali/do_tanggapan/'.$id);
            }

            $bimbinganModel = new Bimbingan();

            $data2=[
                'tanggapan_satu' => $this->request->getPost('tanggapan1'),
                'tanggapan_dua'=> $this->request->getPost('tanggapan2'),
                // 'nama'=>$this->request->getPost('nama'),
                // 'periode'=>$this->request->getPost('periode'),
                // 'nip' => $this->request->getPost('nip'),
                // 'bagian' =>"at",
                'status' => "sudah ditanggapi",
    
                // 'nilai'=>$this->request->getPost('pt'),
                // 'tanggal'=>$this->request->getPost('periode'),
                
            ];
    
    
            $bimbinganModel->protect(false)
            ->update($id,$data2);

            return redirect()->to("pj/pengendali/tanggapan_bimbingan");
          
        }

        //Bimbingan
        public function TanggapanBimbingan()
        {
            $bimbinganModel = new Bimbingan();
            $bimbingan = $bimbinganModel->getPT();
    
            $data=[
                'bimbingan' => $bimbingan
            ];
            return view ("pj/pengendali/tanggapanbimbingan",$data);
        }


}
