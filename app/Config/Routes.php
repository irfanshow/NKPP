<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->get('/login', 'Home::login');

//Admin
$routes->get('/admin/index', 'AdminController::index');
    //AT
    $routes->get('/admin/at', 'AdminController::ATview');
    $routes->get('/admin/create_at', 'AdminController::ATcreate');

    //KT
    $routes->get('/admin/kt', 'AdminController::KTview');
    $routes->get('/admin/create_kt', 'AdminController::KTcreate');

    //NKP
    $routes->get('/admin/nkp', 'AdminController::NKPview');
    $routes->get('/admin/create_nkp', 'AdminController::NKPcreate');

    // NKT
    $routes->get('/admin/nkt', 'AdminController::NKTview');
    $routes->get('/admin/create_nkt', 'AdminController::NKTcreate');

    //PJ
    $routes->get('/admin/pj', 'AdminController::PJview');
    $routes->get('/admin/create_pj', 'AdminController::PJcreate');

    //PT
    $routes->get('/admin/pt', 'AdminController::PTview');
    $routes->get('/admin/create_pt', 'AdminController::PTcreate');

//AT
    $routes->get('/at/index', 'ATController::index');

    $routes->get('/at/bimbingan', 'ATController::BimbinganView');
    $routes->get('/at/create_bimbingan', 'ATController::CreateBimbingan');
    $routes->get('/at/edit_bimbingan', 'ATController::EditBimbingan');
    $routes->get('/at/detail_bimbingan', 'ATController::DetailBimbingan');

    $routes->get('/at/nkp', 'ATController::NKPView');
    $routes->get('/at/create_nkp', 'ATController::CreateNKP');
    $routes->get('/at/edit_nkp', 'ATController::EditNKP');
    $routes->get('/at/detail_nkp', 'ATController::DetailNKP');

    $routes->get('/at/nkt', 'ATController::NKTView');
    $routes->get('/at/create_nkt', 'ATController::CreateNKT');
    $routes->get('/at/edit_nkt', 'ATController::EditNKT');
    $routes->get('/at/detail_nkt', 'ATController::DetailNKT');

    $routes->get('/at/sasarankinerja', 'ATController::SasaranKinerjaView');
    $routes->get('/at/create_sasaran', 'ATController::CreateSasaran');
    $routes->get('/at/edit_sasaran', 'ATController::EditSasaran');
    $routes->get('/at/detail_sasaran', 'ATController::DetailSasaran');

    $routes->get('/at/profile', 'ATController::ProfileView');

    $routes->get('/at/nkpp', 'ATController::NKPPView');
    $routes->get('/at/detail_nkpp', 'ATController::DetailNKPP');

//KT
    $routes->get('/kt/index', 'KTController::index');

    $routes->get('/kt/bimbingan', 'KTController::BimbinganView');
    $routes->get('/kt/create_bimbingan', 'KTController::CreateBimbingan');
    $routes->get('/kt/edit_bimbingan', 'KTController::EditBimbingan');
    $routes->get('/kt/detail_bimbingan', 'KTController::DetailBimbingan');

    $routes->get('/kt/nkp', 'KTController::NKPView');
    $routes->get('/kt/create_nkp', 'KTController::CreateNKP');
    $routes->get('/kt/edit_nkp', 'KTController::EditNKP');
    $routes->get('/kt/detail_nkp', 'KTController::DetailNKP');

    $routes->get('/kt/nkt', 'KTController::NKTView');
    $routes->get('/kt/create_nkt', 'KTController::CreateNKT');
    $routes->get('/kt/edit_nkt', 'KTController::EditNKT');
    $routes->get('/kt/detail_nkt', 'KTController::DetailNKT');

    $routes->get('/kt/sasarankinerja', 'KTController::SasaranKinerjaView');
    $routes->get('/kt/create_sasaran', 'KTController::CreateSasaran');
    $routes->get('/kt/edit_sasaran', 'KTController::EditSasaran');
    $routes->get('/kt/detail_sasaran', 'KTController::DetailSasaran');

    $routes->get('/kt/profile', 'KTController::ProfileView');

    $routes->get('/kt/nkpp', 'KTController::NKPPView');
    $routes->get('/kt/detail_nkpp', 'KTController::DetailNKPP');


    //ANGGOTA
    $routes->get('/kt/anggota/realisasi', 'KTController::Realisasi');

    //NKP
    $routes->get('/kt/anggota/nkp_at', 'KTController::NKP_Anggota');
    $routes->get('/kt/anggota/detail_nkp', 'KTController::DetailNKP_Anggota');
    $routes->get('/kt/anggota/realisasi_nkp', 'KTController::RealisasiNKP');

    //NKT
    $routes->get('/kt/anggota/nkt_at', 'KTController::NKP_Anggota');
    $routes->get('/kt/anggota/detail_nkt', 'KTController::DetailNKT_Anggota');
    $routes->get('/kt/anggota/realisasi_nkt', 'KTController::RealisasiNKT');

    //NSKP
    $routes->get('/kt/anggota/nskp', 'KTController::NSKP_Anggota');
    $routes->get('/kt/anggota/detail_nskp', 'KTController::DetailNSKP_Anggota');

    //Tanggapan
    $routes->get('/kt/anggota/do_tanggapan', 'KTController::DoTanggapan');
 
    //BImbingan
    $routes->get('/kt/anggota/tanggapan_bimbingan', 'KTController::TanggapanBimbingan');
  
