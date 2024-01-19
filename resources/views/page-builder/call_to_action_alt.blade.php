<div class="container mx-auto flex max-w-7xl flex-col items-center px-6 py-20 md:py-32 text-center">
    @if($title ?? '')
        <div class="text-3xl font-semibold md:text-4xl text-heading">
            {!! str_replace('<strong', '<strong class="text-secondary-100"', $title) !!}
        </div>
    @endif
    @if($text ?? '')
        <span class="mt-2">
            {!! $text !!}
        </span>
    @endif
    @if(($button_text ?? '') && ($button_link ?? ''))
        <x-button href="{{ $button_link }}" target="{{ $button_open_in_new_tab ? '_blank' : '_self' }}" class="mt-10 bg-primary-100 text-base font-semibold text-white">
            {{ $button_text }}
        </x-button>
    @endif
</div>
