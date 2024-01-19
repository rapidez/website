@props(['logo' => false])
<a {{ $attributes->merge(['target' => '_blank'])->class('flex flex-col rounded-lg border border-gray-200 px-6 py-8') }}>
    @if($logo)
        <x-icon :name="$logo" class="max-h-7"/>
    @endisset
    {!! $slot ?? '' !!}
</a>
