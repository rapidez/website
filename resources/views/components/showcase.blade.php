@props(['title' => '', 'subtitle' => '', 'url' => '#', 'image' => ''])
<div class="flex items-center gap-x-20 lg:gap-x-60 max-md:flex-col md:even:flex-row-reverse">
    <a class="flex-1 relative group" href="{{ $url }}">
        <div class="relative flex p-7">
            <img src="/img/stripes.png" alt="" class="absolute inset-0 translate-y-4 group-hover:-rotate-6 transition duration-500" />
            <img src="{{ $image }}" alt="" class="relative flex-1 object-contain translate-y-4 group-hover:translate-y-0 transition duration-300" />
        </div>
        <x-icon-cloud class="absolute left-1/2 bottom-0 h-full -translate-x-1/2 pointer-events-none" />
    </a>
    <div class="flex flex-1 flex-col">
        <span class="text-sm text-secondary-100">{{ $subtitle }}</span>
        <h2 class="mt-2 text-3xl font-semibold text-cyan-900">{{ $title }}</h2>
        <div class="prose mt-8 max-w-none leading-6 text-sm text-inactive prose-a:text-inactive">{{ $slot }}</div>
        @if ($brands ?? '')
            <div class="mt-8 flex flex-wrap gap-2 [&>*]:object-contain ">
                {{ $brands }}
            </div>
        @endif
    </div>
</div>
