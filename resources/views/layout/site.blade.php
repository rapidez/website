<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Rapidez')</title>
    <meta name="description" content="@yield('description', 'Headless Magento - with Laravel, Vue and Reactive Search')">

    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#27ae60">
    <meta name="msapplication-TileColor" content="#27ae60">
    <meta name="theme-color" content="#27ae60">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

    <!-- Styles -->
    @vite('resources/css/app.css')

    @include('googletagmanager::head')

    <script>
        window.responsiveResizeObserver = new ResizeObserver((entries) => {
            entries.forEach(entry => {
                const imgWidth = entry.target.getBoundingClientRect().width;
                const multiplier = entry.target.dataset?.sharpen ? 150 : 100;
                entry.target.parentNode.querySelectorAll('source').forEach((source) => {
                    source.sizes = Math.ceil(imgWidth / window.innerWidth * multiplier) + 'vw';
                });
            });
        });
    </script>
</head>
<body x-data="{solutions_menu:false, mobile_menu:false}" class="min-h-screen flex flex-col flex-1 font-body overflow-x-hidden antialiased">
    @include('googletagmanager::body')
    <div class="overflow-x-hidden">
        @include('partials.nav')
        @yield('content')
        @include('partials.footer')
    </div>
</body>
</html>
