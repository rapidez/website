<div class="component relative z-20">
    <div class="mx-auto mb-1.5 max-w-7xl px-4 py-12 text-center">
        @if ($logo)
            <div class="mb-10 flex items-center justify-center">
                @responsive($logo, ['class' => 'w-16', 'loading' => 'lazy'])
            </div>
        @endif
        @if ($title_heading)
            <div class="text-pretty mx-auto max-w-3xl pb-1 text-3xl font-extrabold tracking-tight text-heading prose-strong:text-secondary-100 sm:text-5xl">
                {!! $title_heading !!}
            </div>
        @endif
        @if ($buttons && $buttons?->value())
            <div class="mt-8 flex items-center justify-center gap-x-3 gap-y-4 max-sm:flex-col sm:flex-wrap">
                @foreach($buttons ?? [] as $button)
                    <div class="inline-flex rounded-full">
                        <a
                            href="{{ $button->link->value() ?? '' }}"
                            target="{{ $button->open_in_new_tab ? '_blank' : '_self' }}"
                            @class([
                                'h-12 inline-flex gap-x-2.5 items-center justify-center whitespace-nowrap rounded-full border-2 px-6 text-base font-bold text-heading opacity-100 transition duration-150 ease-in-out hover:opacity-80',
                                'border-button' => $button->button_variant->value() === 'outline-green',
                                'border-secondary-100' => $button->button_variant->value() === 'outline-blue',
                                'border-gray-200' => $button->button_variant->value() === 'outline-gray',
                            ])
                        >
                            @if ($button->icon ?? false)
                                <div class="size-8">
                                    {!! $button->icon !!}
                                </div>
                            @endif
                            {{ $button->text }}
                        </a>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
</div>
