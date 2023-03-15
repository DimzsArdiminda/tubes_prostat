<?php
session_start();

//pemeriksaan username dan password
if (isset($_POST['login'])){
    $user = $_POST['nama_user'];
    $pass = $_POST['password'];

    //periksa login
    if($user == "Dimas" && $pass == "ckptw"){
        //menciptakan session
        $_SESSION['login'] = $user;
        //menuju ke halaman pemeriksaan session
        header('location: dashboard.php');
    } else {
        $error = 'Username atau password salah';
        echo "<h6> $error </h6>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="{{ asset('/assets/css/bootstrap.css') }}">
    <script src="assets/js/bootstrap.js"></script>
    <!-- responsiv -->
    <title>.:: Login ::.</title>
    <style>
        body {
			background-image: url('1.png');
		}
        .warna{
            background-color:white;
        }
        .mt-10 {
            margin-top: 20%;
        }

        a {
            text-decoration: none;
            color: black;
        }

        a:hover {
            color: blue;
        }

        a:active {
            color: brown;
        }

        .text-aligin {
            text-align: left;
            list-style-type: none;
        }

        .mt-6 {
            margin-top: 6rem !important;
        }
        img:hover{
            animation: pulse;
            animation-duration: 5s;
           
        }
        /*Hp*/
        @media (max-width: 576px) {
            .mobile {
                margin-left: 0rem;
                width: 20rem;
            }

            .container-xs {
                justify-content: left;
                width: 100%;
                size: 50px;
            }

        }
        /*Tablet*/
        @media (max-width: 834px){
            .col-12{
                flex: 0 0 auto;
                width: 100%;
            }
            .container-xs {
                justify-content: left;
                width: 100%;
                size: 50px;
            }
        }
    </style>
</head>

<body>
     <!-- navbar start -->
     <nav class="navbar shadow bg-body-tertiary fixed-top warna">
        <div class="container-fluid">
            <P class="navbar-brand mb-0">SURVERU</P>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
                aria-controls="offcanvasNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
                aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header bg-secondary">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Login</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="">Menu depan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="login.php">Login</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Lainnya
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Hubung Gawat Darurat</a></li>
                                <hr class="dropdown-divider">
                                <li><a class="dropdown-item" href="#">Hubungi Pelayanan Kesehatan Terdekat</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">911</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!-- navbar end -->
    <!-- navbar end -->
    <!-- Halaman Login -->
    <div class="container text-center container-md ">
        <div class="row">
            <div class="col"></div>
            <div class="col col-xl col-sm col mt-10">
                <!-- kolom isian -->
                <!-- nama -->
                <div class="input-group mb-3 me-5 container-sm container-xs" class="kolomisian">
                    <div class="input-group mb-3 mt-3">
                        <span class="input-group-text" id="inputGroup-sizing-default">Alamat Akun</span>
                        <input type="email" class="form-control" aria-label="Sizing example input"
                            placeholder="example@example.com" aria-describedby="inputGroup-sizing-default" name="nama_user">
                    </div>
                    <span class="input-group-text" id="inputGroup-sizing-default">Kata Sandi &nbsp</span>
                    <input type="password" class="form-control" aria-label="Sizing example input"
                        placeholder="sandi anda"
                        aria-describedby="inputGroup-sizing-default" name="password">
                </div>
                <!-- Layout -->
                <div class="row ms-lg-1 container-xs">
                    <div class="col">
                        <ul class="text-aligin ms-5">
                            <button type="submit" class="btn btn-secondary" name="login">Login</button>
                            <br>
                                <p style="font-size: small;">Tidak Punya Akun? <a href="{{ url('/login/pendaftaran') }}"> Buat Kuy</a><br>
                                    Lupa Sandi? <a href="#"> Reset sandi di sini yakk</a></p>
                            </li>
                    </div>
                </div>
            </div>
        </div>
    </div>


</body>
</html>