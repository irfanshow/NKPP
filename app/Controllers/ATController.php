<?php

namespace App\Controllers;

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
        return view('at/nkp');
    }

    public function CreateNKP()
    {
        return view('at/create_nkp');
    }

    public function DetailNKP()
    {
        return view('at/detail_nkp');
    }

    public function EditNKP()
    {
        return view('at/edit_nkp');
    }

    //NKT
    public function NKTVIew()
    {
        return view('at/nkt');
    }

    public function CreateNKT()
    {
        return view('at/create_nkt');
    }

    public function DetailNKT()
    {
        return view('at/detail_nkt');
    }

    public function EditNKT()
    {
        return view('at/edit_nkt');
    }

    //Sasaran
    public function SasaranKinerjaVIew()
    {
        return view('at/sasarankinerja');
    }

    public function CreateSasaran()
    {
        return view('at/create_sasaran');
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
