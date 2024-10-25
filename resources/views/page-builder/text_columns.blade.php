<div id="{{ $component_id }}" class="usps component relative z-10">
    <div class="relative z-10 mx-auto w-full max-w-7xl px-6 sm:px-6">
        @if ($title_heading)
            <div class="mt-12 text-heading prose-strong:text-secondary-100 text-center text-3xl font-extrabold tracking-tight sm:text-4xl">
                {!! $title_heading !!}
            </div>
        @endif
        @if ($columns)
            <div class="mt-10 flex flex-wrap sm:-mx-6 lg:mt-24">
                @foreach ($columns as $column)
                    <x-feature title="{!! $column->title ?? '' !!}" icon="{{ $column?->raw('icon') ?? '' }}">
                        {!! $column->text !!}
                    </x-feature>
                @endforeach
            </div>
        @endif
    </div>
</div>
