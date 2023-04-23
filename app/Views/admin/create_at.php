<?= $this -> extend('adminTemplate')?>
<?= $this-> section('contentAdmin')?>

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <h3 class="px-2 mb-0 text-gray-800">Menambahkan Data Anggota Tim</h3>

                    <div class="row">
                        <div class="col-md-4-px-2">
                            <form action="#" method="POST" enctype="multipart/form-data">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Masukan Email" name="email">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Password</label>
                                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Masukan Password" name="password">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Nama</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Masukan Nama Pegawai" name="nama">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">NIP</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Masukan NIP" name="nama">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Unit Kerja</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Masukan Unit Kerja" name="nama">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Nama Ketua Tim</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Masukan Nama Ketua Tim" name="nama">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Nama Pengendali Teknis</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Masukan Nama Pengendali Teknis" name="nama">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Periode</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Masukan Periode" name="nama">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">No. Surat Dinas</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Masukan No. Surat Dinas" name="nama">
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Scroll to Top Button-->
            <a class="scroll-to-top rounded" href="#page-top">
                <i class="fas fa-angle-up"></i>
            </a>

            

    <?= $this-> endsection()?>
    