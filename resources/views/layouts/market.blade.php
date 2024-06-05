<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost&display=swap" rel="stylesheet">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>


</head>

<body>
    <header>
        <div class="header">
            <nav>
                <a href="/"><img src="{{ asset('css/img/Logo.png') }}" alt="" class="logo"></a>
                <ul class="nav">
                    <li class="nav_li"><a href="/" class="nav_li_a decnone">Главная</a></li>
                    <li class="nav_li"><a href="{{ route('products.index') }}" class="nav_li_a decnone">О нас</a></li>
                    <li class="nav_li"><a href="{{ route('products.index') }}" class="nav_li_a decnone">Каталог</a></li>
                    <li class="nav_li"><a href="{{ route('products.index') }}" class="nav_li_a decnone">Где нас найти?</a></li>
                    <li class="nav_li"><a href="{{ route('orders.index') }}" class="nav_li_a decnone">Orders</a></li>
                    <li class="nav_li"><a href="{{ route('cart.show') }}" class="nav_li_a decnone">Cart</a></li>
                    <li class="nav_li">@yield('create_butt')</li>
                </ul>
            </nav>
            <div class="login">
                @if (Route::has('login'))
                    <nav style="width: 100%;">
                        @auth
                            <a href="{{ url('/dashboard') }}" class="login_button decnone">Dashboard</a>
                        @else
                            <a href="{{ route('login') }}" class="login_button decnone">Вход</a>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="signbut decnone">Регистрация</a>
                            @endif
                        @endauth
                    </nav>
                @endif
            </div>
        </div>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <div class="footer1">
            <a href="index.html"><img src="{{ asset('css/img/Logo.png') }}" alt="" class="logo"></a>
            <ul class="footer1_nav">
                <li class="nav_li"><a href="/" class="nav_li_a decnone">Menu</a></li>
                <li class="nav_li"><a href="{{ route('products.index') }}" class="nav_li_a decnone">Products</a></li>
                <li class="nav_li"><a href="{{ route('orders.index') }}" class="nav_li_a decnone">Orders</a></li>
            </ul>
        </div>
        <div class="footer2">
            <span class="footer2_text">© 2024 EATLY All Rights Reserved.</span>
            <div class="footer2_social">
                <a href="#"><img src="{{ asset('css/img/inst.png') }}" alt=""
                        class="footer2_social_img"></a>
                <a href="#"><img src="{{ asset('css/img/in.png') }}" alt=""
                        class="footer2_social_img"></a>
                <a href="#"><img src="{{ asset('css/img/fc.png') }}" alt=""
                        class="footer2_social_img"></a>
                <a href="#"><img src="{{ asset('css/img/tw.png') }}" alt=""
                        class="footer2_social_img"></a>
            </div>
        </div>
    </footer>
</body>

</html>
