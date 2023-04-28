<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class PTController extends BaseController
{
    public function index()
    {
        return view('pt/bimbingan');
    }

        //BImbingan
        public function BimbinganView()
        {
            return view('pt/bimbingan');
        }
    
        public function CreateBimbingan()
        {
            return view('pt/create_bimbingan');
        }
    
        public function DetailBimbingan()
        {
            return view('pt/detail_bimbingan');
        }
    
        public function EditBimbingan()
        {
            return view('pt/edit_bimbingan');
        }
    
        //NKP
        public function NKPView()
        {
            return view('pt/nkp');
        }
    
        public function CreateNKP()
        {
            return view('pt/create_nkp');
        }
    
        public function DetailNKP()
        {
            return view('pt/detail_nkp');
        }
    
        public function EditNKP()
        {
            return view('pt/edit_nkp');
        }
    
        //NKT
        public function NKTVIew()
        {
            return view('pt/nkt');
        }
    
        public function CreateNKT()
        {
            return view('pt/create_nkt');
        }
    
        public function DetailNKT()
        {
            return view('pt/detail_nkt');
        }
    
        public function EditNKT()
        {
            return view('pt/edit_nkt');
        }
    
        //Sasaran
        public function SasaranKinerjaVIew()
        {
            return view('pt/sasarankinerja');
        }
    
        public function CreateSasaran()
        {
            return view('pt/create_sasaran');
        }
    
        public function DetailSasaran()
        {
            return view('pt/detail_sasaran');
        }
    
        public function EditSasaran()
        {
            return view('pt/edit_sasaran');
        }
    
        //Profile
        public function ProfileVIew()
        {
            return view('pt/profile');
        }
    
        //NKPP
        public function NKPPVIew()
        {
            return view('pt/nkpp');
        }
    
        public function DetailNKPP()
        {
            return view('pt/detail_nkpp');
        }

        //Anggota
          //NKP
        public function DetailNKPAnggota()
        {
            return view ("pt/anggota/detail_nkp");
        }

        public function ReviewNKP()
        {
            return view ("pt/anggota/review_nkp");
        }

        //NKT
        public function DetailNKTAnggota()
        {
            return view ("pt/anggota/detail_nkt");
        }

        public function ReviewNKT()
        {
            return view ("pt/anggota/review_nkt");
        }

        //Sasaran
        public function DetailSasaranAnggota()
        {
            return view ("pt/anggota/detail_sasaran");
        }

        public function ReviewSasaran()
        {
            return view ("pt/anggota/review_sasaran");
        }

        //Do
        public function DoReviewNKP()
        {
            return view ("pt/anggota/do_review_nkp");
        }

        public function DoReviewNKT()
        {
            return view ("pt/anggota/do_review_nkt");
        }

        public function DoReviewSasaran()
        {
            return view ("pt/anggota/do_review_sasaran");
        }

        //KEtua
        public function Realisasi()
        {
            return view ("pt/ketua/realisasi");
        }

        //NKP
        public function DetailNKP_Pengendali()
        {
            return view ("pt/ketua/detail_nkp");
        }

        public function NKP_Pengendali()
        {
            return view ("pt/ketua/nkp");
        }

        public function RealisasiNKP()
        {
            return view ("pt/ketua/realisasi_nkp");
        }

        //NKT
        public function DetailNKT_Pengendali()
        {
            return view ("pt/ketua/detail_nkt");
        }

        public function NKT_Pengendali()
        {
            return view ("pt/ketua/nkt");
        }

        public function RealisasiNKT()
        {
            return view ("pt/ketua/realisasi_nkt");
        }

        //NSKP
        public function DetailNSKP_Pengendali()
        {
            return view ("pt/ketua/detail_nskp");
        }

        public function NSKP_Pengendali()
        {
            return view ("pt/ketua/nskp");
        }

        //Tanggapan
        public function DoTanggapan()
        {
            return view ("pt/ketua/do_tanggapan");
        }

        //Bimbingan
        public function TanggapanBimbingan()
        {
            return view ("pt/ketua/tanggapanbimbingan");
        }




}
