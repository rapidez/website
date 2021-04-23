<!-- start hero -->
<div class="hero bg-gray-100 relative md:h-[65vh] lg:h-[100vh] z-10">
    <div class="max-w-7xl mx-auto px-6 sm:px-6 py-12 lg:py-32 relative z-10">
        <div class="pb-32">
            <h1 class="mt-4 tracking-tighter font-extrabold text-white sm:mt-5 sm:leading-none lg:mt-6 text-4xl xs:text-5xl md:text-6xl">
                <span class="block text-secondary-100">Super fast</span>
                <span class="md:block bg-clip-text text-transparent bg-gradient-to-b from-primary-100 to-primary-200 pb-2">
                    Headless Magento.
                </span>
            </h1>
            <p class="mt-6 text-base text-primary-200 text-opacity-75 sm:mt-4 text-xl">
                With Laravel, Vue and Reactive Search
            </p>
            <div class="mt-8">
                @include('partials.newsletter')
                <div class="flex flex-wrap flex-1 items-center mt-6 justify-center sm:justify-start">
                    <a class="block mr-7 text-primary-200" href="https://twitter.com/rapidez_io" target="_blank">
                        <x-icon-twitter class="w-10 h-10"/>
                    </a>
                    <a class="block mr-7 text-primary-200" href="https://github.com/rapidez/rapidez" target="_blank">
                        <x-icon-github class="w-8 h-8"/>
                    </a>
                    <a class="block text-primary-200" href="/slack">
                        <x-icon-slack class="w-8 h-8"/>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="absolute inset-0 top-[-17rem] xl:top-[-21rem] 2xl:top-[-23rem] -mr-8 pointer-events-none flex sm:flex-col flex-row-reverse -mb-32">
        <x-icon-r class="min-w-[900px] sm:min-w-12 max-w-[115rem] 2xl:max-w-[115rem] flex -mt-3 sm:-mt-32 sm:-mr-32 -mr-20 w-full ml-auto opacity-[.04]"/>
    </div>
    <div class="absolute inset-x-0 w-full bottom-0 block -mb-px">
        <x-icon-smoke class="w-full h-auto"/>
    </div>
</div>
