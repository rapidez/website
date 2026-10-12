<div id="{{ $component_id }}" class="component before-after">
    <div class="mx-auto w-full max-w-7xl px-6">
        @if ($title_heading)
            <div class="text-center text-3xl font-extrabold tracking-tight text-heading prose-strong:text-secondary-100 sm:text-4xl">
                {!! $title_heading !!}
            </div>
        @endif
        @if ($text)
            <div class="mx-auto mt-5 max-w-3xl text-center text-primary-100">{!! $text !!}</div>
        @endif
        <div class="mt-10 grid items-start gap-10 md:grid-cols-2 md:gap-8 lg:mt-16">
            @foreach ([[$before_label, $before_image, false], [$after_label, $after_image, true]] as [$label, $image, $isAfter])
                <figure class="flex flex-col gap-4">
                    @if ((string) $label)
                        <figcaption @class([
                            'flex items-center gap-2 font-semibold',
                            'text-secondary-100' => $isAfter,
                            'text-primary-100 text-opacity-60' => ! $isAfter,
                        ])>
                            @if ($isAfter)
                                <x-heroicon-o-check-circle class="size-6 shrink-0" />
                            @else
                                <x-heroicon-o-x-circle class="size-6 shrink-0" />
                            @endif
                            {{ $label }}
                        </figcaption>
                    @endif
                    @if ((string) $image)
                        <div class="drop-shadow-toolbar">
                            @responsive($image, ['class' => 'h-auto w-full'])
                        </div>
                    @endif
                </figure>
            @endforeach
        </div>
    </div>
</div>
