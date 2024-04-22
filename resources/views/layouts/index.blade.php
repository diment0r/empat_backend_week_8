<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <title>Document</title>
</head>

<body>
    <header class="header">
        <div class="header__inner">
            <a href="/" class="header__logo">DIMENTOR</a>
            @guest
            <a class="header__button" href="{{ route('login') }}">Login</a>
            <a class="header__button" href="{{ route('register') }}">Register</a>
            @endguest
            @auth
            <a class="header__button" href="{{ route('logout') }}">Logout</a>
            @endauth
        </div>
    </header>

    @yield('content')
</body>

</html>