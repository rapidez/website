@props(['title' => '', 'subtitle' => '', 'url' => '#', 'image' => ''])
<div class="flex items-center gap-x-20 max-md:flex-col md:even:flex-row-reverse lg:gap-x-60">
    <a class="group relative flex-1" href="{{ $url }}" target="_blank">
        <div class="relative flex p-7">
            <img src="/img/stripes.png" alt="" class="absolute inset-0 translate-y-4 transition duration-500 group-hover:-rotate-6" />
            @if($image ?? false)
                @responsive($image, ['class' => 'relative flex-1 translate-y-4 object-contain transition duration-300 group-hover:translate-y-0', 'loading' => 'lazy'])
            @endif
        </div>
        <x-icon-cloud class="pointer-events-none absolute bottom-0 left-1/2 h-full -translate-x-1/2" />
    </a>
    <div class="flex flex-1 flex-col">
        <span class="text-sm text-secondary-100">{!! $subtitle !!}</span>
        <h3 class="mt-2 text-2xl font-semibold text-cyan-900 md:text-3xl">{!! $title !!}</h3>
        <div class="prose mt-8 max-w-none text-sm leading-6 text-inactive prose-a:text-inactive">{!! $slot !!}</div>
    </div>
</div>
