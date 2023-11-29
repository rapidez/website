<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Join Rapidez Slack</title>
    <meta name="description" content="Headless Magento - with Laravel, Vue and Reactive Search">

    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#27ae60">
    <meta name="msapplication-TileColor" content="#27ae60">
    <meta name="theme-color" content="#27ae60">

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body class="relative h-screen antialiased font-sans">
    <div class="absolute inset-0 h-full w-full bg-gradient-to-br from-secondary-900 from-30% to-secondary-100"></div>
    <div class="flex flex-col relative">
        <div class="min-h-screen flex items-center justify-center">
            <div class="flex flex-col justify-around h-full">
                <div class="text-center text-white">
                    <h1 class="font-semibold tracking-wider text-6xl">
                        <x-icon-rapidez-white class="w-auto h-32"/>
                    </h1>
                    <h2 class="text-3xl font-semibold mb-2">Join our Slack!</h2>
                    @if (session('response'))
                        <h3 class="font-semibold mb-2 w-80 mx-auto text-green-600">Because we put all our time in Rapidez instead of this Slack invite page, here the response from Slack:</h3>
                        <div class="text-left">
                            @dump(session('response'))
                        </div>
                    @else
                        <form class="m-5 relative" method="POST" action="/slack">
                            @csrf
                            <input type="email" name="email" placeholder="Your email" class="bg-gray-100 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 pr-10 text-gray-700 leading-tight focus:outline-none focus:bg-white border-green-400">
                            <button type="submit" class="absolute right-0 top-0 bottom-0 bg-green-400 rounded-r p-2 hover:bg-green-300 text-white">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                            </button>
                        </form>
                    @endif
                </div>
            </div>
        </div>
    </div>
</body>
</html>
