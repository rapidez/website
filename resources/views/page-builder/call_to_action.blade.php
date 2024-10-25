<div class="relative z-20 mt-0 sm:-mt-16">
    <div class="mx-auto mb-10 max-w-7xl px-4 py-12 text-center">
        @if ($logo)
            <div class="mb-10 flex items-center justify-center">
                @responsive($logo, ['class' => 'w-16', 'loading' => 'lazy'])
            </div>
        @endif
        @if (($title_heading) || ($title_subheading))
            <h2 class="text-3xl font-extrabold tracking-tight sm:text-5xl">
                @if ($title_heading)
                    <span class="block bg-gradient-to-b from-primary-100 to-primary-200 bg-clip-text pb-1 text-transparent">{{ $title_heading }}</span>
                @endif
                @if ($title_subheading)
                    <span class="block bg-gradient-to-b from-primary-100 to-primary-200 bg-clip-text pb-2 text-transparent">
                        {{ $title_subheading }}
                    </span>
                @endif
            </h2>
        @endif
        @if (($buttons) && ($buttons?->value()))
            <div class="mt-8 flex max-sm:flex-col items-center justify-center sm:flex-wrap">
                @if (isset($buttons->value()[0]))
                    <div class="inline-flex rounded-full">
                        <a
                            href="{{ $buttons->value()[0]->link ?? '' }}"
                            target="{{ $buttons->value()[0]->open_in_new_tab ? '_blank' : '_self' }}"
                            class="block w-full rounded-full border border-transparent bg-gradient-to-b from-primary-100 to-primary-200 px-6 py-3 font-bold text-white opacity-100 transition duration-150 ease-in-out hover:opacity-70"
                        >
                            {{ $buttons->value()[0]->text ?? '' }}
                        </a>
                    </div>
                @endif
                @if (isset($buttons->value()[1]))
                    <div class="mt-4 inline-flex sm:ml-4 sm:mt-0">
                        <a
                            href="{{ $buttons->value()[1]->link ?? '' }}"
                            target="{{ $buttons->value()[1]->open_in_new_tab ? '_blank' : '_self' }}"
                            class="inline-flex items-center justify-center whitespace-nowrap rounded-full border border-transparent bg-secondary-100 px-6 py-3 text-base font-bold text-white opacity-100 transition duration-150 ease-in-out hover:opacity-80"
                        >
                            {{ $buttons->value()[1]->text ?? '' }}
                        </a>
                    </div>
                @endif
            </div>
        @endif
    </div>
</div>
