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
                @if (isset($buttons->value()[0]))
                    <div class="inline-flex rounded-full">
                        <a
                            href="{{ $buttons->value()[0]->link ?? '' }}"
                            target="{{ $buttons->value()[0]->open_in_new_tab ? '_blank' : '_self' }}"
                            class="h-12 inline-flex gap-x-2.5 items-center justify-center whitespace-nowrap rounded-full border-2 border-button px-6 text-base font-bold text-heading opacity-100 transition duration-150 ease-in-out hover:opacity-80"
                        >
                            @if ($buttons->value()[0]->icon ?? false)
                                {!! $buttons->value()[0]->icon !!}
                            @endif
                            {{ $buttons->value()[0]->text ?? '' }}
                        </a>
                    </div>
                @endif
                @if (isset($buttons->value()[1]))
                    <div class="inline-flex rounded-full">
                        <a
                            href="{{ $buttons->value()[1]->link ?? '' }}"
                            target="{{ $buttons->value()[1]->open_in_new_tab ? '_blank' : '_self' }}"
                            class="h-12 inline-flex gap-x-2.5 items-center justify-center whitespace-nowrap rounded-full border-2 border-secondary-100 px-6 text-base font-bold text-heading opacity-100 transition duration-150 ease-in-out hover:opacity-80"
                        >
                            @if ($buttons->value()[1]->icon ?? false)
                                {!! $buttons->value()[1]->icon !!}
                            @endif
                            {{ $buttons->value()[1]->text ?? '' }}
                        </a>
                    </div>
                @endif
                @if (isset($buttons->value()[2]))
                    <div class="inline-flex">
                        <a
                            href="{{ $buttons->value()[2]->link ?? '' }}"
                            target="{{ $buttons->value()[2]->open_in_new_tab ? '_blank' : '_self' }}"
                            class="h-12 inline-flex gap-x-2.5 items-center justify-center  w-full rounded-full border-2 border-gray-200 px-6 font-bold text-heading opacity-100 transition duration-150 ease-in-out hover:opacity-70"
                        >
                            @if ($buttons->value()[2]->icon ?? false)
                                {!! $buttons->value()[2]->icon !!}
                            @endif
                            {{ $buttons->value()[2]->text ?? '' }}
                        </a>
                    </div>
                @endif
            </div>
        @endif
    </div>
</div>
