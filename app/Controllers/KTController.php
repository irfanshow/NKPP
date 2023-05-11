<?php

namespace App\Controllers;

use App\Models\NkpModel;
use App\Models\NKPATModel;
use App\Models\SasaranATModel;
use App\Models\SasaranKTModel;
use App\Controllers\BaseController;

class KTController extends BaseController
{
    public function index($id)
    {

        
        return view ("kt/index");
    }

    //BImbingan
    public function BimbinganView()
    {
        return view('kt/bimbingan');
    }

    public function CreateBimbingan()
    {
        return view('kt/create_bimbingan');
    }

    public function DetailBimbingan()
    {
        return view('kt/detail_bimbingan');
    }

    public function EditBimbingan()
    {
        return view('kt/edit_bimbingan');
    }

    //NKP
    public function NKPView()
    {
        return view('kt/nkp');
    }

    public function CreateNKP()
    {
        return view('kt/create_nkp');
    }

    public function DetailNKP()
    {
        return view('kt/detail_nkp');
    }

    public function EditNKP()
    {
        return view('kt/edit_nkp');
    }

    //NKT
    public function NKTVIew()
    {
        return view('kt/nkt');
    }

    public function CreateNKT()
    {
        return view('kt/create_nkt');
    }

    public function DetailNKT()
    {
        return view('kt/detail_nkt');
    }

    public function EditNKT()
    {
        return view('kt/edit_nkt');
    }

    //Sasaran
    public function SasaranKinerjaVIew()
    {
        return view('kt/sasarankinerja');
    }

