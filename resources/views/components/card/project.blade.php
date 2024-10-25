@props(['image', 'title'])
<div class="w-full lg:w-1/3 flex flex-col justify-around rounded-2xl border border-gray-200 bg-white/70 px-6 py-8">
    @if($image)
        @responsive($image, ['class' => 'max-h-[70px] max-w-[120px]', 'loading' => 'lazy'])
    @endif
    <div class="">
        <h3 class="mt-8 text-lg font-semibold text-cyan-900 md:text-2xl">{!! $title !!}</h3>
        <div class="prose mt-4 max-w-none text-sm leading-6 text-inactive prose-a:text-inactive">{!! $slot !!}</div>
    </div>
</div>
