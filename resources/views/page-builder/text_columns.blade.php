<div class="usps relative z-10 mb-6 mt-6 sm:mb-32" :id="$component_id ?? false">
    <div class="relative z-10 mx-auto w-full max-w-7xl px-6 sm:px-6">
        @if (($title_heading ?? false) || ($title_subheading ?? false))
            <h2 class="mt-12 text-center text-3xl font-extrabold tracking-tight sm:text-4xl">
                @if ($title_heading ?? false)
                    <span class="bg-clip-text pb-1 text-secondary-100">{{ $title_heading }}</span>
                @endif
                @if ($title_subheading ?? false)
                    <span class="bg-gradient-to-b from-primary-100 to-primary-200 bg-clip-text pb-2 text-transparent">
                        {{ $title_subheading }}
                    </span>
                @endif
            </h2>
        @endif
        @if ($columns ?? false)
            <div class="mt-10 flex flex-wrap sm:-mx-6 lg:mt-24">
                @foreach ($columns as $column)
                    <x-feature title="{{ $column->title ?? '' }}" icon="{{ $column?->raw('icon') ?? '' }}">
                        {!! $column->text !!}
                    </x-feature>
                @endforeach
            </div>
        @endif
    </div>
</div>
