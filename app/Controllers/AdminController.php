<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class AdminController extends BaseController
{
    public function index()
    {
        return view('admin/index');
    }

    //AT
    public function ATview()
    {
        return view('admin/at');
    }

    public function ATcreate()
    {
        return view('admin/create_at');
    }

    //PJ
    public function PJview()
    {
        return view('admin/pj');
    }

    public function PJcreate()
    {
        return view('admin/create_pj');
    }

    //PT
    public function PTview()
    {
        return view('admin/pt');
    }

    public function PTcreate()
    {
        return view('admin/create_pt');
    }

    //KT
    public function KTview()
    {
        return view('admin/kt');
    }

    public function KTcreate()
    {
        return view('admin/create_kt');
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
