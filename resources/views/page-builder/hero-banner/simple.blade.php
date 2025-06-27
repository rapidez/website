<div id="{{ $component_id }}" class="component hero relative z-10 mt-[-125px] w-full overflow-hidden pt-[125px]">
    <div class="absolute inset-0 h-full w-full bg-gradient-to-br from-secondary-900 from-30% to-secondary-100"></div>
    <div class="relative z-10 mx-auto flex max-w-7xl items-center justify-center px-6 pb-10 lg:py-20">
        @if (($heading ?? '') || ($subheading ?? ''))
            <h1 class="mt-4 text-center text-4xl font-extrabold tracking-tighter text-white lg:mt-6 lg:text-6xl lg:leading-none">
                <span class="block text-white/50">{!! $heading ?? '' !!}</span>
                <span class="pb-2 text-white lg:block">
                    {!! $subheading ?? '' !!}
                </span>
            </h1>
        @endif
    </div>
    <div class="relative -mb-px mt-auto block w-full">
        <x-icon-smoke-small class="h-auto w-full" />
    </div>
</div>
