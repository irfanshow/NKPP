<?= $this -> extend('ktTemplate')?>
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
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Ketua Tim</span>
                                <img class="img-profile rounded-circle" src='../img/undraw_profile.svg'>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <h3 class="px-2 mb-0 text-gray-800">Nilai NKT</h3>

                    <!-- Page Heading -->
                    <div class="row">
                        <div class="card-body">
                            <a href="/kt/create_nkt" class="btn btn-primary mb-3">Tambah NKT</a>
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Tanggal Pengisian</th>
                                        <th>Periode</th>
                                        <th>Status</th>
                                        <th>Realisasi Nilai</th>
                                        <th>Review Nilai</th>
                                        <th>Nilai Kompetensi Teknis</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php foreach ($nktKT as $no=>$nktKT):?>
                    <tr>
                        <td><?php echo $no+1?></td>
                        <td><?php echo $nktKT['tanggal'];?></td>
                        <td><?php echo $nktKT['periode']; ?></td>
                        <td><?php echo $nktKT['status']; ?></td>
                        <td><?php echo $nktKT['realisasi_nilai']; ?></td>
                        <td><?php echo $nktKT['review_nilai']; ?></td>
                        <td><?php echo $nktKT['nilai']; ?></td>

                        
                        <th>
                            <a href="/kt/detail_nkt/<?= $nktKT['id_nkt_kt']?>" class="btn btn-primary mb-3">Detail</a>
                            <a href="/kt/nkt/delete/<?= $nktKT['id_nkt_kt']?>" class="btn btn-danger mb-3">Hapus</a>
                        </th>

                    </tr>
                         <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- Scroll to Top Button-->
                <a class="scroll-to-top rounded" href="#page-top">
                    <i class="fas fa-angle-up"></i>
                </a>

                <?= $this -> endSection() ?>