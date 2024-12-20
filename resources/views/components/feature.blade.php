@props(['title', 'icon'])

<div class="w-full sm:w-1/2 lg:w-1/3 sm:px-6 mb-12">
    @if($icon ?? '')
        <x-icon name="heroicon-{{ $icon }}" class="h-8 mb-6 text-secondary-100"/>
    @endif
    <div class="text-primary-200 font-bold antialiased mb-3">{!! $title !!}</div>
    <div class="text-sm antialiased leading-normal text-primary-100 text-opacity-60 prose-a:text-secondary-100 hover:prose-a:underline">
        {!! $slot !!}
    </div>
</div>
