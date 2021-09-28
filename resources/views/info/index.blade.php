<!doctype html>
<html lang="en">

<head>
    @include('front.includes.html')
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
    <title>Info | Liburia</title>
</head>

<body>
    @include('front.includes.header')

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

    @include('front.includes.slideakhir')
    @include('front.includes.footer')
</body>