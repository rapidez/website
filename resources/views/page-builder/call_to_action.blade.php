<div class="relative z-20 component">
    <div class="max-w-7xl mx-auto py-12 px-4 mb-10 text-center">
        @if($logo ?? false)
            <div class="flex items-center justify-center mb-10">
                @responsive($logo, ['class' => 'w-16', 'loading' => 'lazy'])
            </div>
        @endif
        @if(($title_heading ?? false) || ($title_subheading ?? false))
            <h2 class="text-3xl font-extrabold tracking-tight sm:text-5xl">
                @if($title_heading ?? false)
                    <span class="block bg-clip-text text-transparent bg-gradient-to-b from-primary-100 to-primary-200 pb-1">{{ $title_heading }}</span>
                @endif
                @if($title_subheading ?? false)
                    <span class="block bg-clip-text text-transparent bg-gradient-to-b from-primary-100 to-primary-200 pb-2">
                        {{ $title_subheading }}
                    </span>
                @endif
            </h2>
        @endif
        @if(($buttons ?? false) && ($buttons?->value() ?? false))
            <div class="mt-8 flex justify-center items-center sm:flex-wrap sm:flex-row flex-col">
                @if(isset($buttons->value()[0]))
                    <div class="inline-flex rounded-full">
                        <a href="{{ $buttons->value()[0]->link ?? '' }}" target="{{ $buttons->value()[0]->open_in_new_tab ? '_blank' : '_self' }}" class="bg-gradient-to-b from-primary-100 to-primary-200 block w-full py-3 px-6 rounded-full text-white font-bold border border-transparent opacity-100 hover:opacity-70 transition duration-150 ease-in-out">
                            {{ $buttons->value()[0]->text ?? '' }}
                        </a>
                    </div>
                @endif
                @if(isset($buttons->value()[1]))
                    <div class="sm:mt-0 mt-4 sm:ml-4 inline-flex">
                        <a href="{{ $buttons->value()[1]->link ?? '' }}" target="{{ $buttons->value()[1]->open_in_new_tab ? '_blank' : '_self' }}" class="whitespace-nowrap inline-flex items-center justify-center border border-transparent px-6 py-3 rounded-full text-base font-bold text-white bg-secondary-100 opacity-100 hover:opacity-80 transition duration-150 ease-in-out">
                            {{ $buttons->value()[1]->text ?? '' }}
                        </a>
                    </div>
                @endif
            </div>
        @endif
    </div>
</div>
