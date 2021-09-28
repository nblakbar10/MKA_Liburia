<!doctype html>
<html lang="en">

<head>
    @include('front.includes.html')
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
    <title>Halaman Utama | Liburia</title>
</head>

<body>
    @include('front.includes.header')

    @include('front.includes.jumbotron')

    @include('front.includes.slide')

    <div class="container">
        @yield('content')
    </div>


    @include('front.includes.slideakhir')
    @include('front.includes.footer')
    @include('front.includes.js')

</body>

</html>