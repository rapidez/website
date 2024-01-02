<div class="usps relative z-10 mb-6 sm:mb-32 mt-6"{{ ($component_id ?? false) ? " id=" . $component_id : "" }}>
    <div class="max-w-7xl mx-auto px-6 sm:px-6 w-full z-10 relative">
        @if(($title_heading ?? false) || ($title_subheading ?? false))
            <h2 class="text-3xl font-extrabold tracking-tight sm:text-4xl text-center mt-12">
                @if($title_heading ?? false)
                    <span class="bg-clip-text text-secondary-100 pb-1">{{ $title_heading }}</span>
                @endif
                @if($title_subheading ?? false)
                    <span class="bg-clip-text text-transparent bg-gradient-to-b from-primary-100 to-primary-200 pb-2">
                        {{ $title_subheading }}
                    </span>
                @endif
            </h2>
        @endif
        @if($columns ?? false)
            <div class="flex flex-wrap sm:-mx-6 mt-10 lg:mt-24">
                @foreach($columns as $column)
                    <x-feature title="{{ $column->title ?? '' }}" icon="{{ $column?->raw('icon') ?? '' }}">
                        {!! $column->text !!}
                    </x-feature>
                @endforeach
            </div>
        @endif
    </div>
</div>
