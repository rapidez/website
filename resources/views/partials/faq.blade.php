<div class="relative z-10 bg-gray-100 pt-16 sm:pt-32" id="faq" >
    <div class="max-w-7xl mx-auto px-6 sm:px-6 w-full z-10 relative">
        <h2 class="text-3xl font-extrabold tracking-tight sm:text-4xl text-center">
            <span class="bg-clip-text text-transparent bg-gradient-to-b from-primary-100 to-primary-200 pb-2">Frequently asked</span>
            <span class="bg-clip-text text-secondary-100 pb-1">questions</span>
        </h2>
        <div class="flex flex-wrap sm:-mx-6 pb-8 sm:pb-32 pt-12 sm:pt-24">
            <x-faq-item title="Why is it so fast?">
                Because Rapidez does not use the Magento frontend stack. Just Laravel which queries the Magento database directly and the Magento REST API / GraphQL for other parts like the cart and checkout. Category filters are so fast because of Reactive Search which uses Elasticsearch as database. For the smooth page transitions Rapidez uses Turbolinks.
            </x-faq-item>
            <x-faq-item title="Why headless and not a PWA?">
                Do you really need a offline experience on your webshop? PWA makes things more complicated then necessary.
            </x-faq-item>
            <x-faq-item title="Do I need to know Vue?">
                No, Vue is only used for some functional frontend components like the cart. All Vue components are "renderless" so most likely you never need to touch them because all the HTML is in the Blade files. But some basic knowledge of Vue could be useful.
            </x-faq-item>
            <x-faq-item title="TailwindCSS is used, do I need to use it?">
                No, you do not need te use it. You are completely free to use whatever you want. We like it so we used it for basic styling.
            </x-faq-item>
        </div>
    </div>
</div>
