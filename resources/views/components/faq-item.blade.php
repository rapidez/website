@props(['title'])

<div class="w-full sm:w-1/2 sm:px-6 mb-12">
    <h4 class="text-primary-200 font-bold antialiased mb-3">{{ $title }}</h4>
    <div class="leading-normal text-primary-100 text-opacity-60 antialiased">{{ $slot }}</div>
</div>
