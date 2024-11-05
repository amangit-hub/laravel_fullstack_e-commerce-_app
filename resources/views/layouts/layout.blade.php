<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>ecommerce web</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <!-- Styles / Scripts -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/horizontal.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animation.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">


    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else

    @endif
</head>

<body>

    <div class="container">
        <header class="header_wrapper">
            <div class="logo logo_content">
                <div class="menu_icon">
                    <i class='bx bx-menu' onclick="toggleMenu()"></i>
                </div>
                logo
            </div>
            <div class="navigation_bar">
                <ul class="navbar" id="navbar">
                    <li class="nav_item"><a href="{{ route('home') }}" class="nav_link active">home</a></li>
                    <li class="nav_item"><a href="{{ route('about') }}" class="nav_link">about</a></li>
                    <li class="nav_item"><a href="{{ route('explore') }}" class="nav_link">explore</a></li>
                    <li class="nav_item"><a href="{{ route('service') }}" class="nav_link">service</a></li>
                    <li class="nav_item"><a href="{{ route('blog') }}" class="nav_link">blog</a></li>
                    <li class="nav_item"><a href="{{ route('support') }}" class="nav_link">support</a></li>
                </ul>
            </div>
            <div class="right_menu">
                <a href="{{'register'}}" class="btn register_button">register</a>
                <a href="{{'login'}}" class="btn login_button">login</a>
            </div>
        </header>

        <main>
            @yield('header_content')
            @yield('aboutsection')
            @yield('exploresection')
            @yield('serviceSection')
            @yield('blogSection')
            @yield('supportSection')
            @yield('authentication')

        </main>

    </div>

    <script src="{{ asset('js/script.js') }}"></script>
</body>

</html>