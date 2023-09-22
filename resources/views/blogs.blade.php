@extends('layout.site')

@section('title', 'Rapidez Blog')
@section('description', 'The latest Rapidez news')

@section('content')
    <div class="relative py-16">
        <div class="absolute inset-x-0 bottom-0 h-96 bg-gray-100"></div>
        <div class="container relative mx-auto max-w-7xl px-6">
            <h1 class="text-3xl font-extrabold text-secondary-100 mb-5">Blog</h1>
            @php($blogs = File::files(resource_path('views/content/blogs')))

            <div class="flex gap-8">
                @foreach (array_slice($blogs, 0, 1) as $file)
                    @php($name = Str::of($file->getFilename())->replace('.blade.php', ''))
                    <a href="/blog/{{ $name }}" class="flex w-full [&>*>div>h3]:text-4xl [&>*>img]:h-[416px]">
                        @include('content.blogs.' . $name, ['overview' => true])
                    </a>
                @endforeach
                @if ($blogs > 1)
                    <div class="flex w-2/3 flex-col gap-8">
                        @foreach (array_slice($blogs, 1, 2) as $file)
                            @php($name = Str::of($file->getFilename())->replace('.blade.php', ''))
                            <a href="/blog/{{ $name }}" class="flex h-48 [&>*>img]:aspect-square [&>*]:flex-row [&>*]:gap-8">
                                @include('content.blogs.' . $name, ['overview' => true])
                            </a>
                        @endforeach
                    </div>
                @endif
            </div>
            @if ($blogs > 3)
                <div class="mt-16 grid grid-cols-2 gap-x-8 gap-y-16 border-t pt-16">
                    @foreach (array_slice($blogs, 3) as $file)
                        @php($name = Str::of($file->getFilename())->replace('.blade.php', ''))
                        <a href="/blog/{{ $name }}" class="flex">
                            @include('content.blogs.' . $name, ['overview' => true])
                        </a>
                    @endforeach
                </div>
            @endif
        </div>
    </div>
    @include('partials.seperator-clouds')
    @include('partials.call-to-action')
@endsection