    public function CreateSasaran()
    {
        return view('kt/create_sasaran');
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
            'kuant3' => 'required',
            'kual3' => 'required',
            'waktu3' => 'required',
            'kuant4' => 'required',
            'kual4' => 'required',
            'waktu4' => 'required',
            'periode' =>'required',

            
        ])){
            return redirect()->to('/kt/create_sasaran');
        }
        $sasaranModel = new SasaranKTModel();
        $data1=[
            'kuantitas' => $this->request->getPost('kuant1'),
            'kualitas'=> $this->request->getPost('kual1'),
            'waktu'=>$this->request->getPost('waktu1'),
            'periode_kt'=>$this->request->getPost('periode'),
            'catatan_kt'=>$this->request->getPost('catatan'),
            'status'=>"belum",
            // 'nilai'=>$this->request->getPost('pt'),
            // 'tanggal'=>$this->request->getPost('periode'),
            
        ];

        $data2=[
            'kuantitas' => $this->request->getPost('kuant2'),
            'kualitas'=> $this->request->getPost('kual2'),
            'waktu'=>$this->request->getPost('waktu2'),
            'periode_kt'=>$this->request->getPost('periode'),
            'catatan_kt'=>$this->request->getPost('catatan'),
            'status'=>"belum",
            
        ];

        $data3=[
            'kuantitas' => $this->request->getPost('kuant3'),
            'kualitas'=> $this->request->getPost('kual3'),
            'waktu'=>$this->request->getPost('waktu3'),
            'periode_kt'=>$this->request->getPost('periode'),
            'catatan_kt'=>$this->request->getPost('catatan'),
            'status'=>"belum",
            
        ];

        $data4=[
            'kuantitas' => $this->request->getPost('kuant4'),
            'kualitas'=> $this->request->getPost('kual4'),
            'waktu'=>$this->request->getPost('waktu4'),
            'periode_kt'=>$this->request->getPost('periode'),
            'catatan_kt'=>$this->request->getPost('catatan'),
            'status'=>"belum",
            
        ];

        $sasaranModel->protect(false)
        ->save($data1);

        $sasaranModel->protect(false)
        ->save($data2);

        $sasaranModel->protect(false)
        ->save($data3);

        $sasaranModel->protect(false)
        ->save($data4);
                
        // $file->move(ROOTPATH . 'public/assets/img/',$nama);
        return redirect()->to('/kt/sasarankinerja');
    }

    public function DetailSasaran()
    {
        return view('kt/detail_sasaran');
    }

    public function EditSasaran()
    {
        return view('kt/edit_sasaran');
    }

    //Profile
    public function ProfileVIew()
    {
        return view('kt/profile');
    }

    //NKPP
    public function NKPPVIew()
    {
        return view('kt/nkpp');
    }

    public function DetailNKPP()
    {
        return view('kt/detail_nkpp');
    }

        //ANGGOTA


        //NKP
        public function DetailNKP_Anggota($id)
        {
            $nkpATModel = new NKPATModel();
            $nkp = $nkpATModel->find($id);
            $nkpModel = new NkpModel();
            $soal = $nkpModel->getAT();
            $data= [
                'nkp'=>$nkp,
                'soal'=>$soal
    
            ];
            return view ("kt/anggota/detail_nkp",$data);
        }

        public function NKP_Anggota()
        {
            $nkpATModel = new NKPATModel();
            $nkpAT = $nkpATModel->findAll();
         
            $data= [
                'nkpAT'=>$nkpAT
            ];
            return view ("kt/anggota/nkp_at",$data);
        }

        public function RealisasiNKP()
        {
            
            return view ("kt/anggota/realisasi_nkp");
        }

        //NKT
        public function DetailNKT_Anggota($id)
        {
            return view ("kt/anggota/detail_nkt");
        }

        public function NKT_Anggota()
        {
            return view ("kt/anggota/nkt_at");
        }

        public function RealisasiNKT()
        {
            return view ("kt/anggota/realisasi_nkt");
        }

        //NSKP

        public function Realisasi($id)
        {
            $SasaranATModel = new SasaranATModel();
        
            $sasaranAT = $SasaranATModel->find($id);
         
            $data= [
                'sasaranAT'=>$sasaranAT
            ];
            return view ("kt/anggota/realisasi",$data);
        }

        public function saveSasaranAT($id)
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
                'periode' =>'required',
    
                
            ])){
                return redirect()->to('/kt/anggota/realisasi/'.$id);
            }

            $sasaranModel = new SasaranATModel();

            //no1
            $waktuTarget = (int)$this->request->getPost('waktuAT1');
   
            $waktuRealisasi = (int)$this->request->getPost('waktu');

            //no2
            $waktuTarget2 = (int)$this->request->getPost('waktuAT2');
         
            $waktuRealisasi2 = (int)$this->request->getPost('waktu2');
            
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
                $totalPersentase2 = ((((1.76 * $waktuTarget2 / $waktuRealisasi) / $waktuTarget2)*100)-100);
            }
            else if($persenWaktu2 < 24)
            {
                $totalPersentase2 = 1.76 * $waktuTarget2 / $waktuRealisasi2 * 100;
            }
            
            //Rumus Perhitungan no 1
            $perhitungan1 = $waktuTarget + $waktuRealisasi + $totalPersentase;
            
            //Rumus Perhitungan no 2
            $perhitungan2 = $waktuTarget2 + $waktuRealisasi2 + $totalPersentase2;

            //Kotak merah
            $nilaiSKP1 = $perhitungan1/3;
            $nilaiSKP2 = $perhitungan2/3;

            // var_dump($perhitungan1);
            // var_dump($nilaiSKP1);
            // var_dump($nilaiSKP2);



            //Kotak hijau
            $TotalnilaiSKP = $nilaiSKP1 + $nilaiSKP2 /2;
           

            $data1=[
                'realisasi_kuantitas' => $this->request->getPost('kuant'),
                'realisasi_kualitas'=> $this->request->getPost('kual'),
                'realisasi_waktu'=>$this->request->getPost('waktu'),
                'realisasi_kuantitas2' => $this->request->getPost('kuant2'),
                'realisasi_kualitas2'=> $this->request->getPost('kual2'),
                'realisasi_waktu2'=>$this->request->getPost('waktu2'),
                'periode_at'=>$this->request->getPost('periode'),
                'status'=>"sudah",
                'nilai'=>$nilaiSKP1,
                'nilai2'=>$nilaiSKP2,
                'nilai_skp'=>$TotalnilaiSKP,
                'realisasi_nilai_at'=>$TotalnilaiSKP,
                // 'nilai'=>$this->request->getPost('pt'),
                // 'tanggal'=>$this->request->getPost('periode'),
                
            ];
    
    
            $sasaranModel->protect(false)
            ->update($id,$data1);
            
                    
            // $file->move(ROOTPATH . 'public/assets/img/',$nama);
            return redirect()->to('/kt/anggota/detail_nskp/'.$id);
        }

        public function DetailNSKP_Anggota($id)
        {
            $SasaranATModel = new SasaranATModel();

            $sasaranAT = $SasaranATModel->find($id);
         
            $data= [
                'sasaranAT'=>$sasaranAT
            ];

 
            return view ("kt/anggota/detail_nskp",$data);
        }

        public function NSKP_Anggota()
        {
            $SasaranATModel = new SasaranATModel();
        
            $sasaranAT = $SasaranATModel->findAll();
         
            $data= [
                'sasaranAT'=>$sasaranAT
            ];
            return view ("kt/anggota/nskp",$data);
        }

        //Tanggapan
        public function DoTanggapan()
        {
            return view ("kt/anggota/do_tanggapan");
        }

        //Bimbingan
        public function TanggapanBimbingan()
        {
            return view ("kt/anggota/tanggapanbimbingan");
        }


}