//PJ
    $routes->get('/pj/index', 'PJController::index');
    $routes->get('/pj/profile', 'PJController::Profile');

        //Ketua
            //NKP
            $routes->get('/pj/ketua/detail_nkp', 'PJController::DetailNKP');
            $routes->get('/pj/ketua/review_nkp', 'PJController::ReviewNKP');

            //NKT
            $routes->get('/pj/ketua/detail_nkt', 'PJController::DetailNKT');
            $routes->get('/pj/ketua/review_nkt', 'PJController::ReviewNKT');

            //Sasaran
            $routes->get('/pj/ketua/detail_sasaran', 'PJController::DetailSasaran');
            $routes->get('/pj/ketua/review_sasaran', 'PJController::ReviewSasaran');

            //DO
            $routes->get('/pj/ketua/do_review_nkp', 'PJController::DoReviewNKP');
            $routes->get('/pj/ketua/do_review_nkt', 'PJController::DoReviewNKT');
            $routes->get('/pj/ketua/do_review_sasaran', 'PJController::DoReviewSasaran');
          

        //Pengendali
            $routes->get('/pj/pengendali/realisasi', 'PJController::Realisasi');

            //NKP
            $routes->get('/pj/pengendali/nkp', 'PJController::NKP_Pengendali');
            $routes->get('/pj/pengendali/detail_nkp', 'PJController::DetailNKP_Pengendali');
            $routes->get('/pj/pengendali/realisasi_nkp', 'PJController::RealisasiNKP');

            //NKT
            $routes->get('/pj/pengendali/nkt', 'PJController::NKP_Pengendali');
            $routes->get('/pj/pengendali/detail_nkt', 'PJController::DetailNKT_Pengendali');
            $routes->get('/pj/pengendali/realisasi_nkt', 'PJController::RealisasiNKT');

            //NSKP
            $routes->get('/pj/pengendali/nskp', 'PJController::NSKP_Pengendali');
            $routes->get('/pj/pengendali/detail_nskp', 'PJController::DetailNSKP_Pengendali');

            //Tanggapan
            $routes->get('/pj/pengendali/do_tanggapan', 'PJController::DoTanggapan');
        
            //BImbingan
            $routes->get('/pj/pengendali/tanggapan_bimbingan', 'PJController::TanggapanBimbingan');
  
//PT

$routes->get('/pt/index', 'PTController::index');

$routes->get('/pt/bimbingan', 'PTController::BimbinganView');
$routes->get('/pt/create_bimbingan', 'PTController::CreateBimbingan');
$routes->get('/pt/edit_bimbingan', 'PTController::EditBimbingan');
$routes->get('/pt/detail_bimbingan', 'PTController::DetailBimbingan');

$routes->get('/pt/nkp', 'PTController::NKPView');
$routes->get('/pt/create_nkp', 'PTController::CreateNKP');
$routes->get('/pt/edit_nkp', 'PTController::EditNKP');
$routes->get('/pt/detail_nkp', 'PTController::DetailNKP');

$routes->get('/pt/nkt', 'PTController::NKTView');
$routes->get('/pt/create_nkt', 'PTController::CreateNKT');
$routes->get('/pt/edit_nkt', 'PTController::EditNKT');
$routes->get('/pt/detail_nkt', 'PTController::DetailNKT');

$routes->get('/pt/sasarankinerja', 'PTController::SasaranKinerjaView');
$routes->get('/pt/create_sasaran', 'PTController::CreateSasaran');
$routes->get('/pt/edit_sasaran', 'PTController::EditSasaran');
$routes->get('/pt/detail_sasaran', 'PTController::DetailSasaran');

$routes->get('/pt/profile', 'PTController::ProfileView');

$routes->get('/pt/nkpp', 'PTController::NKPPView');
$routes->get('/pt/detail_nkpp', 'PTController::DetailNKPP');

    //ANGGOTA
        //NKP
        $routes->get('/pt/anggota/detail_nkp', 'PTController::DetailNKPAnggota');
        $routes->get('/pt/anggota/review_nkp', 'PTController::ReviewNKP');

        //NKT
        $routes->get('/pt/anggota/detail_nkt', 'PTController::DetailNKTAnggota');
        $routes->get('/pt/anggota/review_nkt', 'PTController::ReviewNKT');

        //Sasaran
        $routes->get('/pt/anggota/detail_sasaran', 'PTController::DetailSasaranAnggota');
        $routes->get('/pt/anggota/review_sasaran', 'PTController::ReviewSasaran');

        //DO
        $routes->get('/pt/anggota/do_review_nkp', 'PTController::DoReviewNKP');
        $routes->get('/pt/anggota/do_review_nkt', 'PTController::DoReviewNKT');
        $routes->get('/pt/anggota/do_review_sasaran', 'PTController::DoReviewSasaran');

    //KETUA
        $routes->get('/pt/ketua/realisasi', 'PTController::Realisasi');

        //NKP
        $routes->get('/pt/ketua/nkp', 'PTController::NKP_Pengendali');
        $routes->get('/pt/ketua/detail_nkp', 'PTController::DetailNKP_Pengendali');
        $routes->get('/pt/ketua/realisasi_nkp', 'PTController::RealisasiNKP');

        //NKT
        $routes->get('/pt/ketua/nkt', 'PTController::NKP_Pengendali');
        $routes->get('/pt/ketua/detail_nkt', 'PTController::DetailNKT_Pengendali');
        $routes->get('/pt/ketua/realisasi_nkt', 'PTController::RealisasiNKT');

        //NSKP
        $routes->get('/pt/ketua/nskp', 'PTController::NSKP_Pengendali');
        $routes->get('/pt/ketua/detail_nskp', 'PTController::DetailNSKP_Pengendali');

        //Tanggapan
        $routes->get('/pt/ketua/do_tanggapan', 'PTController::DoTanggapan');

        //BImbingan
        $routes->get('/pt/ketua/tanggapan_bimbingan', 'PTController::TanggapanBimbingan');

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
