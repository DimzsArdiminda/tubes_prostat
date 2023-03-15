<?php
session_start();
if(isset($_SESSION['login'])){
}else{
    die("anda belum login, silahkan login kembali pada halaman<a href='Tugas_3.php'> login</a>");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
    <title>Menu</title>
    <style>
        .mt-container {
            margin-top: 8rem;
        }

        .footer {
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            background-color: white;
            text-align: center;
            color: #888;
        }

        .py-fot {
            padding-top: 2px;
            padding-bottom: 2px;
        }
    </style>
</head>

<body>
    <!-- navbar start -->
    <nav class="navbar shadow bg-body-tertiary fixed-top ">
        <div class="container-fluid">
            <P class="navbar-brand mb-0">SURVERU</P>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
                aria-controls="offcanvasNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
                aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header bg-secondary">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="fitur.php">Cek Kesehatan Kamu</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Lainnya
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">History</a></li>
                                <hr class="dropdown-divider">
                                <li><a class="dropdown-item" href="#">Hubungi Pelayanan Kesehatan Terdekat</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="logout.php">logout</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!-- navbar end -->

    <!-- konten -->
    <div class="container mt-container">
        <div class="row">
            <div class="col-5">
                <img src="6.png" alt="gambar1" width="700px">
            </div>
            <div class="col text-start mt-5">
                <h1>Halo Salam sehat.</h1><br>
                <p>Selamat datang para pejuang kesehatan <br>sudahkah anda melakukan kegiatan positif hari ini?<br></p>
                <i>“Kesehatan yang baik bukanlah sesuatu yang dapat kita beli. Namun, sesuatu yang dapat menjadi
                    tabungan yang sangat berharga.”

                    <br>~Anne Wilsin Schaef</i>
            </div>
        </div>
    </div>

    <!-- footer -->
    <footer class="footer mt-auto py-2 bg-light">
        <div class="container shadow py-fot">
            <p class=" mb-0">SERVERU &copy 2023</p>
        </div>
    </footer>

</body>

</html>