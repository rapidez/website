@props(['title'])

<div class="mb-12 w-full sm:w-1/2 sm:px-6">
    <h4 class="mb-3 font-bold text-primary-200 antialiased">{!! $title !!}</h4>
    <div class="leading-normal text-primary-100 text-opacity-60 antialiased">{!! $slot !!}</div>
</div>
