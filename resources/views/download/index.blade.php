<!doctype html>
<html lang="en">

<head>
    @include('front.includes.html')
    <link rel="stylesheet" type="text/css" href="{{asset('css/style4.css')}}">
    <title>Download | Liburia</title>
</head>


<body class="text-center">

    @include('front.includes.header')

    <div class="container">
        <div class="row slider2">
            <div class="col">
                <div class="row">
                    <img class="down" src="{{asset('img/download1.svg')}}" width="400px" alt="">
                    <img class="kotak" src="{{asset('img/kotak.svg')}}" width="300px" alt="">
                    <img class="down2" src="{{asset('img/teks1.svg')}}" width="600px" alt="">
                </div>
            </div>

            <div class="col">
                <div class="row">
                    <img class="down" src="{{asset('img/down2.svg')}}" width="400px" alt="">
                    <img class="kotak" src="{{asset('img/kotak.svg')}}" width="300px" alt="">
                    <img class="down2" src="{{asset('img/teks2.svg')}}" width="600px" alt="">
                </div>
            </div>

            <div class="col">
                <div class="row">
                    <img class="down" src="{{asset('img/d3.svg')}}" width="400px" alt="">
                    <img class="kotak2" src="{{asset('img/kotak.svg')}}" width="300px" alt="">
                    <img class="down3" src="{{asset('img/teks3.svg')}}" width="400px" alt="">
                    <p class="parag">Dengan berbagai macam fitur seperti Virtual Tour 360
                        dengan tour guide yang terpercaya, Itinerary rencana
                        liburan kamu, Review tempat wisata impian kamu, dan
                        masih banyak lagi fitur menarik yang dapat membantu
                        liburan kamu.</p>
                </div>
            </div>
        </div>
    </div>



    @include('front.includes.footer')

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js" integrity="sha512-HGOnQO9+SP1V92SrtZfjqxxtLmVzqZpjFFekvzZVWoiASSQgSr4cw9Kqd2+l8Llp4Gm0G8GIFJ4ddwZilcdb8A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script type="text/javascript">
        $('.slider2').slick();
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</body>


</html>