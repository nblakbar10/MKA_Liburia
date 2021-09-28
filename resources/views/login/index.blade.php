<!doctype html>
<html lang="en">

<head>
    @include('front.includes.html')
    <link rel="stylesheet" type="text/css" href="{{asset('css/style2.css')}}">
    <title>Login | Byon</title>
</head>


<body class="text-center">
    <!-- 
    @if(session()->has('succes'))
    <div class="alert alert-succes alert-dismissible fade show" role="alert">
        {{ session('succes')}}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif -->

    <div class="logo">
        <img src="{{asset('img/logo2.svg')}}" alt="">
    </div>
    <form class="form-signin" method="POST" action="/login">
        @csrf
        <form action="" class="login-form">
            <p class="title">Hai,Selamat Datang! <br>
                Silahkan Login terlebih dahulu!</p>
            <div class="input-field">
                <i class="bi bi-person"></i>
                <input type="text" placeholder="Username...">
            </div>
            <div class="input-field1">
                <i class="bi bi-lock"></i>
                <input type="password" placeholder="Password...">

            </div>
            <b><a href="#" class="lupa">Lupa Password?</a></b>
            <br>
            <input type="submit" class="submit" value="Login">
            <p class="anu">Atau login dengan</p>
            <div class="input">
                <img src="{{asset('img/google-icon.svg')}}" alt="">
                <input type="submit" class="btn" value="Google Account">
            </div>
            <p class="sign">Belum memiliki akun?<a href="/register">sign up</a></p>
            </div>

        </form>
    </form>
</body>


</html>