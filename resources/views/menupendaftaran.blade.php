<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('/assets/css/bootstrap.css') }}">
    <script src="assets/js/bootstrap.js"></script>
    <title>Pendaftaran</title>
</head>

<body>
    <form action="">
        <div class="container">
            <div class="container mt-5">
                <div class="container mx-auto" style="width:50rem;">
                    <!-- informasi umum -->
                    <h6>Informasi Umum</h6>
                    <div class="card mb-3">
                        <div class="container mt-4">
                            <!-- nama -->
                            <h6>Nama</h6>
                            <div class="form-floating mb-3 ms-2">
                                <input type="text" class="form-control" id="floatingInput" placeholder="5">
                                <label for="floatingInput">Nama Lengkap</label>
                            </div>
                            <!-- alamat email -->
                            <h6>Email</h6>
                            <div class="form-floating mb-3 ms-2">
                                <input type="email" class="form-control" id="floatingInput" placeholder="5">
                                <label for="floatingInput">Email</label>
                            </div>
                            <!-- alamat -->
                            <h6>Asal</h6>
                            <div class="form-floating mb-3 ms-2">
                                <input type="text" class="form-control" id="floatingInput" placeholder="5">
                                <label for="floatingInput">Asal Kabupaten/Kota</label>
                            </div>
                            <!-- Tahun Kelahiran -->
                            <h6>Tanggal </h6>
                            <p>01 - Januari - 2004</p>
                            <div class="form-floating mb-3 ms-2">
                                <input type="text" class="form-control" id="floatingInput" placeholder="5">
                                <label for="floatingInput">HH:BB:TTTT</label>
                            </div>

                        </div>
                    </div>
                    <h6>Informasi Penting</h6>
                    <div class="card mb-2">
                        <div class="container">
                            <!-- Pekerjaan -->
                            <h6 class="mb-2">Pekerjaan</h6>
                            <div class="form-floating mb-3 ms-2">
                                <input type="text" class="form-control" id="floatingInput" placeholder="5">
                                <label for="floatingInput">Mahasiswa/yang lain</label>
                            </div>
                            <!-- Hobi -->
                            <h6>Hobi</h6>
                            <div class="form-floating mb-3 ms-2">
                                <input type="text" class="form-control" id="floatingInput" placeholder="5">
                                <label for="floatingInput">Olahraga atau yang lain</label>
                            </div>
                        </div>
                    </div>
                    <!-- tombol -->
                    <div class="mb-5">
                        <button type="button" class="btn btn-outline-primary">Input</button>
                        <button type="reset" class="btn btn-outline-danger">Reset</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</body>

</html>