@extends('layout.site')

@section('title', $title ? $title.' - Rapidez showcase' : config('app.name'))
@section('meta_description', isset($subtitle) && $subtitle ? strip_tags($subtitle) : '')

@section('content')
    @include('partials.hero-simple', ['heading' => 'Showcase', 'subheading' => $title])

    <div class="component mx-auto max-w-5xl px-6 pb-20 md:pb-32">
        <a href="/showcases" class="inline-flex items-center gap-x-1 text-sm text-secondary-100 hover:underline">
            <x-icon name="heroicon-o-arrow-left" class="size-4" />
            All showcases
        </a>

        @if ($overview_image)
            <div class="mt-8 overflow-hidden rounded-2xl drop-shadow-toolbar">
                @responsive($overview_image, ['class' => 'w-full object-cover'])
            </div>
        @endif

        <div class="mx-auto mt-12 flex max-w-2xl flex-col items-center text-center">
            @if ($subtitle)
                <div class="text-sm text-secondary-100">{!! $subtitle !!}</div>
            @endif
            <h1 class="mt-2 text-3xl font-semibold text-heading md:text-4xl">{{ $title }}</h1>
            @if ($description)
                <div class="prose mt-6 max-w-none text-inactive prose-a:text-secondary-100">{!! $description !!}</div>
            @endif

            @if ($link)
                <x-button
                    href="{{ $link }}"
                    class="mt-10 bg-primary-100 text-base font-semibold text-white"
                >
                    Visit {{ $title }}
                </x-button>
            @endif
        </div>
    </div>
@endsection
