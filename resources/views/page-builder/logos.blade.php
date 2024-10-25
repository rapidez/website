<div id="{{ $component_id }}" class="component relative flex flex-col">
    <div class="relative z-10 mx-auto w-full max-w-7xl px-6 sm:px-6">
        @if ($title_heading || $title_subheading)
            <h2 class="mb-0 mt-10 text-center text-3xl font-extrabold tracking-tight sm:mt-0 sm:text-4xl">
                @if ($title_heading)
                    <span class="bg-clip-text pb-1 text-secondary-100">{{ $title_heading }}</span>
                @endif
                @if ($title_subheading)
                    <span class="bg-gradient-to-b from-primary-100 to-primary-200 bg-clip-text pb-2 text-transparent">
                        {{ $title_subheading }}
                    </span>
                @endif
            </h2>
        @endif
        @if ($subtitle)
            <div class="mt-5 text-center text-primary-100">{!! $subtitle !!}</div>
        @endif
        <div class="-mx-1 mt-6 flex flex-wrap justify-center text-gray-400 sm:-mx-6 sm:text-lg lg:mt-14">
            @foreach ($logos as $logo)
                @if ($logo->link || $logo->logo)
                    @php($logoClass = $logo->display_larger ? 'h-10 sm:h-12' : 'h-10')
                    <div class="flex w-full p-1 sm:w-1/3 sm:p-6">
                        <a
                            href="{{ $logo->link ?? '' }}"
                            target="{{ $logo->open_in_new_tab ? '_blank' : '_self' }}"
                            class="flex flex-1 items-center justify-center rounded-full border-2 border-transparent bg-gray-100 p-3 transition ease-in-out hover:border-secondary-100 sm:p-6"
                        >
                            @if ($logo->logo)
                                @responsive($logo->logo, ['class' => $logoClass, 'loading' => 'lazy'])
                            @endif
                        </a>
                    </div>
                @endif
            @endforeach
        </div>
    </div>
</div>
