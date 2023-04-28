<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class PJController extends BaseController
{
    public function index()
    {
        return view ("pj/index");
    }

    public function Profile()
    {
        return view ("pj/profile");
    }

    //KETUA
    //NKP
    public function DetailNKP()
    {
        return view ("pj/ketua/detail_nkp");
    }

    public function ReviewNKP()
    {
        return view ("pj/ketua/review_nkp");
    }

    //NKT
    public function DetailNKT()
    {
        return view ("pj/ketua/detail_nkt");
    }

    public function ReviewNKT()
    {
        return view ("pj/ketua/review_nkt");
    }

    //Sasaran
    public function DetailSasaran()
    {
        return view ("pj/ketua/detail_sasaran");
    }

    public function ReviewSasaran()
    {
        return view ("pj/ketua/review_sasaran");
    }

    //Do
    public function DoReviewNKP()
    {
        return view ("pj/ketua/do_review_nkp");
    }

    public function DoReviewNKT()
    {
        return view ("pj/ketua/do_review_nkt");
    }

    public function DoReviewSasaran()
    {
        return view ("pj/ketua/do_review_sasaran");
    }

    //Pengendali
    public function Realisasi()
        {
            return view ("pj/pengendali/realisasi");
        }

        //NKP
        public function DetailNKP_Pengendali()
        {
            return view ("pj/pengendali/detail_nkp");
        }

        public function NKP_Pengendali()
        {
            return view ("pj/pengendali/nkp");
        }

        public function RealisasiNKP()
        {
            return view ("pj/pengendali/realisasi_nkp");
        }

        //NKT
        public function DetailNKT_Pengendali()
        {
            return view ("pj/pengendali/detail_nkt");
        }

        public function NKT_Pengendali()
        {
            return view ("pj/pengendali/nkt");
        }

        public function RealisasiNKT()
        {
            return view ("pj/pengendali/realisasi_nkt");
        }

        //NSKP
        public function DetailNSKP_Pengendali()
        {
            return view ("pj/pengendali/detail_nskp");
        }

        public function NSKP_Pengendali()
        {
            return view ("pj/pengendali/nskp");
        }

        //Tanggapan
        public function DoTanggapan()
        {
            return view ("pj/pengendali/do_tanggapan");
        }

        //Bimbingan
        public function TanggapanBimbingan()
        {
            return view ("pj/pengendali/tanggapanbimbingan");
        }


}
