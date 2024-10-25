<div id="{{ $component_id }}" class="component faq relative z-10 bg-gray-100 pt-16 sm:pt-32">
    <div class="relative z-10 mx-auto w-full max-w-7xl px-6 sm:px-6">
        @if ($title_heading)
            <div class="text-center text-3xl font-extrabold tracking-tight text-heading prose-strong:text-secondary-100 sm:text-4xl">
                {!! $title_heading !!}
            </div>
        @endif
        @if ($columns)
            <div class="flex flex-wrap pb-8 pt-12 sm:-mx-6 sm:pb-32 sm:pt-24">
                @foreach ($columns as $column)
                    <x-faq-item :title="$column->title">
                        {!! $column->text !!}
                    </x-faq-item>
                @endforeach
            </div>
        @endif
    </div>
</div>
