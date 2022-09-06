<div class="relative flex flex-col mb-12 sm:mb-32"@isset($id) id="{{ $id }}"@endisset>
    <div class="max-w-7xl mx-auto px-6 sm:px-6 w-full z-10 relative">
        <h2 class="text-3xl font-extrabold tracking-tight sm:text-4xl text-center mb-0 sm:mt-0 mt-10">
            <span class="bg-clip-text text-secondary-100 pb-1">{{ $title[0] }}</span>
            @isset($title[1])
                <span class="bg-clip-text text-transparent bg-gradient-to-b from-primary-100 to-primary-200 pb-2">
                    {{ $title[1] }}
                </span>
            @endisset
        </h2>
        @isset($subtitle)
            <p class="text-primary-100 text-center mt-5">{!! $subtitle !!}</p>
        @endisset
        <div class="flex flex-wrap mt-6 lg:mt-14 sm:text-lg -mx-1 sm:-mx-6 text-gray-400 justify-center">
            @foreach($logos as $logo)
                <div class="flex p-1 sm:p-6 w-full sm:w-1/3">
                    <a href="{{ $logo['href'] }}" target="_blank" class="bg-gray-100 flex flex-1 p-3 sm:p-6 items-center justify-center rounded-full border-2 border-transparent hover:border-secondary-100 transition ease-in-out">
                        <img src="/img/{{ $logo['src'] }}" alt="{{ $logo['alt'] }}" loading="lazy" class="{{ $logo['class'] }}">
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</div>
