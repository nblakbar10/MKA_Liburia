<!doctype html>
<html lang="en">

<head>
    @include('front.includes.html')
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