<div class="component container mx-auto flex max-w-7xl flex-col items-center px-6 text-center">
    @if ($title ?? '')
        <div class="text-3xl font-semibold text-heading md:text-4xl prose-strong:text-secondary-100">
            {!! $title !!}
        </div>
    @endif
    @if ($text ?? '')
        <span class="mt-2">
            {!! $text !!}
        </span>
    @endif
    @if (($button_text ?? '') && ($button_link ?? ''))
        <x-button
            href="{{ $button_link }}"
            target="{{ $button_open_in_new_tab ? '_blank' : '_self' }}"
            class="mt-10 bg-primary-100 text-base font-semibold text-white"
        >
            {{ $button_text }}
        </x-button>
    @endif
</div>
