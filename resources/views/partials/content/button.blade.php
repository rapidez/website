@if ($button_link && $button_text)
    <x-button
        href="{{ $button_link }}"
        target="{{ isset($open_in_new_tab) && $open_in_new_tab?->value() ? '_blank' : '_self' }}"
        class="mt-8"
    >
        {{ $button_text }}
    </x-button>
@endif
