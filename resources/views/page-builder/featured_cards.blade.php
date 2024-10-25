<div class="container relative mx-auto flex max-w-7xl flex-col items-center px-6 pt-20">
    @if (($title_heading ?? false) || ($title_subheading ?? false))
        @if ($title_subheading ?? false)
            <span class="text-center text-sm text-secondary-100">{{ $title_subheading }}</span>
        @endif
        @if ($title_heading ?? false)
            <h2 class="mt-1 text-center text-4xl font-semibold text-cyan-900">
                {{ $title_heading }}
            </h2>
        @endif
    @endif
    <div class="relative mt-7 w-full">
        <div class="absolute left-0 aspect-square w-[500px] -translate-x-1/2 -translate-y-1/2 rounded-full bg-cyan-600 opacity-30 blur-[130px] max-lg:top-0 lg:bottom-0 lg:translate-y-1/2"></div>
        <div class="absolute right-0 aspect-video w-[670px] translate-x-1/2 translate-y-1/2 rounded-full bg-secondary-100 opacity-30 blur-[130px] max-lg:bottom-0 lg:top-0 lg:-translate-y-1/2"></div>
        <div class="relative flex flex-wrap justify-center gap-8 max-lg:flex-col">
            @foreach ($cards as $card)
                <x-card.project :image="$card->image" :title="$card->title">
                    {!! $card->text !!}
                </x-card.project>
            @endforeach
        </div>
    </div>
</div>
