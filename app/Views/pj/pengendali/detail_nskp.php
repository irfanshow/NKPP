<?= $this -> extend('pjTemplate')?>
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
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Penanggung Jawab</span>
                                <img class="img-profile rounded-circle" src='../../img/undraw_profile.svg'>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <h3 class="px-2 mb-0 text-gray-800">Data Sasaran Kinerja Pengendali Teknis </h3>

                    <!-- Page Heading -->
                    <div class="row">
                        <div class="card-body">
                            <table style="text-align: center;" id="example4" class="table table-bordered table-hover">
                                <th style="width: 1100px;">Periode :</th>
                            </table>
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                    <th style="width: 30px;">No.</th>
                                    <th style="width: 200px;">Kegiatan Tugas Jabatan</th>
                                    <th style="width: 60px;">Kuantitas</th>
                                    <th style="width: 60px;">Kualitas</th>
                                    <th style="width: 60px;">Waktu</th>
                                    <th style="width: 60px;">Nilai</th>
                                    <th style="width: 60px;">Realisasi Kuantitas</th>
                                    <th style="width: 60px;">Realisasi Kualitas</th>
                                    <th style="width: 60px;">Realisasi Waktu</th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th>1. </th>
                                        <th>Menyusun dan Melaksanakn PKP</th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                    <tr>
                                        <th>2. </th>
                                        <th>Menyusun KKP sesuai dengan PKP </th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </tbody>
                            </table>
                            <table id="example4" class="table table-bordered table-hover">
                                <th style="width: 1100px;">Catatan :</th>
                            </table>
                            <table id="example1" class="table table-bordered table-hover">
                                <tr style="text-align: center;">
                                    <th style="width: 680px;">Nilai capaian SKP</th>
                                    <th style="width: 83px;"></th>
                                    <th style="max-width: 38px;">
                                        <a href="/pj/pengendali/realisasi" class="btn btn-danger">
                                            <span class="text">Denail</span>
                                        </a>
                                        <a href="#" class="btn btn-success" style=" width: 100px;">
                                            <span class="text">Approved</span>
                                        </a>
                                    </th>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- Scroll to Top Button-->
                <a class="scroll-to-top rounded" href="#page-top">
                    <i class="fas fa-angle-up"></i>
                </a>

<?= $this -> endSection() ?>