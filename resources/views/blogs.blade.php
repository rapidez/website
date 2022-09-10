@extends('layout.site')

@section('title', 'Rapidez Blog')
@section('description', 'The latest Rapidez news')

@section('content')
    <div class="bg-gray-100">
        <div class="container max-w-7xl mx-auto pt-20 px-6">
            <h1 class="text-3xl sm:text-4xl font-extrabold tracking-tight text-center text-secondary-100">Blog</h1>
            @foreach(File::files(resource_path('views/content/blogs')) as $file)
                <div class="prose max-w-none py-10">
                    {!! Str::of(file_get_contents($file->getPathname()))
                        ->markdown()
                        ->replace('<h1', '<h2')
                        ->before('</p>') !!}
                    <div>
                        <a href="/blog/{{ Str::of($file->getFilename())->after('-')->before('.md') }}" class="whitespace-nowrap inline-flex items-center content-center justify-center border border-transparent px-6 py-3 rounded-full text-base !font-bold !text-white !no-underline bg-secondary-100 opacity-100 hover:opacity-80 transition duration-150 ease-in-out mt-5">Read more</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    @include('partials.seperator-clouds')
    @include('partials.call-to-action')
@endsection
