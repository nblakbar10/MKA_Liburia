<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="shortcut icon" href="img/logo.svg" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
    <title>Info | Liburia</title>
</head>

<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <a class="navbar-brand" href="#">
            <img src="{{asset('img/logo.svg')}}" alt="">
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/">Beranda<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Tentang</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Kontak</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/download">Download</a>
                </li>
                <li class="nav-item4">
                    <a class="nav-link4" href="/login">Masuk</a>
                </li>
            </ul>
        </div>
    </nav>
    <br>

    <!-- konten -->
    <div class="container">
        <div class="row">
            <div class="col informasi">
                <h2>Menikmati desiran angin laut dan deburan ombak pantai
                    di Pantai Manggar Segara Sari</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi dolore, voluptatum ipsam enim rerum quibusdam assumenda cum explicabo eum reiciendis, impedit nobis ducimus ratione adipisci, est quasi asperiores. Nesciunt, quisquam.</p>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col">
                <h5>Jam Operasional</h5>
                <h5>Harga Tiket Masuk</h5>
                <h5>Akomodasi Terdekat</h5>
                <h5>Jarak dari bandara</h5>
            </div>
        </div>
    </div>

    <!-- before footer -->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <img class="myfooter" src="{{asset('img/footer.svg')}}" alt="">
            </div>
        </div>
    </div>
    <!-- footer -->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <b>
                    <h2 class="foot1">Byon</h2>
                    <p class="tagone">Be Your Vacation</p>
                </b>
            </div>
            <div class="col-md-12">
                <b>
                    <h2 class="foot2">Perusahaan</h2>
                    <p class="list2">Tentang <br> <br>
                        Karir <br> <br>
                        Mobile</p>
                </b>
            </div>
            <div class="col-md-12">
                <b>
                    <h2 class="foot3">Kontak</h2>
                    <p class="list3">Help <br> <br>
                        FAQ <br> <br>
                        Press</p>
                </b>
            </div>
        </div>
    </div>

    <div class="inifooter">
        <ul class="sosmed float-right">
            <li class="env"><i class="bi bi-envelope"></i></li>
            <li><i class="bi bi-instagram"></i></li>
            <li><i class="bi bi-facebook"></i></li>
            <li><i class="bi bi-twitter"></i></li>
        </ul>
        <h2 class="tagakhir float-right">Temukan Aplikasi Kami di</h2>
        <div class="tagakhir2 float-right">
            <a class="textplay" href="">
                <img src="{{asset('img/playstore.svg')}}" alt="">
                Play Store
            </a>
        </div>
        <div class="tagakhir3 float-right">
            <a class="textplay" href="">
                <img src="{{asset('img/appstore.svg')}}" alt="">
                App Store
            </a>
        </div>
    </div>
</body>