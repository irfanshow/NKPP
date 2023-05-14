<?= $this -> extend('ptTemplate')?>
<?= $this-> section('contentAdmin')?>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form class="d-none d-sm-inline-block form-inline mr-auto my-2 my-md-0  navbar">
                        <h4 class="text-gray-800">Penilaian Kinerja Pelaksanaan Pemeriksa</h4>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Pengendali Teknis</span>
                                <img class="img-profile rounded-circle" src='<?php echo base_url(); ?>/img/undraw_profile.svg'>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard Pengendali Teknis</h1>
                    </div>

                    <!-- Profile -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Profile</h6>
                        </div>
                        <div class="card-body">
                            <div class="text-center">
                                <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;" src="<?php echo base_url(); ?>/img/undraw_posting_photo.svg" alt="...">
                            </div>
                            <div class="profile">
                                <div class="row">
                                    <div class="col-md-6">
                                    <p><strong>Nama :</strong> <?=$pt['nama_pt'];?></p>
                                        <p><strong>NIP :</strong> <?=$pt['nip_pt'];?></p>
                                        <p><strong>Unit Kerja :</strong> <?=$pt['unit_kerja_pt'];?></p>
                                        <p><strong>Email :</strong> <?=$pt['email_pt'];?></p>
                                    </div>
                                    <div class="col-md-6">
                                        <p><strong>Periode :</strong> <?=$pt['periode_pt'];?></p>
                                        <p><strong>No. Surat Dinas :</strong> <?=$pt['no_surat_dinas_pt'];?></p>
                                        <p><strong>Nama Penanggung Jawab :</strong> <?=$_SESSION['pj'];?></p>
                                    </div>
                                    <div class="px-2 card-body">
                                        <a href="/pt/profile/<?php echo $_SESSION['id'];?>" class="btn btn-primary">Ubah Profile</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Scroll to Top Button-->
            <a class="scroll-to-top rounded" href="#page-top">
                <i class="fas fa-angle-up"></i>
            </a>

<?= $this -> endSection() ?>