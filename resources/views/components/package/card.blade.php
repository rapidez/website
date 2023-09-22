@props(['logo', 'title', 'category'])
<a {{ $attributes }} class="flex flex-col gap-4 rounded-lg border border-gray-200 px-6 py-8">
    <div class="flex justify-between gap-16">
        @isset ($logo)
            <div class="max-h-7 [&>*]:h-full [&>*]:w-full [&>*]:object-contain">
                {{ $logo }}
            </div>
        @endisset
        <x-heroicon-o-arrow-up class="ml-auto h-7 w-7 shrink-0 rotate-45 text-slate-300" />
    </div>
    @isset ($title)
        <h3 class="text-base font-semibold text-cyan-900">
            {{ $title }}
        </h3>
    @endisset
    @if ($slot)
        <span class="text-sm text-inactive h-24 line-clamp-5">
            {{ $slot }}
        </span>
    @endisset
    @isset ($category)
        <span class="mt-4 text-xs font-semibold uppercase tracking-wider text-emerald-400">
            {{ $category }}
        </span>
    @endisset
</a>
