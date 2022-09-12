# State of the Union

Just like the president of the United States gives a speech each year about the state of the country; we'd like to share the state of Rapidez with you. The first commit was in February 2020, where are we now? How is it going and what to expect for the future?

## Why did we start with Rapidez?

Magento has been around for years, a great system but outdated in some regards; for example the frontend. With modern technologies like Laravel, Vue and TailwindCSS around we see a lot of developers wanting to switch. What if we could use those technologies with Magento? Our first approach was to keep the checkout in Magento and move the product, category and content pages to Laravel. But quickly we were getting session and routing issues so we moved on to fully headless! Manage everything from the Magento backend and have a seperated frontend.

We use the Eloquent ORM from Laravel to query the Magento database to get product, category and content information because it's the fastest way. We could use the REST API or GraphQL to get the same information but that would slow everything down as every requests would go through Magento. For all other interactions like adding products to the cart and the checkout we use the REST API and GraphQL from Magento.

Another important part of a webshop is fast filtering and searching. For that task we came across [Reactive Search](https://opensource.appbase.io/reactivesearch/vue) which uses an [Elasticsearch](https://www.elastic.co/elasticsearch/) database. These days Magento also requires Elasticsearch so that requirement is already present. Because Reactive Search uses Vue we chose to use Vue for all interactive elements in Rapidez. But as "renderless components" which means only the functionality is within a component, all the HTML is in the Blade templates so it's very easy to customize!

This way we can develop within the Laravel ecosystem and you're free to use what you want. For example; if you don't like TailwindCSS swap it for what you like! We just used it for basic styling. With all of this we don't need to use the XML and phtml files anymore from Magento and we can use [Blade templates](https://laravel.com/docs/master/blade) and [Blade Components](https://laravel.com/docs/master/blade#components) to structure the frontend.

## Current state

With everything in place our main focus was to implement all the important and mostly used features from Magento first. If a customer or partner needs additional features; we implement it when requested. We hope to create a public feature overview soon. For the time being you can check out the [changelog](https://github.com/rapidez/core/blob/master/CHANGELOG.md). Rapidez is production ready with multiple projects live, see our [showcases](https://rapidez.io/showcases).

### Packages

Most Magento installations use multiple Magento modules to extend the platform. Meanwhile we've created a [nice list of packages](https://docs.rapidez.io/0.x/packages.html) so these Magento modules work with Rapidez. Are you missing something? Just let us know! A Rapidez integration is only needed if the Magento module does something on the frontend. All backend modules just work!

### Lighthouse

Google Lighthouse scores are getting more important as Google ranks your websites higher when these scores are good. Besides the ranking; a fast webshop sells more! With the development of Rapidez we keep this in mind which results in excelent Lighthouse scores! If you don't put too many external marketing scripts in it like Google Tag Manager. Do you want to get even better scores? Implement [server push](https://docs.rapidez.io/0.x/tips.html#server-push)!

### Performance

If you've worked with Magento before you know a lot of server resources are required to keep everything running smooth. With Rapidez you can downscale the resources as Rapidez is very light in comparison with Magento. To give an impression; one project lowered the resources 4 times after the migration to Rapidez! From a 16 cores and 64GB memory VPS to just 4 cores and 16GB wich runs everything: Magento, MySQL, Elasticsearch and Rapidez! It also performs 4 times better!

### Docs

Docs are very important to get started with new technologies, that's why we document as much as possible within our [documentation](https://docs.rapidez.io).

### Projects

Currently our partner [JustBetter](https://justbetter.nl) [developed 3 Rapidez webshops](https://rapidez.io/showcases) and 2 more coming soon! A lot of learnings and core contributions were made, but also multiple [new packages](https://docs.rapidez.io/0.x/packages.html) were developed! Happy developers, happy customers and happy visitors!

## Recap

Since the start of Rapidez up until this blog post we've sent 6 newsletters, did you miss one? Not subscribed? Drop your email address on the [homepage](https://rapidez.io) and stay tuned 🤘🏻

- [2021 January](https://mailcoach.rapidez.io/webview/a7dffc6a-4791-4a3a-9b25-25761dcf18ac)
- [2021 February](https://mailcoach.rapidez.io/webview/b371a706-c07a-4c0f-ab45-f5bf7db8c580)
- [2021 March](https://mailcoach.rapidez.io/webview/31adb498-d09c-448c-ae8b-e6e001d831c1)
- [2021 June](https://mailcoach.rapidez.io/webview/7a918dc9-d2a6-429a-8b96-c9ad4e57b59b)
- [2021 October](https://mailcoach.rapidez.io/webview/9cf037b8-77b9-4060-88a6-85e2f8dc0c7b)
- [2022 June](https://mailcoach.rapidez.io/webview/c224cbc6-92b9-4ab4-9ea6-183b6c74b907)

### Numbers

Just some numbers we'd like to share 🚀

- 1000+ commits accross all repos
- [33 Git repositories](https://github.com/orgs/rapidez/repositories)
- [3 live Rapidez projects](https://rapidez.io/showcases)
- [5 partners](https://rapidez.io/#partners)

## What's next?

Implementing more features like tier pricing, custom product options and bundle products in the core. But also migrating from [Laravel Mix](https://laravel.com/docs/9.x/mix) to [Vite](https://laravel.com/docs/9.x/vite) and [Turbolinks](https://github.com/turbolinks/turbolinks) to [Turbo](https://github.com/hotwired/turbo). We hope to release a public roadmap soon! Besides the technical part we're also going to focus more on building the brand, improving the docs and helping agencies getting started with Rapidez. Stay tuned! 🚀
