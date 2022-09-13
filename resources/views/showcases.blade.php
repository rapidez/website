@extends('layout.site')

@section('title', 'Rapidez Showcases')
@section('description', 'Awesome webshops build with Rapidez')

@section('content')
    <div class="bg-gray-100">
        <div class="container max-w-7xl mx-auto pt-20 px-6">
            <h1 class="text-3xl sm:text-4xl font-extrabold tracking-tight text-center text-secondary-100">Showcases</h1>
            <p class="text-center">Some awesome Rapidez projects!</p>
            <div class="grid sm:grid-cols-2 gap-10 mt-20">
                @foreach(File::files(resource_path('views/content/showcases')) as $file)
                    <div class="prose max-w-none">
                        {!! Str::replaceLast('<a', '<a target="_blank" class="whitespace-nowrap inline-flex items-center content-center justify-center border border-transparent px-6 py-3 rounded-full text-base !font-bold !text-white !no-underline bg-secondary-100 opacity-100 hover:opacity-80 transition duration-150 ease-in-out"', Str::markdown(file_get_contents($file->getPathname()))) !!}
                    </div>
                @endforeach
            </div>
            <div class="text-center py-20">
                <a href="https://github.com/rapidez/website/tree/master/resources/views/content/showcases" target="_blank" class="bg-gradient-to-b from-primary-100 to-primary-200 w-full py-3 px-6 rounded-full text-white font-bold border border-transparent opacity-100 hover:opacity-70 transition duration-150 ease-in-out">
                    Add your project
                </a>
            </div>
        </div>
    </div>
    @include('partials.seperator-clouds')
    @include('partials.call-to-action')
@endsection
