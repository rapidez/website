<div id="partners" class="mx-auto mb-12 flex max-w-5xl flex-col items-center px-6 md:mb-32">
    <h2 class="text-3xl font-semibold md:text-4xl">
        <span class="text-heading">Partners &</span>
        <span class="text-secondary-100">packages</span>
    </h2>
    <span class="mt-6 max-w-md text-center text-sm text-heading">
        Our awesome implementation and technology partners.
        <a href="mailto:info@rapidez.io" class="underline">Contact us</a> to discuss the possibilities.
    </span>
    <div class="relative mt-12 flex w-full flex-wrap items-start justify-center overflow-hidden pb-5">
        <x-package.group checked>
            <x-slot name="label" class="rounded-l-lg">Packages</x-slot>
            <div class="grid gap-x-5 gap-y-6 md:grid-cols-3">
                <x-package.card href="https://docs.rapidez.io/1.x/packages.html#amasty" logo="amasty"/>
                <x-package.card href="https://docs.rapidez.io/1.x/packages.html#elgentos" logo="elgentos"/>
                <x-package.card href="https://docs.rapidez.io/1.x/packages.html#mageplaza" logo="mageplaza"/>
                <x-package.card href="https://docs.rapidez.io/1.x/packages.html#mirasvit" logo="mirasvit"/>
                <x-package.card href="https://docs.rapidez.io/1.x/packages.html#snowdog" logo="snowdog"/>
                <x-package.card href="https://docs.rapidez.io/1.x/packages.html#rapidez" logo="google"/>
            </div>
        </x-package.group>

        <x-package.group>
            <x-slot name="label" class="">Payments</x-slot>
            <div class="grid gap-x-5 gap-y-6 md:grid-cols-3">
                <x-package.card href="https://github.com/rapidez/paynl" logo="pay"/>
                <x-package.card href="https://github.com/rapidez/mollie" logo="mollie"/>
                <x-package.card href="https://github.com/rapidez/multisafepay" logo="multisafepay"/>
            </div>
        </x-package.group>

        <x-package.group>
            <x-slot name="label" class="rounded-r-lg">CMS</x-slot>
            <div class="grid gap-x-5 gap-y-6 md:grid-cols-3">
                <x-package.card href="https://github.com/rapidez/strapi" logo="strapi"/>
                <x-package.card href="https://github.com/rapidez/statamic" logo="statamic"/>
            </div>
        </x-package.group>
    </div>
</div>
