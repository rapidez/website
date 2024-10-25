<div class="relative z-10 bg-gray-100 pt-16 sm:pt-32" id="{{ $component_id }}">
    <div class="relative z-10 mx-auto w-full max-w-7xl px-6 sm:px-6">
        @if (($title_heading ?? false) || ($title_subheading ?? false))
            <h2 class="text-center text-3xl font-extrabold tracking-tight sm:text-4xl">
                @if ($title_heading ?? false)
                    <span class="bg-gradient-to-b from-primary-100 to-primary-200 bg-clip-text pb-2 text-transparent">{{ $title_heading }}</span>
                @endif
                @if ($title_subheading ?? false)
                    <span class="bg-clip-text pb-1 text-secondary-100">
                        {{ $title_subheading }}
                    </span>
                @endif
            </h2>
        @endif
        @if ($columns ?? false)
            <div class="flex flex-wrap pb-8 pt-12 sm:-mx-6 sm:pb-32 sm:pt-24">
                @foreach ($columns as $column)
                    <x-faq-item title="{{ $column->title ?? '' }}">
                        {!! $column->text !!}
                    </x-faq-item>
                @endforeach
            </div>
        @endif
    </div>
</div>
