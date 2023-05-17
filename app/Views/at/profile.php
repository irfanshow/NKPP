<?= $this -> extend('atTemplate')?>
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
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Anggota Tim</span>
                                <img class="img-profile rounded-circle" src='../img/undraw_profile.svg'>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <h3 class="px-2 mb-0 text-gray-800">Mengubah Profile</h3>

                    <div class="row">
                        <div class="col-md-4-px-2">
                            <form action="/at/saveProfile/<?php echo $_SESSION['id']?>" method="POST" enctype="multipart/form-data">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Nama</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Masukan Nama Pegawai" name="nama" value ="<?php echo $at['nama_at']?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">NIP</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Masukan NIP" name="nip" value ="<?php echo $at['nip_at']?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Unit Kerja</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Masukan Unit Kerja" name="unit" value ="<?php echo $at['unit_kerja_at']?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Periode</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Masukan Periode" name="periode" value ="<?php echo $at['periode_at']?>">
                                    </div>
                                    <label for="file-upload">Foto Saat ini </label>
                                    <div class="form-group">
                                        
                                        <img src='<?php echo base_url() ?>/assets/img/<?php echo $at['foto_at']?>' alt="Tidak ditermukan foto" height="200" width="250">

                                    </div>
                                    <div class="form-group">
                                        <label for="file-upload">Upload Gambar </label>
                                        <input type="file" id="file-upload" name="foto" >
                                    </div>
                                </div>
                                <hr>
                                <div class="col-md-4-px-2">
                                    <button type="submit" class="btn btn-primary">Kirim</button>
                                </div>
                            </form>
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
