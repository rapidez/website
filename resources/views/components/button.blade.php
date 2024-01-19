@php
    $tag = $tag ?? ($attributes->has('href') ? 'a' : 'button');
@endphp

<x-tag :is="$tag" {{ $attributes->class('inline-flex items-center rounded-full bg-gray-100 px-6 py-3 text-base text-heading') }}>
    {{ $slot }}
</x-tag>
