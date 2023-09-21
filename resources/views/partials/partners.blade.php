<div id="partners" class="mx-auto mb-12 flex max-w-5xl flex-col items-center px-6 md:mb-32">
    <h2 class="text-3xl font-semibold md:text-4xl">
        <span class="text-heading">Partners &</span>
        <span class="text-secondary-100">packages</span>
    </h2>
    <span class="mt-6 max-w-md text-center text-sm text-heading">
        Our awesome implementation and technology partners.
        <a href="#" class="underline">Contact us</a> to discuss the possibilities.
    </span>
    <div class="relative mt-12 flex w-full flex-wrap items-start justify-center overflow-hidden pb-5">
        <x-package.group checked>
            <x-slot name="label" class="rounded-l-lg">Payments</x-slot>
            <div class="grid gap-x-5 gap-y-6 md:grid-cols-3">
                <x-package.card href="#" category="Payment Provider" title="Seamless Payments">
                    <x-slot name="logo">
                        <x-icon-pay />
                    </x-slot>
                    No, Vue is only used for some functional frontend components like the cart. All Vue components are "renderless"
                </x-package.card>
                <x-package.card href="#" category="Payment Provider" title="Seamless Payments">
                    <x-slot name="logo">
                        <x-icon-mollie />
                    </x-slot>
                    No, Vue is only used for some functional frontend components like the cart. All Vue components are "renderless"
                </x-package.card>
                <x-package.card href="#" category="Payment Provider" title="Seamless Payments">
                    <x-slot name="logo">
                        <x-icon-multisafepay />
                    </x-slot>
                    No, Vue is only used for some functional frontend components like the cart. All Vue components are "renderless"
                </x-package.card>
            </div>
        </x-package.group>
        <x-package.group>
            <x-slot name="label">Frameworks</x-slot>
            <div class="grid gap-x-5 gap-y-6 md:grid-cols-3">
                <x-package.card href="#" category="Payment Provider" title="Seamless Payments">
                    <x-slot name="logo">
                        <x-icon-pay />
                    </x-slot>
                    No, Vue is only used for some functional frontend components like the cart. All Vue components are "renderless"
                </x-package.card>
                <x-package.card href="#" category="Payment Provider" title="Seamless Payments">
                    <x-slot name="logo">
                        <x-icon-mollie />
                    </x-slot>
                    No, Vue is only used for some functional frontend components like the cart. All Vue components are "renderless"
                </x-package.card>
                <x-package.card href="#" category="Payment Provider" title="Seamless Payments">
                    <x-slot name="logo">
                        <x-icon-multisafepay />
                    </x-slot>
                    No, Vue is only used for some functional frontend components like the cart. All Vue components are "renderless"
                </x-package.card>
            </div>
        </x-package.group>
        <x-package.group>
            <x-slot name="label" class="rounded-r-lg">Packages</x-slot>
            <div class="grid gap-x-5 gap-y-6 md:grid-cols-3">
                <x-package.card href="#" category="Payment Provider" title="Seamless Payments">
                    <x-slot name="logo">
                        <x-icon-pay />
                    </x-slot>
                    No, Vue is only used for some functional frontend components like the cart. All Vue components are "renderless"
                </x-package.card>
                <x-package.card href="#" category="Payment Provider" title="Seamless Payments">
                    <x-slot name="logo">
                        <x-icon-mollie />
                    </x-slot>
                    No, Vue is only used for some functional frontend components like the cart. All Vue components are "renderless"
                </x-package.card>
                <x-package.card href="#" category="Payment Provider" title="Seamless Payments">
                    <x-slot name="logo">
                        <x-icon-multisafepay />
                    </x-slot>
                    No, Vue is only used for some functional frontend components like the cart. All Vue components are "renderless"
                </x-package.card>
            </div>
        </x-package.group>
    </div>
</div>
