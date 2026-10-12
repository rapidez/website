<div id="{{ $component_id }}" class="component">
    @if ($title_heading)
        <div class="mx-auto max-w-7xl px-6 text-center text-3xl font-extrabold tracking-tight text-heading prose-strong:text-secondary-100 sm:text-4xl">
            {!! $title_heading !!}
        </div>
    @endif
    @php($showcases = \Statamic\Statamic::tag('collection:showcases')->fetch()->shuffle())
    @if ($showcases->isNotEmpty())
        {{-- Pure-CSS slider (scroll-snap, no JS). The side padding lines the first card up with the page's content column while the row itself runs edge to edge. --}}
        <div class="mt-10 flex snap-x snap-mandatory gap-6 overflow-x-auto scroll-smooth scroll-px-6 px-6 pb-6 lg:mt-16 lg:scroll-px-[max(1.5rem,calc((100vw_-_80rem)/2_+_1.5rem))] lg:px-[max(1.5rem,calc((100vw_-_80rem)/2_+_1.5rem))] [-webkit-overflow-scrolling:touch] [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-thumb]:bg-gray-200 [&::-webkit-scrollbar-track]:bg-transparent [&::-webkit-scrollbar]:h-1.5">
            @foreach ($showcases as $showcase)
                <a href="{{ $showcase->url }}" class="group flex w-[82%] shrink-0 snap-start flex-col overflow-hidden rounded-2xl border border-gray-200 bg-white transition hover:border-secondary-100 hover:shadow-lg sm:w-[48%] lg:w-[36%] xl:w-[30%]">
                    <div class="relative aspect-[4/3] bg-gray-100">
                        @if ($showcase->overview_image)
                            @responsive($showcase->overview_image, ['class' => 'absolute inset-0 size-full object-contain p-5 transition duration-300 group-hover:scale-[1.03]', 'loading' => 'lazy'])
                        @else
                            <div class="absolute inset-0 flex items-center justify-center">
                                <x-icon-r class="size-16 opacity-20" />
                            </div>
                        @endif
                    </div>
                    <div class="flex flex-1 flex-col p-6">
                        <h3 class="text-lg font-semibold text-heading md:text-xl">{{ $showcase->title }}</h3>
                        @if ((string) $showcase->subtitle)
                            {{-- Plain text: a link in the subtitle would be a link inside the card's link. --}}
                            <div class="mt-2 text-sm leading-6 text-inactive">{{ strip_tags($showcase->subtitle) }}</div>
                        @endif
                        <span class="mt-auto inline-flex items-center gap-x-1 pt-5 text-sm font-semibold text-secondary-100">
                            View showcase
                            <x-icon name="heroicon-o-arrow-right" class="size-4 transition group-hover:translate-x-1" />
                        </span>
                    </div>
                </a>
            @endforeach
        </div>
    @endif
</div>
