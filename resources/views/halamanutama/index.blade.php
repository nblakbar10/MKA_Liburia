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
    <title>Halaman Utama | Liburia</title>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <a class="navbar-brand" href="">
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

    <!-- Jumbotron -->
    <div class="container-one">
        <img src="{{asset('img/icon.svg')}}" class="rounded float-right" width="630px">
    </div>
    <div class="container">
        <div class="row">
            <div class="col ">
                <p class="myfont">Temukan </p>
                <p class="myfont1"><img src="{{asset('img/atribut.svg')}}" width="250"></p>
                <br>
                <p class="myfont2"> cara baru untuk <br> berlibur !</p>
            </div>
        </div>
    </div>

    <!-- Konten -->
    <div class="container">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li class="virtu">
                    <a href="#" role="button">
                        <img class="three" src="{{asset('img/virtual.svg')}}" alt="">
                    </a>
                </li>
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{asset('img/img1.svg')}}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{asset('img/img2.svg')}}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{asset('img/img1.svg')}}" class="d-block w-100" alt="...">
                </div>
            </div>
            <div class="imgasset">
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <img class="one" src="{{asset('img/left.svg')}}" aria-hidden="true" alt="">
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <img class="two" src="{{asset('img/right.svg')}}" aria-hidden="true" alt="">
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <B>
                    <p class="mydestinasi">Destinasi</p>
                </B>
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="single-box">
                                        <a href="/destinasi">
                                            <div class="img-areaone"><img src="{{asset('img/destinasi1.svg')}}" alt=""></div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="single-box">
                                        <a href="">
                                            <div class="img-area"><img src="{{asset('img/destinasi2.svg')}}" alt=""></div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="single-box">
                                        <a href="">
                                            <div class="img-area"><img src="{{asset('img/destinasi3.svg')}}" alt=""></div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="single-box">
                                        <a href="">
                                            <div class="img-areaone"><img src="{{asset('img/destinasi4.svg')}}" alt=""></div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="single-box">
                                        <a href="">
                                            <div class="img-area"><img src="{{asset('img/destinasi5.svg')}}" alt=""></div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="single-box">
                                        <a href="">
                                            <div class="img-area"><img src="{{asset('img/destinasi6.svg')}}" alt=""></div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <b>
                    <p class="myartikel">Artikel</p>
                </b>
                <div class="card" style="max-width: 1110px;">
                    @foreach ($article as $a)
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <a class="artimg" href="">
                                <img src="{{asset('img/artikel1.svg')}}" class="card-img" alt="...">
                            </a>
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Majukan Pariwisata NTT Lewat Ideathon 2021 #RinduLabuanBajo</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Id necessitatibus iusto hic sapiente architecto facere debitis, tenetur provident vel sed voluptatum aperiam quasi ratione nemo placeat consequuntur maiores molestiae corporis.</p>
                                <p class="card-text"><small class="text-muted">Diposting 19 menit lalu</small></p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
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
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</body>

</html>