<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('/assets/css/bootstrap.css') }}">
    <script src="assets/js/bootstrap.js"></script>
    <title>Document</title>
    <style>
        body {
            background-image: url('5.png');
            background-repeat: no-repeat;
            background-size: cover;
        }

        .footer {
            left: 0;
            bottom: 0;
            width: 100%;
            background-color: white;
            text-align: center;
            color: #888;
        }

        .mt-break {
            margin-top: 8rem;
        }
    </style>
</head>

<body>
    <div class="container mt-5 mb-5">
        <!-- inputan -->
        <div class="mb-2">
            <a href="menu.php" style="text-decoration:none;">
                <- Kembali</a>
        </div>
        <div class="card shadow mb-2">
            <div class="container mb-2 mt-1">
                <form action="fitur" method="head">
                    <h2 class="text-center mt-2">PENGARUH OLAHRAGA DAN LAMA WAKTU TIDUR DALAM KESEHATAN </h2>
                    <p style="font-size:10px; text-align:center;"> - DALAM SATU BULAN TERAKHIR - </p>
                    <hr>
                    <p>Lama waktu Tidur <br> contoh : 5 atau 0.5 jika menit</p>
                    <div class="form-floating mb-3 ms-2">
                        <input type="text" class="form-control" id="floatingInput" placeholder="5" name="tidur">
                        <label for="floatingInput">Lama waktu Tidur</label>
                    </div>
                    <!-- waktu olahraga -->
                    <p>Lama waktu Olahraga<br> contoh : 5 atau 0.5 jika menit </p>
                    <div class="form-floating mb-3 ms-2">
                        <input type="text" class="form-control" id="floatingInput" placeholder="5" name="olahraga">
                        <label for="floatingInput">lama waktu olahraga</label>
                    </div>
                    <!-- kebugaran -->
                    <p>Kebugaran Jasmani Pasca Lockdown<br> contoh : 1 untuk sehat | 0 untuk sakit </p>
                    <div class="form-floating mb-3 ms-2">
                        <input type="text" class="form-control" id="floatingInput" placeholder="5" name="kebugaran">
                    </div>
                    <button type="submit" class="btn btn-outline-primary mt-2 mb-2" name="tampilkan">Masukan</button>
                    <button type="reset" class="btn btn-outline-danger mb-2 mt-2"> reset </button>
                </form>
            </div>
        </div>
        <!-- Kesimpulan -->
        <div class="card shadow mt-5 mb-2 mt-break">
            <div class="container ">
                <h2 class="mb-2 text-center mt-2">HASIL YANG DIDAPAT</h2>
                <hr>
                <div class="row">
                    <div class="col-6 text-center mx-auto">
                        <!-- hasil -->
                        <b>Hasil</b>
                        <div class="card mb-2 ms-2 mt-2" width="15px">
                            <div class="card-body">
                                {{-- OUPUT DARI OLAHRAGA DAN LAMA TIDUR --}}
                                {{-- if else tidur --}}
                                @if(isset($_HEAD["tampilkan"]))
    @php
        $lamatidur = $_HEAD['tidur'];
        $hasil_tidur = "";

        if($lamatidur < 5) {
            $hasil_tidur = "Kondisi tubuh anda KURANG TIDUR";
        } elseif($lamatidur >= 5 && $lamatidur <= 8) {
            $hasil_tidur = "Kondisi tubuh anda TIDUR CUKUP";
        } else {
            $hasil_tidur = "Kondisi tubuh anda TIDUR BERLEBIHAN";
        } 

        $lamaolga = $_HEAD['olahraga'];
        $hasil_olga = "";

        if($lamaolga < 1) { 
            $hasil_olga = "anda kurang berolahraga";
        } else {
            $hasil_olga = "anda berolahraga";
        } 

        @endphp

        @if($hasil_olga == "anda kurang berolahraga" && $hasil_tidur == "Kondisi tubuh anda KURANG TIDUR")
            Tubuh anda kurang sehat
        @elseif($hasil_olga == "anda kurang berolahraga" && $hasil_tidur == "Kondisi tubuh anda TIDUR CUKUP")
            Tidur Cukup, Tapi Olahraga Kurang
        @elseif($hasil_olga == "anda kurang berolahraga" && $hasil_tidur == "Kondisi tubuh anda TIDUR BERLEBIHAN")
            Pola Tidur dan pola olahraga tidak sehat!
        @elseif($hasil_olga == "anda berolahraga" && $hasil_tidur == "Kondisi tubuh anda KURANG TIDUR")
            Tubuh anda kurang beristirahat
        @elseif($hasil_olga == "anda berolahraga" && $hasil_tidur == "Kondisi tubuh anda TIDUR CUKUP")
            Tubuh anda sehat
        @elseif($hasil_olga == "anda berolahraga" && $hasil_tidur == "Kondisi tubuh anda TIDUR BERLEBIHAN")
            pola tidur anda kurang teratur
        @endif
@endif

                            {{-- if ealse gabungan --}}
                            </div>
                        </div>
                    </div>
                    <!-- saran -->
                    <div class="col-6 text-center">
                        <b>Saran</b>
                        <div class="card mb-2 ms-2 mt-2 " width="15px">
                            <div class="card-body ">
                                {{-- OUPUT DARI HASIL --}}
                                Pertahankan pola hidup anda
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row mt-1 px-2">
                    <b>Hal yang harus di lakukan secepatnya :</b>
                    <div class="card mb-2 mt-2">
                        <div class="card-body ">
                            {{-- OUPUT DARI HASIL --}}
                            <ol>
                                <li>
                                    Pertahankan Pola tidur anda
                                </li>
                                <li>
                                    Pertahankan Pola olahraga anda
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <hr>
            </div>
            <div class="row mb-5">
                <div class="col-2">
                </div>
                <div class="col-10 text-end me-4">
                    <a href="#" style="text-decoration: none;">PUSAT KESEHATAN TERDEKAT</a>
                </div>
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