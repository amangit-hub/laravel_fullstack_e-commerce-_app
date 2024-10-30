<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Styles / Scripts -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else

    @endif
</head>

<body>
    <div class="container">
        <header class="header_wrapper">
            <div class="logo">logo</div>
            <div class="navigation_bar">
                <ul class="navbar">
                    <li class="nav_item"><a href="#" class="nav_link">home</a></li>
                    <li class="nav_item"><a href="#" class="nav_link">about</a></li>
                    <li class="nav_item"><a href="#" class="nav_link">explore</a></li>
                    <li class="nav_item"><a href="#" class="nav_link">service</a></li>
                    <li class="nav_item"><a href="#" class="nav_link">blog</a></li>
                    <li class="nav_item"><a href="#" class="nav_link">support</a></li>
                    <div class="animation home_animation"></div>
                </ul>
            </div>
            <div class="right_menu">
                <a href="#" class=" btn register_button">register</a>
                <a href="#" class=" btn login_button">login</a>
            </div>
        </header>
        <main> main</main>
        <footer class="footer_wrapper">
            hello footer
        </footer>
    </div>

</body>

</html>