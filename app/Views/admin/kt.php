<?= $this -> extend('adminTemplate')?>
<?= $this-> section('contentAdmin')?>

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <h3 class="px-2 mb-0 text-gray-800">Data Ketua Tim</h3>
                    <!-- Page Heading -->
                    <div class="row">
                        <div class="card-body">
                            <a href="/admin/create_kt" class="btn btn-primary mb-3">Tambah Data</a>
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>NIP</th>
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th>Unit Kerja</th>
                                        <th>Nama Pengendali Teknis</th>
                                        <th>Nama Penanggung Jawab</th>
                                        <th>Periode</th>
                                        <th>No. Surat Dinas</th>
                                    </tr>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>
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