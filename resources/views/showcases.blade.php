@extends('layout.site')

@section('title', 'Rapidez Showcases')
@section('description', 'Awesome webshops build with Rapidez')

@section('content')
    <div class="container mx-auto max-w-7xl px-6 pt-20">
        <h1 class="text-center text-3xl font-extrabold tracking-tight text-secondary-100 sm:text-4xl">Showcases</h1>
        <p class="text-center">Some awesome Rapidez projects!</p>
        <div class="mt-20 grid gap-28">
            @php($showcases = File::files(resource_path('views/content/showcases')))
            @foreach ($showcases as $file)
                @php($name = Str::of($file->getFilename())->replace('.blade.php', ''))
                @include('content.showcases.' . $name, ['overview' => true])
            @endforeach
        </div>
    </div>
    @include('partials.in-development')
    <div class="container mx-auto flex max-w-7xl flex-col items-center px-6 py-20 md:py-32 text-center">
        <h2 class="text-3xl font-semibold md:text-4xl">
            <span class="text-heading">Your</span>
            <span class="text-secondary-100">project</span>
            <span class="text-heading">here?</span>
        </h2>
        <span class="mt-2">
            Show how Rapidez helped you make an excellent Magento project.
        </span>
        <x-button href="https://github.com/rapidez/website/tree/master/resources/views/content/showcases" target="_blank" class="mt-10 bg-primary-100 text-base font-semibold text-white">
            Add your project
        </x-button>
    </div>
    @include('partials.seperator-logo')
    @include('partials.seperator-clouds')
    @include('partials.call-to-action')
@endsection
