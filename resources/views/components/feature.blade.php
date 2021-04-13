@props(['title', 'icon'])

<div class="w-full sm:w-1/2 lg:w-1/3 sm:px-6 mb-12">
    <x-icon name="{{ 'heroicon-o-' . $icon }}" class="h-8 mb-6 text-secondary-100"/>
    <h4 class="text-primary-200 font-bold antialiased mb-3">{{ $title }}</h4>
    <p class="text-sm antialiased leading-normal text-primary-100 text-opacity-60">{{ $slot }}</p>
</div>
