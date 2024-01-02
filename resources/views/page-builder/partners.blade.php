<div class="mx-auto mb-12 flex max-w-5xl flex-col items-center px-6 md:mb-32"{{ ($component_id ?? false) ? " id=" . $component_id : "" }}>
    @if(($title_heading ?? false) || ($title_subheading ?? false))
        <h2 class="text-3xl font-semibold md:text-4xl">
            @if($title_heading ?? false)
                <span class="text-heading">{{ $title_heading }}</span>
            @endif
            @if($title_subheading ?? false)
                <span class="text-secondary-100">
                    {{ $title_subheading }}
                </span>
            @endif
        </h2>
    @endif
    @if($text ?? false)
        <div class="mt-6 max-w-md text-center text-sm text-heading">
            {!! $text !!}
        </div>
    @endif
    @if($columns ?? false)
        <div class="relative mt-12 flex w-full flex-wrap items-start justify-center overflow-hidden pb-5">
            @foreach($columns as $column)
                <x-package.group :checked="$loop->first">
                    @if($column->title ?? false)
                        <x-slot name="label" class="{{ $loop->first ? 'rounded-l-lg' :  ($loop->last ? 'rounded-r-lg' : '')}}">{{ $column->title }}</x-slot>
                    @endif
                    @if($column->cards ?? false)
                        <div class="grid gap-x-5 gap-y-6 md:grid-cols-3">
                            @foreach($column->cards ?? [] as $card)
                                <x-package.card href="{{ $card->link ?? '' }}" logo="{{ $card->raw('icon') ?? '' }}">
                                    @responsive($card->logo, ['class' => 'max-h-7 mx-auto', 'loading' => 'lazy'])
                                </x-package.card>
                            @endforeach
                        </div>
                    @endif
                </x-package.group>
            @endforeach
        </div>
    @endif
</div>
