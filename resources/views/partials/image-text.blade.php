<div class="mx-auto mb-12 flex max-w-7xl flex-col gap-20 px-6 md:mb-32 md:gap-28">
    <div class="grid items-center gap-x-60 gap-y-6 md:grid-cols-2">
        <div class="flex flex-col items-start max-md:order-last">
            <span class="text-sm text-secondary-100">
                Why did we start with Rapidez
            </span>
            <h2 class="mt-2 text-4xl font-semibold text-heading">
                We became tired of using the impossible front-end of Magento
            </h2>
            <span class="mt-8 text-lg text-inactive">
                Lorem ipsum dolor sit amet consectetur adipiscing elit Ut et massa mi. Aliquam in hendrerit urna. Pellentesque sit amet sapien fringilla, mattis ligula
            </span>
        </div>
        <div class="relative mr-[calc(50%-50vw)] max-md:ml-20">
            <x-icon-angry class="absolute left-0 top-1/2 aspect-square h-52 -translate-y-1/2 translate-x-[-145px] text-gray-100 md:h-72 md:translate-x-[-175px]" />
            <div class="flex flex-col rounded-2xl drop-shadow-toolbar">
                <div class="relative flex gap-3 rounded-t-2xl bg-white p-3 md:px-4 md:py-3.5">
                    @foreach (['hover:bg-red-500', 'hover:bg-amber-500', 'hover:bg-secondary-100'] as $color)
                        <div @class([
                            'aspect-square h-4 rounded-full bg-gray-100 transition md:h-5',
                            $color,
                        ])></div>
                    @endforeach
                </div>
                <img src="/img/code.png" alt="" class="relative mr-auto h-[360px] w-full rounded-bl-2xl object-cover object-left-top md:h-[720px] md:rounded-b-2xl" />
            </div>
        </div>
    </div>

    <div class="grid items-center gap-x-60 gap-y-6 md:grid-cols-2">
        <div class="order-last flex flex-col items-start">
            <span class="text-sm text-secondary-100">
                Easy to use
            </span>
            <h2 class="mt-2 text-4xl font-semibold text-heading">
                So we created Rapidez, a headless Magento 2 based platform
            </h2>
            <span class="mt-8 text-lg text-inactive">
                Lorem ipsum dolor sit amet consectetur adipiscing elit Ut et massa mi. Aliquam in hendrerit urna. Pellentesque sit amet sapien fringilla, mattis ligula
            </span>
            <x-button href="https://docs.rapidez.io/" class="mt-8">View documentation</x-button>
            <div class="mt-16 flex flex-col gap-4 border-t pt-16">
                <a href="#" class="flex items-center gap-3">
                    <x-icon-rocket-sm class="h-5 text-gray-400" />
                    <span>
                        <strong>23</strong>
                        <span class="text-inactive">packages</span>
                    </span>
                    <x-heroicon-o-external-link class="h-4 text-inactive" />
                </a>
                <a href="#" class="flex items-center gap-3">
                    <x-icon-rocket-sm class="h-5 text-gray-400" />
                    <span>
                        <strong class="text-heading">94</strong>
                        <span class="text-inactive">average performance</span>
                    </span>
                    <x-heroicon-o-external-link class="h-4 text-inactive" />
                </a>
                <a href="#" class="flex items-center gap-3">
                    <x-icon-rocket-sm class="h-5 text-gray-400" />
                    <span>
                        <strong class="text-heading">2</strong>
                        <span class="text-inactive">minutes to install</span>
                    </span>
                    <x-heroicon-o-external-link class="h-4 text-inactive" />
                </a>
            </div>
        </div>
        <div class="relative max-md:ml-20 max-md:mr-[calc(50%-50vw)] md:ml-[calc(50%-50vw)]">
            <x-icon-rocket class="absolute h-[300px] -translate-x-56 text-gray-100 max-md:left-0 max-md:top-1/2 max-md:-translate-y-1/2 md:bottom-0 md:right-0 md:h-[570px] md:translate-x-[175px]" />
            <div class="flex flex-col rounded-2xl drop-shadow-toolbar">
                <div class="relative flex gap-3 rounded-t-2xl bg-white p-3 md:px-4 md:py-3.5">
                    @foreach (['hover:bg-red-500', 'hover:bg-amber-500', 'hover:bg-secondary-100'] as $color)
                        <div @class([
                            'aspect-square h-4 rounded-full bg-gray-100 transition md:h-5',
                            $color,
                        ])></div>
                    @endforeach
                </div>
                <video src="/img/ranzijn.mp4" loop autoplay muted class="max-md::mr-auto relative h-[360px] rounded-bl-2xl object-cover object-left-top md:ml-auto md:h-[720px] md:rounded-b-2xl md:object-right-top" />
            </div>
        </div>
    </div>
</div>
