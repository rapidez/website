@props(['logo'])
<a {{ $attributes->merge(['target' => '_blank'])->class('flex flex-col gap-4 rounded-lg border border-gray-200 px-6 py-8') }}>
    <x-icon :name="$logo" class="max-h-7"/>
</a>
