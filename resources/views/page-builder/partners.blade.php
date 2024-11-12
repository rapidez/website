<div id="{{ $component_id }}" class="component mx-auto flex max-w-5xl flex-col items-center px-6">
    @if ($title_heading)
        <div class="text-3xl font-semibold text-heading prose-strong:text-secondary-100 md:text-4xl">
            {!! $title_heading !!}
        </div>
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
                        <x-slot name="label" class="first-of-type:rounded-l-lg last-of-type:rounded-r-lg">
                            {{ $column->title }}
                        </x-slot>
                    @endif
                    @if ($column->cards)
                        <div class="grid gap-x-5 gap-y-6 md:grid-cols-center-3">
                            @foreach ($column->cards ?? [] as $card)
                                <x-package.card
                                    href="{{ $card->link ?? '#' }}"
                                    target="{{ $card->open_in_new_tab ? '_blank' : '_self' }}"
                                    logo="{{ $card->raw('icon') ?? '' }}"
                                    title="{{ $card->link ?? '' }}"
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
