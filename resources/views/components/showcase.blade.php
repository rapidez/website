@props(['title' => '', 'subtitle' => '', 'url' => '#', 'image' => ''])
{{-- The whole card is clickable through the title link's ::after overlay; wrapping the card in a link would break on links inside the description. --}}
{{-- On hover a full-width band (::before) lights up behind the row; full width so the wide cloud below the image always sits inside it. --}}
<div id="{{ Str::slug($title) }}" class="group relative isolate flex items-center gap-x-20 py-8 before:pointer-events-none before:absolute before:inset-y-0 before:left-1/2 before:-z-10 before:w-screen before:-translate-x-1/2 before:bg-[#f4fbf7] before:opacity-0 before:transition-opacity before:duration-300 hover:before:opacity-100 max-md:flex-col md:even:flex-row-reverse lg:gap-x-60 lg:py-10">
    <div class="relative flex-1">
        <div class="relative flex p-7">
            <img src="/img/stripes.png" alt="" class="absolute inset-0 translate-y-4 transition duration-500 group-hover:-rotate-6" />
            @if($image)
                @responsive($image, ['class' => 'relative flex-1 translate-y-4 object-contain transition duration-300 group-hover:translate-y-0', 'loading' => 'lazy'])
            @endif
        </div>
        {{-- The cloud takes on the row's hover background, so it keeps blending in. --}}
        <x-icon-cloud class="pointer-events-none absolute bottom-0 left-1/2 h-full -translate-x-1/2 [&_path]:transition-colors [&_path]:duration-300 group-hover:[&_path]:fill-[#f4fbf7]" />
    </div>
    <div class="flex flex-1 flex-col">
        <span class="text-sm text-secondary-100">{!! $subtitle !!}</span>
        <h3 class="mt-2 text-2xl font-semibold text-cyan-900 md:text-3xl">
            <a href="{{ $url }}" class="after:absolute after:inset-0">{!! $title !!}</a>
        </h3>
        <div class="prose mt-8 max-w-none text-sm leading-6 text-inactive prose-a:text-inactive [&_a]:relative [&_a]:z-10">{!! $slot !!}</div>
        <span class="mt-6 inline-flex items-center gap-x-1 text-sm font-semibold text-secondary-100">
            View showcase
            <x-icon name="heroicon-o-arrow-right" class="size-4 transition group-hover:translate-x-1" />
        </span>
    </div>
</div>
