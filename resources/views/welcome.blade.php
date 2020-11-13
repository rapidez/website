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

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-200 h-screen antialiased font-sans">
    <div class="flex flex-col">
        <div class="min-h-screen flex items-center justify-center">
            <div class="flex flex-col justify-around h-full">
                <div class="text-center text-gray-800">
                    <h1 class="font-semibold tracking-wider text-6xl">
                        <img src="https://raw.githubusercontent.com/rapidez/art/master/logo.svg" alt="Rapidez" class="w-96 mx-auto">
                    </h1>
                    <h2 class="text-3xl font-semibold mb-2">Headless Magento</h2>
                    <p class="text-lg mb-8">With Laravel, Vue and Reactive Search</p>

                    @if(request()->has('success'))
                        <p class="text-green-400 font-semibold">Thank you!</p>
                    @else
                        <p>Subscribe for updates!</p>
                        <form class="m-2 relative" method="POST" action="https://mailcoach.rapidez.io/subscribe/78170cf4-6969-4226-b1ab-0f79eec57542">
                            <input type="email" name="email" placeholder="Your email" class="bg-gray-100 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 pr-10 text-gray-700 leading-tight focus:outline-none focus:bg-white border-green-400">
                            <button type="submit" class="absolute right-0 top-0 bottom-0 bg-green-400 rounded-r p-2 hover:bg-green-300 text-white">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                            </button>
                        </form>
                    @endif

                    <a class="inline-block mt-8" href="https://github.com/rapidez/rapidez">
                        <svg class="w-8 h-8" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12"></path></svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
