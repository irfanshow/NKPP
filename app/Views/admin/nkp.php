<?= $this -> extend('adminTemplate')?>
<?= $this-> section('contentAdmin')?>

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <h3 class="px-2 mb-0 text-gray-800">Data Indikator NKP</h3>
                    <!-- Page Heading -->
                    <div class="row">
                        <div class="card-body">
                            <a href="/admin/create_nkp" class="btn btn-primary mb-3">Tambah Data</a>
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Indikator Perilaku</th>
                                        <th>Bobot 1</th>
                                        <th>Bobot 2</th>
                                        <th>Bobot 3</th>
                                        <th>Bobot 4</th>
                                        <th colspan="3">Action</th>
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