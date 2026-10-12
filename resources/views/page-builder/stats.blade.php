<div id="{{ $component_id }}" class="component stats relative z-10">
    <div class="relative z-10 mx-auto w-full max-w-7xl px-6 sm:px-6">
        @if ($title_heading)
            <div class="text-center text-3xl font-extrabold tracking-tight text-heading prose-strong:text-secondary-100 sm:text-4xl">
                {!! $title_heading !!}
            </div>
        @endif
        @if ($text)
            <div class="mt-5 text-center text-primary-100">{!! $text !!}</div>
        @endif
        @if ($items)
            <div class="mt-10 grid grid-cols-2 gap-x-6 gap-y-10 text-center sm:grid-cols-4 lg:mt-16">
                @foreach ($items as $item)
                    <div>
                        <div class="whitespace-nowrap text-4xl font-extrabold tracking-tight text-secondary-100 sm:text-5xl">
                            {{ $item->value }}
                        </div>
                        <div class="mt-2 text-sm text-primary-100 text-opacity-60 sm:text-base">
                            {{ $item->label }}
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
</div>
