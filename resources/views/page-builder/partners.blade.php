<div class="mx-auto mb-12 flex max-w-5xl flex-col items-center px-6 md:mb-32" id="{{ $component_id }}">
    @if (($title_heading) || ($title_subheading))
        <h2 class="text-3xl font-semibold md:text-4xl">
            @if ($title_heading)
                <span class="text-heading">{{ $title_heading }}</span>
            @endif
            @if ($title_subheading)
                <span class="text-secondary-100">
                    {{ $title_subheading }}
                </span>
            @endif
        </h2>
    @endif
    @if ($text)
        <div class="mt-6 max-w-md text-center text-sm text-heading">
            {!! $text !!}
        </div>
    @endif
    @if ($columns)
        <div class="relative mt-12 flex w-full flex-wrap items-start justify-center overflow-hidden pb-5">
            @foreach ($columns as $column)
                <x-package.group :checked="$loop->first">
                    @if ($column->title)
                        <x-slot name="label" class="{{ $loop->first ? 'rounded-l-lg' : ($loop->last ? 'rounded-r-lg' : '') }}">{{ $column->title }}</x-slot>
                    @endif
                    @if ($column->cards)
                        <div class="grid gap-x-5 gap-y-6 md:grid-cols-center-3">
                            @foreach ($column->cards ?? [] as $card)
                                <x-package.card
                                    href="{{ $card->link ?? '#' }}"
                                    target="{{ $card->open_in_new_tab ? '_blank' : '_self' }}"
                                    logo="{{ $card->raw('icon') ?? '' }}"
                                >
                                    @responsive($card->logo, ['class' => 'max-h-7 w-auto mx-auto', 'loading' => 'lazy'])
                                </x-package.card>
                            @endforeach
                        </div>
                    @endif
                </x-package.group>
            @endforeach
        </div>
    @endif
</div>
