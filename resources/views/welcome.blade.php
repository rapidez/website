<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="overflow-x-hidden">
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
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <meta name="msapplication-TileColor" content="#27ae60">
    <meta name="theme-color" content="#27ae60">

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body x-data="{solutions_menu:false, mobile_menu:false}" class="min-h-screen flex flex-col flex-1 font-body overflow-x-hidden">

    <!-- start nav -->
    <div class="relative bg-gray-100">
        <div class="max-w-7xl mx-auto px-6 sm:px-6">
            <div class="flex justify-between items-center border-b-2 border-gray-100 py-6 md:justify-start lg:space-x-10">
                <div class="flex">
                    <a href="#">
                        <span class="sr-only">Rapidez</span>
                        <img src="https://raw.githubusercontent.com/rapidez/art/master/logo.svg" alt="Rapidez" class="sm:h-auto h-12 sm:w-[245px]">
                    </a>
                </div>
                <nav class="hidden lg:flex space-x-10 flex-1 justify-center">
                    <a href="#features" class="text-lg font-medium text-primary-200 text-opacity-75 hover:text-gray-900">
                        Features
                    </a>
                    <a href="#" class="text-lg font-medium text-primary-200 text-opacity-75 hover:text-gray-900">
                        FAQ
                    </a>
                    <a href="http://docs.rapidez.io/" target="_blank" class="text-lg font-medium text-primary-200 text-opacity-75 hover:text-gray-900">
                        Docs
                    </a>
                    <a href="#" class="text-lg font-medium text-primary-200 text-opacity-75 hover:text-gray-900">
                        Changelog
                    </a>
                    <a href="#" class="text-lg font-medium text-primary-200 text-opacity-75 hover:text-gray-900">
                        Roadmap
                    </a>
                </nav>
                <div class="ml-auto">
                    <a href="#" class="whitespace-nowrap inline-flex items-center justify-center border border-transparent px-6 py-3 rounded-md shadow-sm text-base text-white bg-gradient-to-b from-primary-100 to-primary-200">
                        Rapidez Demo
                    </a>
                </div>
                <div @click="mobile_menu=!mobile_menu" class="ml-2 sm:ml-3 lg:hidden">
                    <button type="button" class="whitespace-nowrap inline-flex items-center justify-center border border-transparent px-4 py-3 rounded-md shadow-sm text-base text-white bg-secondary-100" aria-expanded="false">
                        <span class="sr-only">Open menu</span>
                        <!-- Heroicon name: outline/menu -->
                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <div x-show="mobile_menu" class="absolute z-30 top-0 inset-x-0 p-2 transition transform origin-top-right md:hidden">
            <div class="rounded-lg shadow-lg ring-1 ring-black ring-opacity-5 bg-white divide-y-2 divide-gray-50">
                <div class="pt-2 pb-6 px-4">
                    <div class="flex items-center justify-between">
                        <div>
                            <img src="https://raw.githubusercontent.com/rapidez/art/master/logo.svg" alt="Rapidez" class="h-16 mx-auto">
                        </div>
                        <div class="mt-px">
                            <button @click="mobile_menu=!mobile_menu" type="button" class="whitespace-nowrap inline-flex items-center justify-center border border-transparent px-4 py-3 rounded-md shadow-sm text-base text-white bg-secondary-100">
                                <span class="sr-only">Close menu</span>
                                <!-- Heroicon name: outline/x -->
                                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="mt-6">
                        <nav class="grid gap-y-2">
                            <a href="#" class="bg-gray-100 p-3 flex items-center rounded-md hover:bg-gray-50">
                                <!-- Heroicon name: outline/chart-bar -->
                                <svg class="flex-shrink-0 h-6 w-6 text-indigo-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                                </svg>
                                <span class="ml-3 text-base font-medium text-gray-900">
                                    Features
                                </span>
                            </a>
                            <a href="#" class="bg-gray-100 p-3 flex items-center rounded-md hover:bg-gray-50">
                                <!-- Heroicon name: outline/cursor-click -->
                                <svg class="flex-shrink-0 h-6 w-6 text-indigo-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 15l-2 5L9 9l11 4-5 2zm0 0l5 5M7.188 2.239l.777 2.897M5.136 7.965l-2.898-.777M13.95 4.05l-2.122 2.122m-5.657 5.656l-2.12 2.122" />
                                </svg>
                                <span class="ml-3 text-base font-medium text-gray-900">
                                    FAQ
                                </span>
                            </a>
                            <a href="http://docs.rapidez.io/" target="_blank" class="bg-gray-100 p-3 flex items-center rounded-md hover:bg-gray-50">
                                <!-- Heroicon name: outline/shield-check -->
                                <svg class="flex-shrink-0 h-6 w-6 text-indigo-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                                </svg>
                                <span class="ml-3 text-base font-medium text-gray-900">
                                    Docs
                                </span>
                            </a>
                            <a href="#" class="bg-gray-100 p-3 flex items-center rounded-md hover:bg-gray-50">
                                <!-- Heroicon name: outline/shield-check -->
                                <svg class="flex-shrink-0 h-6 w-6 text-indigo-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                                </svg>
                                <span class="ml-3 text-base font-medium text-gray-900">
                                    Changelog
                                </span>
                            </a>
                            <a href="#" class="bg-gray-100 p-3 flex items-center rounded-md hover:bg-gray-50">
                                <!-- Heroicon name: outline/shield-check -->
                                <svg class="flex-shrink-0 h-6 w-6 text-indigo-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                                </svg>
                                <span class="ml-3 text-base font-medium text-gray-900">
                                    Roadmap
                                </span>
                            </a>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end nav -->


    <!-- start hero -->
    <div class="hero bg-gray-100 relative md:h-[65vh] lg:h-[100vh] z-10">
        <div class="max-w-7xl mx-auto px-6 sm:px-6 py-12 lg:py-32 relative z-10">
            <div class="pb-32">
                <h1 class="mt-4 tracking-tighter font-extrabold text-white sm:mt-5 sm:leading-none lg:mt-6 text-4xl xs:text-5xl md:text-6xl">
                    <span class="block text-secondary-100 ">The fastest</span>
                    <span class="md:block bg-clip-text text-transparent bg-gradient-to-b from-primary-100 to-primary-200 pb-2">headless magento.</span>
                </h1>
                <p class="mt-6 text-base text-primary-200 text-opacity-75 sm:mt-4 text-xl">
                    With laravel, Vue and Reactive Search
                </p>
                <div class="mt-8">
                    <form action="#" class="sm:max-w-2xl lg:mx-0">
                        <div class="sm:flex">
                            <div class="min-w-0 flex-1 flex">
                                <label for="email" class="sr-only">Email address</label>
                                <input id="email" type="email" placeholder="Enter your email" class="flex-1 block w-full px-5 py-3 rounded-md border-0 focus:border-0 text-base text-gray-900 placeholder-primary-200 placeholder-opacity-75 outline-none focus:outline-none shadow-md text-primary-200">
                            </div>
                            <div class="mt-3 sm:mt-0 sm:ml-3">
                                <button type="submit" class="block w-full py-3 px-6 rounded-md bg-secondary-100 text-white font-medium border border-transparent">Subscribe to Rapidez</button>
                            </div>
                        </div>
                    </form>
                    <div class="flex flex-wrap flex-1 items-center mt-6 justify-center sm:justify-start">
                        <a class="block mr-7 text-primary-200" href="https://twitter.com/rapidez_io">
                            <svg class="w-10 h-10" fill="currentcolor" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84"></path></svg>
                        </a>
                        <a class="block mr-7 text-primary-200" href="https://github.com/rapidez/rapidez">
                            <svg class="w-8 h-8" fill="currentcolor" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12"></path></svg>
                        </a>
                        <a class="block text-primary-200" href="/slack">
                            <svg class="w-8 h-8" fill="currentcolor" enable-background="new 0 0 2447.6 2452.5" viewBox="0 0 2447.6 2452.5" xmlns="http://www.w3.org/2000/svg"><g clip-rule="evenodd" fill-rule="evenodd"><path d="m897.4 0c-135.3.1-244.8 109.9-244.7 245.2-.1 135.3 109.5 245.1 244.8 245.2h244.8v-245.1c.1-135.3-109.5-245.1-244.9-245.3.1 0 .1 0 0 0m0 654h-652.6c-135.3.1-244.9 109.9-244.8 245.2-.2 135.3 109.4 245.1 244.7 245.3h652.7c135.3-.1 244.9-109.9 244.8-245.2.1-135.4-109.5-245.2-244.8-245.3z"/><path d="m2447.6 899.2c.1-135.3-109.5-245.1-244.8-245.2-135.3.1-244.9 109.9-244.8 245.2v245.3h244.8c135.3-.1 244.9-109.9 244.8-245.3zm-652.7 0v-654c.1-135.2-109.4-245-244.7-245.2-135.3.1-244.9 109.9-244.8 245.2v654c-.2 135.3 109.4 245.1 244.7 245.3 135.3-.1 244.9-109.9 244.8-245.3z"/><path d="m1550.1 2452.5c135.3-.1 244.9-109.9 244.8-245.2.1-135.3-109.5-245.1-244.8-245.2h-244.8v245.2c-.1 135.2 109.5 245 244.8 245.2zm0-654.1h652.7c135.3-.1 244.9-109.9 244.8-245.2.2-135.3-109.4-245.1-244.7-245.3h-652.7c-135.3.1-244.9 109.9-244.8 245.2-.1 135.4 109.4 245.2 244.7 245.3z"/><path d="m0 1553.2c-.1 135.3 109.5 245.1 244.8 245.2 135.3-.1 244.9-109.9 244.8-245.2v-245.2h-244.8c-135.3.1-244.9 109.9-244.8 245.2zm652.7 0v654c-.2 135.3 109.4 245.1 244.7 245.3 135.3-.1 244.9-109.9 244.8-245.2v-653.9c.2-135.3-109.4-245.1-244.7-245.3-135.4 0-244.9 109.8-244.8 245.1 0 0 0 .1 0 0"/></g></svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="absolute inset-0 top-[-17rem] xl:top-[-19rem] 2xl:top-[-25rem] -mr-8 pointer-events-none flex sm:flex-col flex-row-reverse">
            <img src="https://raw.githubusercontent.com/rapidez/art/master/r.svg" alt="Rapidez" class="min-w-[900px] sm:min-w-12 max-w-[115rem] 2xl:max-w-[110rem] flex -mt-3 sm:-mt-32 sm:-mr-32 -mr-20 w-full ml-auto opacity-[.04]">
        </div>
        <img src="/img/rapidez-smoke.svg" class="absolute inset-x-0 w-full bottom-0 block -mb-px">
    </div>



    <div class="relative flex flex-col mb-12 sm:mb-32">
        <div class="max-w-7xl mx-auto px-6 sm:px-6 w-full z-10 relative">
            <h2 class="text-3xl font-extrabold tracking-tight sm:text-4xl text-center mb-0 sm:mt-0 mt-10">
                <span class="bg-clip-text text-secondary-100 pb-1">Tools</span>
                <span class="bg-clip-text text-transparent bg-gradient-to-b from-primary-100 to-primary-200 pb-2">which build Rapidez</span>
            </h2>
            <div class="flex flex-wrap mt-6 lg:mt-14 sm:text-lg -mx-1 sm:-mx-6 text-gray-400">
                <div class="flex p-1 sm:p-6 w-1/2 sm:w-1/3">
                    <div class="bg-gray-100 flex flex-1 p-3 sm:p-6 items-center justify-center rounded-full">
                        <img src="https://rapidez.io/img/laravel.svg" alt="Laravel" loading="lazy" class="h-5 sm:h-12">
                    </div>
                </div>
                <div class="flex p-1 sm:p-6 w-1/2 sm:w-1/3">
                    <div class="bg-gray-100 flex flex-1 p-3 sm:p-6 items-center justify-center rounded-full">
                        <img src="https://rapidez.io/img/vue.svg" alt="Vue" loading="lazy" class="h-5 sm:h-12 mr-3"> Vue.js
                    </div>
                </div>
                <div class="flex p-1 sm:p-6 w-1/2 sm:w-1/3">
                    <div class="bg-gray-100 flex flex-1 p-3 sm:p-6 items-center justify-center rounded-full">
                        <img src="https://rapidez.io/img/tailwind-css.svg" alt="Tailwind CSS" loading="lazy" class="h-5 sm:h-8">
                    </div>
                </div>
                <div class="flex p-1 sm:p-6 w-1/2 sm:w-1/3">
                    <div class="bg-gray-100 flex flex-1 p-3 sm:p-6 items-center justify-center rounded-full">
                        <img src="https://rapidez.io/img/reactive-search.svg" alt="Reactive Search" loading="lazy" class="h-5 sm:h-12 mr-3"> Reactive Search
                    </div>
                </div>
                <div class="flex p-1 sm:p-6 w-1/2 sm:w-1/3">
                    <div class="bg-gray-100 flex flex-1 p-3 sm:p-6 items-center justify-center rounded-full">
                        <img src="https://rapidez.io/img/justbetter.svg" alt="JustBetter" loading="lazy" class="h-5 sm:h-14">
                    </div>
                </div>
                <div class="flex p-1 sm:p-6 w-1/2 sm:w-1/3">
                    <div class="bg-gray-100 flex flex-1 p-3 sm:p-6 items-center justify-center rounded-full">
                        <img src="https://rapidez.io/img/magento.svg" alt="Magento" loading="lazy" class="h-5 sm:h-12">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="usps relative z-10 mb-6 sm:mb-32 mt-6" id="features">
        <div class="max-w-7xl mx-auto px-6 sm:px-6 w-full z-10 relative">
            <h2 class="text-3xl font-extrabold tracking-tight sm:text-4xl text-center mt-12">
                <span class="bg-clip-text text-secondary-100 pb-1">Why</span>
                <span class="bg-clip-text text-transparent bg-gradient-to-b from-primary-100 to-primary-200 pb-2">you should use Rapidez</span>
            </h2>
            <div class="flex flex-wrap sm:-mx-6 mt-10 lg:mt-24">
                <div class="w-full sm:w-1/2 lg:w-1/3 sm:px-6 mb-12">
                    <svg class="h-8 mb-6 text-secondary-100" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z"></path></svg>
                    <h4 class="text-primary-200 font-bold antialiased mb-3">Unique selling point</h4>
                    <p class="text-sm antialiased leading-normal text-primary-100 text-opacity-60">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque perspiciatis unde. </p>
                </div>
                <div class="w-full sm:w-1/2 lg:w-1/3 sm:px-6 mb-12">
                    <svg class="h-8 mb-6 text-secondary-100" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z"></path></svg>
                    <h4 class="text-primary-200 font-bold antialiased mb-3">Unique selling point</h4>
                    <p class="text-sm antialiased leading-normal text-primary-100 text-opacity-60">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque perspiciatis unde. </p>
                </div>
                <div class="w-full sm:w-1/2 lg:w-1/3 sm:px-6 mb-12">
                    <svg class="h-8 mb-6 text-secondary-100" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z"></path></svg>
                    <h4 class="text-primary-200 font-bold antialiased mb-3">Unique selling point</h4>
                    <p class="text-sm antialiased leading-normal text-primary-100 text-opacity-60">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque perspiciatis unde. </p>
                </div>
                <div class="w-full sm:w-1/2 lg:w-1/3 sm:px-6 mb-12">
                    <svg class="h-8 mb-6 text-secondary-100" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z"></path></svg>
                    <h4 class="text-primary-200 font-bold antialiased mb-3">Unique selling point</h4>
                    <p class="text-sm antialiased leading-normal text-primary-100 text-opacity-60">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque perspiciatis unde. </p>
                </div>
                <div class="w-full sm:w-1/2 lg:w-1/3 sm:px-6 mb-12">
                    <svg class="h-8 mb-6 text-secondary-100" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z"></path></svg>
                    <h4 class="text-primary-200 font-bold antialiased mb-3">Unique selling point</h4>
                    <p class="text-sm antialiased leading-normal text-primary-100 text-opacity-60">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque perspiciatis unde. </p>
                </div>
                <div class="w-full sm:w-1/2 lg:w-1/3 sm:px-6 mb-12">
                    <svg class="h-8 mb-6 text-secondary-100" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z"></path></svg>
                    <h4 class="text-primary-200 font-bold antialiased mb-3">Unique selling point</h4>
                    <p class="text-sm antialiased leading-normal text-primary-100 text-opacity-60">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque perspiciatis unde. </p>
                </div>
            </div>
        </div>
    </div>



    <div class="bg-white">
        <img src="/img/rapidez-component-breaker-rounded.svg" class="w-full block -mb-px">
    </div>



    <div class="relative z-10 bg-gray-100 pt-16 sm:pt-32" id="faq" >
        <div class="max-w-7xl mx-auto px-6 sm:px-6 w-full z-10 relative">
            <h2 class="text-3xl font-extrabold tracking-tight sm:text-4xl text-center">
                <span class="bg-clip-text text-transparent bg-gradient-to-b from-primary-100 to-primary-200 pb-2">Frequently asked</span>
                <span class="bg-clip-text text-secondary-100 pb-1">questions</span>
            </h2>
            <div class="flex flex-wrap sm:-mx-6 pb-8 sm:pb-32 pt-12 sm:pt-24">
                <div class="w-full sm:w-1/2 sm:px-6 mb-12">
                    <h4 class="text-primary-200 font-bold antialiased mb-3">Why is it so fast?</h4>
                    <p class="leading-normal text-primary-100 text-opacity-60 antialiased">Because we do not use the whole frontend stack from Magento. Just Laravel which queries the Magento database directly and the Magento REST API / GraphQL for other parts like the cart and checkout. Category filters are so fast because of Reactive Search which uses Elasticsearch as database. For the smooth page transitions we use Turbolinks.</p>
                </div>
                <div class="w-full sm:w-1/2 sm:px-6 mb-12">
                    <h4 class="text-primary-200 font-bold antialiased mb-3">Why headless and not a PWA?</h4>
                    <p class="leading-normal text-primary-100 text-opacity-60 antialiased">Do you really need a offline experience on your webshop? PWA makes things more complicated then necessary.</p>
                </div>
                <div class="w-full sm:w-1/2 sm:px-6 mb-12">
                    <h4 class="text-primary-200 font-bold antialiased mb-3">Do I need to know Vue?</h4>
                    <p class="leading-normal text-primary-100 text-opacity-60 antialiased">No, Vue is only used for some functional frontend components like the cart. All Vue components are "renderless" so most likely you never need to touch them because all the HTML is in the Blade files. But some basic knowledge of Vue could be useful.</p>
                </div>
                <div class="w-full sm:w-1/2 sm:px-6 mb-12">
                    <h4 class="text-primary-200 font-bold antialiased mb-3">Why query the Magento database instead of using GraphQL?</h4>
                    <p class="leading-normal text-primary-100 text-opacity-60 antialiased">Speed; and not all data is available through GraphQL. The Magento database stucture isn't changed much over the years and we're just using it to get data. For inserting and updating we use the REST API or GraphQL.</p>
                </div>
                <div class="w-full sm:w-1/2 sm:px-6 mb-12">
                    <h4 class="text-primary-200 font-bold antialiased mb-3">TailwindCSS is used, do I need to use it?</h4>
                    <p class="leading-normal text-primary-100 text-opacity-60 antialiased">No, you do not need to use it. You are completely free to use whatever you want. We like it so we used it for basic styling.</p>
                </div>
                <div class="w-full sm:w-1/2 sm:px-6 mb-12">
                    <h4 class="text-primary-200 font-bold antialiased mb-3">Is it production ready?</h4>
                    <p class="leading-normal text-primary-100 text-opacity-60 antialiased">If it fits your needs; yes. Please let us know if you're missing something.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-gray-100">
        <img src="/img/rapidez-smoke.svg" class="w-full block -mb-px">
    </div>

        <!-- This example requires Tailwind CSS v2.0+ -->
    <div class="mt-0 sm:-mt-32 relative z-20">
        <div class="max-w-7xl mx-auto py-12 px-4 mb-10 text-center">
            <div class="flex items-center justify-center mb-10">
                <img src="https://raw.githubusercontent.com/rapidez/art/master/r.svg" alt="Rapidez" class="w-16">
            </div>
            <h2 class="text-3xl font-extrabold tracking-tight sm:text-5xl">
                <span class="block bg-clip-text text-transparent bg-gradient-to-b from-primary-100 to-primary-200 pb-1">Want to experience</span>
                <span class="block bg-clip-text text-transparent bg-gradient-to-b from-primary-100 to-primary-200 pb-2">the fastest magento frontend?</span>
            </h2>
            <div class="mt-8 flex justify-center items-center sm:flex-wrap sm:flex-row flex-col">
                <div class="inline-flex rounded-md shadow">
                    <a href="#" class="block w-full py-3 px-6 rounded-md bg-secondary-100 text-white font-medium border border-transparent">
                        Explore Rapidez demo
                    </a>
                </div>
                <div class="sm:mt-0 mt-4 sm:ml-4 inline-flex">
                    <a href="#" class="whitespace-nowrap inline-flex items-center justify-center border border-transparent px-6 py-3 rounded-md shadow-sm text-base text-white bg-gradient-to-b from-primary-100 to-primary-200">
                        Install Rapidez now
                    </a>
                </div>
            </div>
        </div>
    </div>



    <!-- This example requires Tailwind CSS v2.0+ -->
    <footer class="bg-white border-t border-gray-200">
        <div class="max-w-7xl mx-auto py-12 px-4 overflow-hidden sm:px-6 lg:px-8 mb-6">
            <nav class="-mx-5 -my-2 flex flex-wrap justify-center" aria-label="Footer">
                <div class="px-5 py-2">
                    <a href="#" class="text-lg text-gray-500 hover:text-gray-900">
                        About
                    </a>
                </div>
                <div class="px-5 py-2">
                    <a href="#features" class="text-lg text-gray-500 hover:text-gray-900">
                        Features
                    </a>
                </div>
                <div class="px-5 py-2">
                    <a href="#faq" class="text-lg text-gray-500 hover:text-gray-900">
                        FAQ
                    </a>
                </div>
                <div class="px-5 py-2">
                    <a href="http://docs.rapidez.io/" target="_blank" class="text-lg text-gray-500 hover:text-gray-900">
                        Docs
                    </a>
                </div>
                <div class="px-5 py-2">
                    <a href="#" class="text-lg text-gray-500 hover:text-gray-900">
                        Changelog
                    </a>
                </div>
                <div class="px-5 py-2">
                    <a href="#" class="text-lg text-gray-500 hover:text-gray-900">
                        Roadmap
                    </a>
                </div>
            </nav>
            <div class="flex flex-wrap justify-center items-center mt-8">
                <a class="block mr-7 text-primary-200 opacity-50 hover:opacity-100 transition duration-100 ease-in-out" href="https://twitter.com/rapidez_io">
                    <svg class="w-10 h-10" fill="currentcolor" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84"></path></svg>
                </a>

                <a class="block mr-7 text-primary-200 opacity-50 hover:opacity-100 transition duration-100 ease-in-out" href="https://github.com/rapidez/rapidez">
                    <svg class="w-8 h-8" fill="currentcolor" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12"></path></svg>
                </a>

                <a class="block text-primary-200 opacity-50 hover:opacity-100 transition duration-100 ease-in-out" href="/slack">
                    <svg class="w-8 h-8" fill="currentcolor" enable-background="new 0 0 2447.6 2452.5" viewBox="0 0 2447.6 2452.5" xmlns="http://www.w3.org/2000/svg"><g clip-rule="evenodd" fill-rule="evenodd"><path d="m897.4 0c-135.3.1-244.8 109.9-244.7 245.2-.1 135.3 109.5 245.1 244.8 245.2h244.8v-245.1c.1-135.3-109.5-245.1-244.9-245.3.1 0 .1 0 0 0m0 654h-652.6c-135.3.1-244.9 109.9-244.8 245.2-.2 135.3 109.4 245.1 244.7 245.3h652.7c135.3-.1 244.9-109.9 244.8-245.2.1-135.4-109.5-245.2-244.8-245.3z"/><path d="m2447.6 899.2c.1-135.3-109.5-245.1-244.8-245.2-135.3.1-244.9 109.9-244.8 245.2v245.3h244.8c135.3-.1 244.9-109.9 244.8-245.3zm-652.7 0v-654c.1-135.2-109.4-245-244.7-245.2-135.3.1-244.9 109.9-244.8 245.2v654c-.2 135.3 109.4 245.1 244.7 245.3 135.3-.1 244.9-109.9 244.8-245.3z"/><path d="m1550.1 2452.5c135.3-.1 244.9-109.9 244.8-245.2.1-135.3-109.5-245.1-244.8-245.2h-244.8v245.2c-.1 135.2 109.5 245 244.8 245.2zm0-654.1h652.7c135.3-.1 244.9-109.9 244.8-245.2.2-135.3-109.4-245.1-244.7-245.3h-652.7c-135.3.1-244.9 109.9-244.8 245.2-.1 135.4 109.4 245.2 244.7 245.3z"/><path d="m0 1553.2c-.1 135.3 109.5 245.1 244.8 245.2 135.3-.1 244.9-109.9 244.8-245.2v-245.2h-244.8c-135.3.1-244.9 109.9-244.8 245.2zm652.7 0v654c-.2 135.3 109.4 245.1 244.7 245.3 135.3-.1 244.9-109.9 244.8-245.2v-653.9c.2-135.3-109.4-245.1-244.7-245.3-135.4 0-244.9 109.8-244.8 245.1 0 0 0 .1 0 0"/></g></svg>
                </a>
            </div>
        </div>
    </footer>
</body>
</html>
