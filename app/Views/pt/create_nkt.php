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
                                <img class="img-profile rounded-circle" src='../img/undraw_profile.svg'>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <h3 class="px-2 mb-0 text-gray-800">Penilaian Kompetensi Teknis</h3>
                    <div class="row">
                        <div class="card-body">
                            <input type="number" class="form-control" id="kendala" aria-describedby="emailHelp" placeholder="Masukan Periode" required name="kendala1">
                            <table style="text-align: center;" id="example2" class="table table-bordered table-hover mt-3">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th style="width: 500px;">Indikator</th>
                                        <th>Melebihi Harapan</th>
                                        <th>Memenuhi Harapan</th>
                                        <th>Perlu Perbaikan</th>
                                        <th>Tidak Memenuhi Harapan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th>1.</th>
                                        <th>Mampu mengarahkan dan menyimpulkan Temuan Pemeriksaan secara valid, terstruktur, dan sistematis</th>
                                        <th><input type="radio" name="1" value="A"></th>
                                        <th><input type="radio" name="1" value="B"></th>
                                        <th><input type="radio" name="1" value="C"></th>
                                        <th><input type="radio" name="1" value="D"></th>
                                    </tr>
                                    <tr>
                                        <th>2.</th>
                                        <th>Mampu merangkum informasi yang kompleks menjadi sebuah kesimpulan yang sederhana dan mudah dipahami oleh orang lain</th>
                                        <th><input type="radio" name="2" value="A"></th>
                                        <th><input type="radio" name="2" value="B"></th>
                                        <th><input type="radio" name="2" value="C"></th>
                                        <th><input type="radio" name="2" value="D"></th>
                                    </tr>
                                </tbody>
                            </table>

                            <div class="px-2">
                                <button type="submit" class="btn btn-primary">Submit</button>
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