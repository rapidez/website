@extends('layout.site')

@section('title', 'Rapidez Blog')
@section('description', 'The latest Rapidez news')

@section('content')
    <div class="relative py-16">
        <div class="absolute inset-x-0 bottom-0 h-96 bg-gray-100"></div>
        <div class="container relative mx-auto max-w-7xl px-6">
            @php($blogs = File::files(resource_path('views/content/blogs')))

            <div class="flex gap-8 max-lg:flex-col">
                @foreach (array_slice($blogs, 0, 1) as $file)
                    @php($name = Str::of($file->getFilename())->replace('.blade.php', ''))
                    <a href="/blog/{{ $name }}" class="flex w-full [&>*>div>h3]:text-3xl lg:[&>*>div>h3]:text-4xl lg:[&>*>img]:h-[416px]">
                        @include('content.blogs.' . $name, ['overview' => true])
                    </a>
                @endforeach
                @if ($blogs > 1)
                    <div class="flex flex-col gap-8 lg:w-2/3">
                        @foreach (array_slice($blogs, 1, 2) as $file)
                            @php($name = Str::of($file->getFilename())->replace('.blade.php', ''))
                            <a href="/blog/{{ $name }}" class="flex lg:h-48 lg:[&>*>img]:aspect-square [&>*]:gap-8 lg:[&>*]:flex-row">
                                @include('content.blogs.' . $name, ['overview' => true])
                            </a>
                        @endforeach
                    </div>
                @endif
            </div>
            @if ($blogs > 3)
                <div class="mt-16 grid gap-x-8 gap-y-16 lg:grid-cols-2 lg:border-t lg:pt-16">
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
