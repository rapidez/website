@props(['image' => '', 'title' => ''])
<div class="flex flex-col rounded-2xl border border-gray-200 bg-white/70 px-6 py-8">
    <img src="{{ $image }}" alt="" class="max-h-[70px] max-w-[120px] self-start object-contain" />
    <h3 class="mt-8 text-lg font-semibold text-cyan-900 md:text-2xl">{{ $title }}</h3>
    <div class="prose mt-4 max-w-none text-sm leading-6 text-inactive prose-a:text-inactive">{{ $slot }}</div>
</div>
