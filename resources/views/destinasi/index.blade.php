<!doctype html>
<html lang="en">

<head>
    @include('front.includes.html')
    <link rel="stylesheet" type="text/css" href="{{asset('css/style4.css')}}">
    <title>Destinasi | Liburia</title>
</head>


<body class="text-center">
    <div class="img">
        <img src="{{asset('img/tour.svg')}}" alt="">
    </div>
    <div class="one">
        @include('front.includes.header')
    </div>

    <div class="container">
        <div class="row">
            <div class="col">
                <h3 class="judul">Cari Tempat Wisatamu di <br> Kalimantan</h3>
                <p class="subjudul">Nikmati Indahnya Destinasi Wisata Alam</p>
            </div>
        </div>
    </div>

    <br>

    <div class="container">
        <h2 class="tag">Kota Favorit</h2>
        <br>
        <div class="row slider">
            <div class="col-md-4">
                <div class="details">
                    <a href="/infokota">
                        <img src="{{asset('img/kota.svg')}}" width="200px" alt="">
                    </a>
                </div>
            </div>

            <div class="col-md-4">
                <div class="details">
                    <img src="{{asset('img/kota.svg')}}" width="200px" alt="">
                </div>
            </div>

            <div class="col-md-4">
                <div class="details">
                    <img src="{{asset('img/kota.svg')}}" width="200px" alt="">
                </div>
            </div>

            <div class="col-md-4">
                <div class="details">
                    <img src="{{asset('img/kota.svg')}}" width="200px" alt="">
                </div>
            </div>

            <div class="col-md-4">
                <div class="details">
                    <img src="{{asset('img/kota.svg')}}" width="200px" alt="">
                </div>
            </div>

            <div class="col-md-4">
                <div class="details">
                    <img src="{{asset('img/kota.svg')}}" width="200px" alt="">
                </div>
            </div>

            <div class="col-md-4">
                <div class="details">
                    <img src="{{asset('img/kota.svg')}}" width="200px" alt="">
                </div>
            </div>

            <div class="col-md-4">
                <div class="details">
                    <img src="{{asset('img/kota.svg')}}" width="200px" alt="">
                </div>
            </div>
        </div>
    </div>

    <br>

    <div class="container">
        <h2 class="mydestinasi">
            Destinasi Wisata Favorite
        </h2>
        <div class="row favorite">
            <div class="col">
                <div class="wisata">
                    <a href="/info">
                        <img src="{{asset('img/favorit.svg')}}" width="225" alt="">
                    </a>
                    <p>Pulau Derawan</p>
                    <i class="bi bi-star-fill">4.9 (5.3k reviews)</i>
                </div>
            </div>

            <div class="col">
                <div class="wisata">
                    <img src="{{asset('img/favorit.svg')}}" width="225" alt="">
                    <p>Pulau Derawan</p>
                    <i class="bi bi-star-fill">4.9 (5.3k reviews)</i>
                </div>
            </div>

            <div class="col">
                <div class="wisata">
                    <img src="{{asset('img/favorit.svg')}}" width="225" alt="">
                    <p>Pulau Derawan</p>
                    <i class="bi bi-star-fill">4.9 (5.3k reviews)</i>
                </div>
            </div>

            <div class="col">
                <div class="wisata">
                    <img src="{{asset('img/favorit.svg')}}" width="225" alt="">
                    <p>Pulau Derawan</p>
                    <i class="bi bi-star-fill">4.9 (5.3k reviews)</i>
                </div>
            </div>
        </div>
    </div>

    <br>
    <br>
    <br>
    <div class="container">
        <h2 class="tag2">Kota Lainnya</h2>
        <br>
        <div class="row kota">
            <div class="col-md-4">
                <div class="details">
                    <img src="{{asset('img/kotalainnya.svg')}}" width="200px" alt="">
                </div>
            </div>

            <div class="col-md-4">
                <div class="details">
                    <img src="{{asset('img/kotalainnya.svg')}}" width="200px" alt="">
                </div>
            </div>

            <div class="col-md-4">
                <div class="details">
                    <img src="{{asset('img/kotalainnya.svg')}}" width="200px" alt="">
                </div>
            </div>

            <div class="col-md-4">
                <div class="details">
                    <img src="{{asset('img/kotalainnya.svg')}}" width="200px" alt="">
                </div>
            </div>

            <div class="col-md-4">
                <div class="details">
                    <img src="{{asset('img/kotalainnya.svg')}}" width="200px" alt="">
                </div>
            </div>

            <div class="col-md-4">
                <div class="details">
                    <img src="{{asset('img/kotalainnya.svg')}}" width="200px" alt="">
                </div>
            </div>

            <div class="col-md-4">
                <div class="details">
                    <img src="{{asset('img/kotalainnya.svg')}}" width="200px" alt="">
                </div>
            </div>

            <div class="col-md-4">
                <div class="details">
                    <img src="{{asset('img/kotalainnya.svg')}}" width="200px" alt="">
                </div>
            </div>
        </div>
    </div>

    @include('front.includes.footer')

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js" integrity="sha512-HGOnQO9+SP1V92SrtZfjqxxtLmVzqZpjFFekvzZVWoiASSQgSr4cw9Kqd2+l8Llp4Gm0G8GIFJ4ddwZilcdb8A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script type="text/javascript">
        $('.slider').slick({
            dots: true,
            infinite: false,
            speed: 50,
            slidesToShow: 4,
            slidesToScroll: 4,
            responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3,
                        infinite: true,
                        dots: true
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
                // You can unslick at a given breakpoint now by adding:
                // settings: "unslick"
                // instead of a settings object
            ]
        });


        $('.kota').slick({
            dots: true,
            infinite: false,
            speed: 50,
            slidesToShow: 4,
            slidesToScroll: 4,
            responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3,
                        infinite: true,
                        dots: true
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
                // You can unslick at a given breakpoint now by adding:
                // settings: "unslick"
                // instead of a settings object
            ]
        });
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</body>


</html>