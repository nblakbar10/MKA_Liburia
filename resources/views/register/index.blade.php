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
    <link rel="stylesheet" type="text/css" href="{{asset('css/style3.css')}}">
    <title>Sign Up | Byon</title>
</head>


<body class="text-center">
    <div class="logo">
        <img src="{{asset('img/logo2.svg')}}" alt="">
    </div>
    <div class="container">
        <div class="forms-container">
            <div class="login">
                <form action="/register" method="POST" class="login-form2">
                    @csrf
                    <p class="title1">Kamu belum punya akun? <br>
                        Sign up terlebih dahulu!</p>
                    <div class="signup-field">
                        <i class="bi bi-person"></i>
                        <input type="text" class="@error('fullname') is-invalid @enderror" name="fullname" id="fullname" placeholder="Fullname...">
                    </div>
                    <div class="signup-field1">
                        <i class="bi bi-person"></i>
                        <input type="text" name="username" id="username" placeholder="Username...">
                    </div>
                    <div class="signup-field2">
                        <i class="bi bi-envelope"></i>
                        <input type="email" name="email" id="email" placeholder="Email...">
                    </div>
                    <div class="signup-field3">
                        <i class="bi bi-lock"></i>
                        <input type="password" name="password" id="password" placeholder="Password...">
                    </div>
                    <div class="signup-field4">
                        <i class="bi bi-lock"></i>
                        <input type="password" name="password" id="password" placeholder="Konfirmasi Password">
                    </div>
                    <input type="submit" class="submit2" value="Daftar">
            </div>
            </form>
        </div>
</body>

</html>