<x-blog title="State of the Union" category="Update" :overview="$overview">
    <x-slot name="short_description">
        Just like the president of the United States gives a speech each year about the state of the country; we'd like to share the state of Rapidez with you. The first commit was in February 2020, where a...
    </x-slot>

    <p>Just like the president of the United States gives a speech each year about the state of the country; we'd like to share the state of Rapidez with you. The first commit was in February 2020, where are we now? How is it going and what to expect for the future?</p>
    <h2>Why did we start with Rapidez?</h2>
    <p>Magento has been around for years, a great system but outdated in some regards; for example the frontend. With modern technologies like Laravel, Vue and TailwindCSS around we see a lot of developers wanting to switch. What if we could use those technologies with Magento? Our first approach was to keep the checkout in Magento and move the product, category and content pages to Laravel. But quickly we were getting session and routing issues so we moved on to fully headless! Manage everything from the Magento backend and have a seperated frontend.</p>
    <p>We use the Eloquent ORM from Laravel to query the Magento database to get product, category and content information because it's the fastest way. We could use the REST API or GraphQL to get the same information but that would slow everything down as every requests would go through Magento. For all other interactions like adding products to the cart and the checkout we use the REST API and GraphQL from Magento.</p>
    <p>Another important part of a webshop is fast filtering and searching. For that task we came across <a href="https://opensource.appbase.io/reactivesearch/vue">Reactive Search</a> which uses an <a href="https://www.elastic.co/elasticsearch/">Elasticsearch</a> database. These days Magento also requires Elasticsearch so that requirement is already present. Because Reactive Search uses Vue we chose to use Vue for all interactive elements in Rapidez. But as "renderless components" which means only the functionality is within a component, all the HTML is in the Blade templates so it's very easy to customize!</p>
    <p>This way we can develop within the Laravel ecosystem and you're free to use what you want. For example; if you don't like TailwindCSS swap it for what you like! We just used it for basic styling. With all of this we don't need to use the XML and phtml files anymore from Magento and we can use <a href="https://laravel.com/docs/master/blade">Blade templates</a> and <a href="https://laravel.com/docs/master/blade#components">Blade Components</a> to structure the frontend.</p>
    <h2>Current state</h2>
    <p>With everything in place our main focus was to implement all the important and mostly used features from Magento first. If a customer or partner needs additional features; we implement it when requested. We hope to create a public feature overview soon. For the time being you can check out the <a href="https://github.com/rapidez/core/blob/master/CHANGELOG.md">changelog</a>. Rapidez is production ready with multiple projects live, see our <a href="https://rapidez.io/showcases">showcases</a>.</p>
    <h3>Packages</h3>
    <p>Most Magento installations use multiple Magento modules to extend the platform. Meanwhile we've created a <a href="https://docs.rapidez.io/0.x/packages.html">nice list of packages</a> so these Magento modules work with Rapidez. Are you missing something? Just let us know! A Rapidez integration is only needed if the Magento module does something on the frontend. All backend modules just work!</p>
    <h3>Lighthouse</h3>
    <p>Google Lighthouse scores are getting more important as Google ranks your websites higher when these scores are good. Besides the ranking; a fast webshop sells more! With the development of Rapidez we keep this in mind which results in excelent Lighthouse scores! If you don't put too many external marketing scripts in it like Google Tag Manager. Do you want to get even better scores? Implement <a href="https://docs.rapidez.io/0.x/tips.html#server-push">server push</a>!</p>
    <h3>Performance</h3>
    <p>If you've worked with Magento before you know a lot of server resources are required to keep everything running smooth. With Rapidez you can downscale the resources as Rapidez is very light in comparison with Magento. To give an impression; one project lowered the resources 4 times after the migration to Rapidez! From a 16 cores and 64GB memory VPS to just 4 cores and 16GB wich runs everything: Magento, MySQL, Elasticsearch and Rapidez! It also performs 4 times better!</p>
    <h3>Docs</h3>
    <p>Docs are very important to get started with new technologies, that's why we document as much as possible within our <a href="https://docs.rapidez.io">documentation</a>.</p>
    <h3>Projects</h3>
    <p>Currently our partner <a href="https://justbetter.nl">JustBetter</a> <a href="https://rapidez.io/showcases">developed 3 Rapidez webshops</a> and 2 more coming soon! A lot of learnings and core contributions were made, but also multiple <a href="https://docs.rapidez.io/0.x/packages.html">new packages</a> were developed! Happy developers, happy customers and happy visitors!</p>
    <h2>Recap</h2>
    <p>Since the start of Rapidez up until this blog post we've sent 6 newsletters, did you miss one? Not subscribed? Drop your email address on the <a href="https://rapidez.io">homepage</a> and stay tuned 🤘🏻</p>
    <ul>
        <li>
            <a href="https://mailcoach.rapidez.io/webview/a7dffc6a-4791-4a3a-9b25-25761dcf18ac">2021 January</a>
        </li>
        <li>
            <a href="https://mailcoach.rapidez.io/webview/b371a706-c07a-4c0f-ab45-f5bf7db8c580">2021 February</a>
        </li>
        <li>
            <a href="https://mailcoach.rapidez.io/webview/31adb498-d09c-448c-ae8b-e6e001d831c1">2021 March</a>
        </li>
        <li>
            <a href="https://mailcoach.rapidez.io/webview/7a918dc9-d2a6-429a-8b96-c9ad4e57b59b">2021 June</a>
        </li>
        <li>
            <a href="https://mailcoach.rapidez.io/webview/9cf037b8-77b9-4060-88a6-85e2f8dc0c7b">2021 October</a>
        </li>
        <li>
            <a href="https://mailcoach.rapidez.io/webview/c224cbc6-92b9-4ab4-9ea6-183b6c74b907">2022 June</a>
        </li>
    </ul>
    <h3>Numbers</h3>
    <p>Just some numbers we'd like to share 🚀</p>
    <ul>
        <li>1000+ commits accross all repos</li>
        <li>
            <a href="https://github.com/orgs/rapidez/repositories">33 Git repositories</a>
        </li>
        <li>
            <a href="https://rapidez.io/showcases">3 live Rapidez projects</a>
        </li>
        <li>
            <a href="https://rapidez.io/#partners">5 partners</a>
        </li>
    </ul>
    <h2>What's next?</h2>
    <p>Implementing more features like tier pricing, custom product options and bundle products in the core. But also migrating from <a href="https://laravel.com/docs/9.x/mix">Laravel Mix</a> to <a href="https://laravel.com/docs/9.x/vite">Vite</a> and <a href="https://github.com/turbolinks/turbolinks">Turbolinks</a> to <a href="https://github.com/hotwired/turbo">Turbo</a>. We hope to release a public roadmap soon! Besides the technical part we're also going to focus more on building the brand, improving the docs and helping agencies getting started with Rapidez. Stay tuned! 🚀</p>
</x-blog>
