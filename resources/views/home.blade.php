@extends('layout.site')

@section('content')
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
@endsection
