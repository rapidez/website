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
                <x-package.card target="_blank" href="https://www.pay.nl" category="Payment Provider" title="Seamless Payments">
                    <x-slot name="logo">
                        <x-icon-pay />
                    </x-slot>
                    All-in-one payment provider. Insights, fast transactions and easy installition.
                </x-package.card>
                <x-package.card target="_blank" href="https://www.mollie.com" category="Payment Provider" title="Payments in Europe">
                    <x-slot name="logo">
                        <x-icon-mollie />
                    </x-slot>
                    The payment provider for every kind of company. Widely used by many different customers.
                </x-package.card>
                <x-package.card target="_blank" href="https://www.multisafepay.com" category="Payment Provider" title="Powerfull provider">
                    <x-slot name="logo">
                        <x-icon-multisafepay />
                    </x-slot>
                    Smart payment solutions for many different kinds of customers.
                </x-package.card>
            </div>
        </x-package.group>

        <x-package.group>
            <x-slot name="label">Frameworks</x-slot>
            <div class="grid gap-x-5 gap-y-6 md:grid-cols-3">
                <x-package.card target="_blank" href="https://www.smile.eu" category="Framework" title="Store locator">
                    <x-slot name="logo">
                        <img src="/img/smile.png" alt=""/>
                    </x-slot>
                    A professional way of displaying the locations of your stores in your Magento webshop.
                </x-package.card>
                <x-package.card target="_blank" href="https://strapi.io/" category="Framework" title="Headless CMS">
                    <x-slot name="logo">
                        <img src="/img/strapi.png" alt=""/>
                    </x-slot>
                    Build to use headless. Super fast and easily build customisable APIs, manage and distribute from anywhere.
                </x-package.card>
                <x-package.card target="_blank" href="https://statamic.com/" category="Framework" title="Powerfull CMS">
                    <x-slot name="logo">
                        <img src="/img/statamic.png" alt=""/>
                    </x-slot>
                    A Larvel based powerfull and super flexible CMS. Many different options and a versatile marketplace for addons.
                </x-package.card>
            </div>
        </x-package.group>
        <x-package.group>
            <x-slot name="label" class="rounded-r-lg">Packages</x-slot>
            <div class="grid gap-x-5 gap-y-6 md:grid-cols-3">
                <x-package.card target="_blank" href="https://amasty.com/" category="Package" title="Magento Solutions">
                    <x-slot name="logo">
                        <img src="/img/amasty.png" alt=""/>
                    </x-slot>
                    Has multiple solutions for making Magento a better E-commerce experience and giving your shop an upgrade.
                </x-package.card>
                <x-package.card target="_blank" href="https://elgentos.nl/" category="Package" title="Server Side Analytics">
                    <x-slot name="logo">
                        <img src="/img/elgentos.png" alt=""/>
                    </x-slot>
                    Solve the problem of discrepancies between Magento revenue reports and the revenue reports in Google Analytics.
                </x-package.card>
                <x-package.card target="_blank" href="https://www.mageplaza.com/" category="Package" title="Blog extension">
                    <x-slot name="logo">
                        <img src="/img/mageplaza.png" alt=""/>
                    </x-slot>
                    A must-have tools for every store owner who wants to manage and posts blogs on their site
                </x-package.card>
                <x-package.card target="_blank" href="https://mageprince.com/" category="Package" title="FAQ Module">
                    <x-slot name="logo">
                        <img src="/img/mageprince.png" alt=""/>
                    </x-slot>
                    Create a dedicated FAQ page. With a collapse/expand feature it is a user-friendly FAQ module.
                </x-package.card>
                <x-package.card target="_blank" href="https://mirasvit.com/" category="Package" title="Magento Extensions">
                    <x-slot name="logo">
                        <img src="/img/mirasvit.png" alt=""/>
                    </x-slot>
                    Use different Magento extensions like Advanced Seo Suite and Knowledge Base.
                </x-package.card>
                <x-package.card target="_blank" href="https://snow.dog/" category="Package" title="Menu Module">
                    <x-slot name="logo">
                        <img src="/img/snowdog.png" alt=""/>
                    </x-slot>
                    A versatile menu module for Magento that can be used for a variety of possibilities.
                </x-package.card>
            </div>
        </x-package.group>
    </div>
</div>
