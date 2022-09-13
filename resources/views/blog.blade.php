@extends('layout.site')

@section('title', $title.' - Rapidez')

@section('content')
    <div class="bg-gray-100">
        <div class="container max-w-7xl mx-auto pt-20 px-6">
            <div class="prose max-w-none pb-10">
                {!! Str::of($content)
                    ->replace('<h1', '<h1 class="text-3xl sm:text-4xl font-extrabold tracking-tight text-center !text-secondary-100"') !!}
            </div>
        </div>
    </div>
    @include('partials.seperator-clouds')
    @include('partials.call-to-action')
@endsection
