<?php

namespace App\Controllers;

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
