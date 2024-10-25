<div class="relative flex flex-col mb-12 sm:mb-32" :id="$component_id ?? false">
    <div class="max-w-7xl mx-auto px-6 sm:px-6 w-full z-10 relative">
        @if(($title_heading ?? false) || ($title_subheading ?? false))
            <h2 class="text-3xl font-extrabold tracking-tight sm:text-4xl text-center mb-0 sm:mt-0 mt-10">
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
        @if($subtitle ?? false)
            <div class="text-primary-100 text-center mt-5">{!! $subtitle !!}</div>
        @endif
        <div class="flex flex-wrap mt-6 lg:mt-14 sm:text-lg -mx-1 sm:-mx-6 text-gray-400 justify-center">
            @foreach($logos as $logo)
                @if(($logo->link ?? false) || ($logo->logo ?? false))
                    @php($logoClass = ($logo->display_larger ?? false) ? 'h-10 sm:h-12' : 'h-10')
                    <div class="flex p-1 sm:p-6 w-full sm:w-1/3">
                        <a href="{{ $logo->link ?? '' }}" target="{{ $logo->open_in_new_tab ? '_blank' : '_self' }}" class="bg-gray-100 flex flex-1 p-3 sm:p-6 items-center justify-center rounded-full border-2 border-transparent hover:border-secondary-100 transition ease-in-out">
                            @if($logo->logo ?? false)
                                @responsive($logo->logo, ['class' => $logoClass, 'loading' => 'lazy'])
                            @endif
                        </a>
                    </div>
                @endif
            @endforeach
        </div>
    </div>
</div>
