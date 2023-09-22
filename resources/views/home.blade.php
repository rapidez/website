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
    @include('partials.image-text')
    @include('partials.features')
    @include('partials.seperator-logo')
    @include('partials.faq')
    @include('partials.seperator-clouds')
    @include('partials.partners')
    @include('partials.call-to-action')
@endsection
