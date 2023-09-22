@props(['title', 'category', 'overview', 'image' => '/img/rapidez.png'])
@if ($overview ?? false)
    <div class="flex flex-col gap-8">
        <img class="rounded-lg object-cover" src="{{ $image }}" alt="" />
        <div class="flex flex-col self-center">
            <span class="text-sm text-secondary-100">{{ $category }}</span>
            <h3 class="mt-2 text-xl font-semibold text-cyan-900">{{ $title }}</h3>
            @isset($short_description)
                <span class="mt-4 line-clamp-2 text-sm text-inactive">{{ $short_description }}</span>
            @endisset
        </div>
    </div>
@else
    @section('title', $title . ' - Rapidez')
    <div class="prose flex max-w-none flex-col">
        <span class="text-sm text-secondary-100">{{ $category }}</span>
        <h3 class="mt-2 mb-0 text-4xl font-semibold text-cyan-900">{{ $title }}</h3>
        @isset($slot)
            <article>{{ $slot }}</article>
        @endisset
    </div>
@endif
