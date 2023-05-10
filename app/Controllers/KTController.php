<?php

namespace App\Controllers;

use App\Models\SasaranKTModel;
use App\Controllers\BaseController;

class KTController extends BaseController
{
    public function index()
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
        public function Realisasi()
        {
            return view ("kt/anggota/realisasi");
        }

        //NKP
        public function DetailNKP_Anggota()
        {
            return view ("kt/anggota/detail_nkp");
        }

        public function NKP_Anggota()
        {
            return view ("kt/anggota/nkp_at");
        }

        public function RealisasiNKP()
        {
            return view ("kt/anggota/realisasi_nkp");
        }

        //NKT
        public function DetailNKT_Anggota()
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
        public function DetailNSKP_Anggota()
        {
            return view ("kt/anggota/detail_nskp");
        }

        public function NSKP_Anggota()
        {
            return view ("kt/anggota/nskp");
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
