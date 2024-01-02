@if(($button_link ?? false) && ($button_text ?? false))
    <x-button href="{{ $button_link }}" class="mt-8">{{ $button_text }}</x-button>
@endif
