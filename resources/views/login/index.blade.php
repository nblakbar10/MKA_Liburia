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
    <link rel="stylesheet" type="text/css" href="{{asset('css/style2.css')}}">
    <title>Login | Liburia</title>
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
    <!-- test1 -->
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