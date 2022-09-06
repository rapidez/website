<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Rapidez</title>
    <meta name="description" content="Headless Magento - with Laravel, Vue and Reactive Search">

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
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">

    @include('googletagmanager::head')
</head>
<body x-data="{solutions_menu:false, mobile_menu:false}" class="min-h-screen flex flex-col flex-1 font-body overflow-x-hidden antialiased">
    @include('googletagmanager::body')
    <div class="overflow-x-hidden">
        @include('partials.nav')
        @include('partials.hero')
        @include('partials.logos', [
            'title' => ['Rapidez', 'is build with'],
            'logos' => [
                ['src' => 'laravel.svg', 'alt' => 'Laravel', 'href' => 'https://laravel.com', 'class' => 'h-10 sm:h-12'],
                ['src' => 'vue.svg', 'alt' => 'Vue', 'href' => 'https://vuejs.org', 'class' => 'h-10'],
                ['src' => 'reactive-search.svg', 'alt' => 'Reactive Search', 'href' => 'https://opensource.appbase.io/reactivesearch/vue', 'class' => 'h-10'],
            ],
        ])
        @include('partials.features')
        @include('partials.seperator-logo')
        @include('partials.faq')
        @include('partials.seperator-clouds')
        @include('partials.logos', [
            'id' => 'partners',
            'title' => ['Partners'],
            'subtitle' => 'Our awesome implementation and technology partners.<br><a href="mailto:info@rapidez.io" class="underline hover:no-underline">Contact us</a> to discuss the posibilities.',
            'logos' => [
                ['src' => 'justbetter.svg', 'alt' => 'JustBetter', 'href' => 'https://justbetter.nl', 'class' => 'h-10 sm:h-12'],
                ['src' => 'pay.svg', 'alt' => 'Pay', 'href' => 'https://www.pay.nl', 'class' => 'h-10 sm:h-12'],
                ['src' => 'strapi.svg', 'alt' => 'Strapi', 'href' => 'https://strapi.io', 'class' => 'h-10'],
                ['src' => 'digitalocean.svg', 'alt' => 'Digital Ocean', 'href' => 'https://www.digitalocean.com', 'class' => 'h-10 max-w-[150px] sm:max-w-none'],
                ['src' => 'hetzner.svg', 'alt' => 'Hetzner', 'href' => 'https://www.hetzner.com', 'class' => 'h-10 sm:h-6 max-w-[150px] sm:max-w-none'],
            ],
        ])
        @include('partials.call-to-action')
        @include('partials.footer')
    </div>
</body>
</html>
