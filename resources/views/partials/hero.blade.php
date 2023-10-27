<!-- start hero -->
<div class="hero relative z-10 w-full overflow-hidden mt-[-125px] pt-[125px]">
    <img src="/img/rapidez-bg.jpg" class="absolute inset-0 h-full w-full"></img>
    <div class="max-w-7xl mx-auto px-6 pb-10 lg:py-20 relative z-10">
        <div class="flex max-lg:flex-col">
            <div class="flex flex-col lg:flex-1">
                <p class="text-white lg:mt-4 text-lg">
                    With Laravel, Vue and Reactive Search
                </p>
                <h1 class="mt-2 tracking-tighter font-extrabold text-white lg:leading-none text-4xl lg:text-6xl">
                    <span class="block text-white/50">Super fast</span>
                    <span class="lg:block text-white pb-2">
                        Headless Magento
                    </span>
                </h1>
                <div class="mt-5 flex flex-col gap-4 items-start">
                    <div class="flex gap-5 items-center">
                        <x-heroicon-o-code class="text-secondary-100 h-8"/>
                        <span class="text-white text-base font-semibold">Compatible with 400+ Magento extensions</span>
                    </div>
                    <div class="flex gap-5 items-center">
                        <x-heroicon-o-code class="text-secondary-100 h-8"/>
                        <span class="text-white text-base font-semibold">Easy development</span>
                    </div>
                    <div class="flex gap-5 items-center">
                        <x-heroicon-o-code class="text-secondary-100 h-8"/>
                        <span class="text-white text-base font-semibold">Open source</span>
                    </div>
                </div>
                <div class="mt-8">
                    @include('partials.newsletter')
                </div>
            </div>
            <div class="lg:flex lg:items-start lg:justify-start mt-1 pt-12">
                <div class="relative lg:w-[500px] w-full">
                    <iframe class="w-full h-full aspect-video rounded-2xl shadow-md" width="560" height="315" src="https://www.youtube.com/embed/AW7ie2mmNiQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <div class="flex flex-wrap items-center gap-6 mt-8 text-white justify-center">
                        <a class="block" href="https://twitter.com/rapidez_io" target="_blank">
                            <x-icon-twitter class="w-10 h-10"/>
                        </a>
                        <a class="block" href="https://github.com/rapidez/rapidez" target="_blank">
                            <x-icon-github class="w-8 h-8"/>
                        </a>
                        <a class="block" href="/slack">
                            <x-icon-slack class="w-8 h-8"/>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="relative mt-auto w-full block -mb-px">
        <x-icon-smoke class="w-full h-auto"/>
    </div>
</div>
