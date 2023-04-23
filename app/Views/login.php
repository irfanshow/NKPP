<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body style="background-color: #99C5D3;">
    <div class="container">
        <div class="row justify-content-center">

            <div class="col-lg-7">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg">
                                <div class="p-5">
                                    <hr>
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-1">BPK Perwakilan Provinsi Lampung</h1>
                                        <h2 class="h4 text-gray-900 mb-4">Sistem Penilaian Kinerja Karyawan</h2>
                                    </div>
                                    <hr>
                                    <form action="/login/action" method="post">
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">NIP </label>
                                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputPassword1" class="form-label">Password</label>
                                            <input type="password" class="form-control" id="exampleInputPassword1" name="password">
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputPassword1" class="form-label">Peran</label>
                                            <select class="form-select" aria-label="Default select example" name="peran">
                                                <option value="1">Anggota Tim</option>
                                                <option value="2">Ketua Tim</option>
                                                <option value="3">Pengendali Teknis</option>
                                                <option value="4">Penanggung Jawab</option>
                                                <option value="5">Admin</option>
                                            </select>
                                        </div>
                                        <button type="submit" class="btn btn-info">Masuk</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>