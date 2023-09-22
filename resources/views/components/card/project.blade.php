@props(['image' => '', 'title' => ''])
<div class="flex flex-col rounded-2xl border border-gray-200 bg-white/70 px-6 py-8">
    <img src="{{ $image }}" alt="" class="max-h-[70px] max-w-[120px] self-start object-contain" />
    <h3 class="text-cyan-900 text-2xl font-semibold mt-8">{{ $title }}</h3>
    <div class="prose max-w-none text-sm leading-6 text-inactive prose-a:text-inactive mt-4">{{ $slot }}</div>
</div>
