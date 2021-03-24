# FAQ

---

- [Why is it so fast?](#speed)
- [How is this different from Vue Storefront?](#compare)
- [Why headless and not a PWA?](#headless)
- [Do I need to know Vue?](#vue)
- [Why query the Magento database instead of using GraphQL?](#query)
- [TailwindCSS is used, do I need to use it?](#tailwindcss)
- [Is it production ready?](#production)

<a name="speed"></a>
## [Why is it so fast?](#speed)

> {primary.fa-rocket} Because we do not use the Magento frontend stack. Just Laravel which queries the Magento database directly and the Magento REST API / GraphQL for other parts like the cart and checkout. Category filters are so fast because of Reactive Search which uses Elasticsearch as database. For the smooth page transitions we use Turbolinks.

<a name="compare"></a>
## [How is this different from Vue Storefront?](#compare)

> {primary.fa-not-equal} Vue Storefront does support multiple platforms where the focus of Rapidez is Magento 2. The learning curve of Vue Storefront can be steep because it's totally different from Magento which uses a PHP stack. Rapidez combines best of both worlds by using PHP and Vue.

<a name="headless"></a>
## [Why headless and not a PWA?](#headless)

> {primary.fa-user} Do you really need a offline experience on your webshop? PWA makes things more complicated then necessary.

<a name="vue"></a>
## [Do I need to know Vue?](#vue)

> {primary.fa-graduation-cap} No, Vue is only used for some functional frontend components like the cart. All Vue components are "renderless" so most likely you never need to touch them because all the HTML is in the Blade files. But some basic knowledge of Vue could be useful.

<a name="query"></a>
## [Why query the Magento database instead of using GraphQL?](#query)

> {primary.fa-database} Speed; and not all data is available through GraphQL. The Magento database stucture isn't changed much over the years and Rapidez is just using it to get data. For inserting and updating we use the REST API or GraphQL.

<a name="tailwindcss"></a>
## [TailwindCSS is used, do I need to use it?](#tailwindcss)

> {primary.fa-css3} No, you do not need te use it. You are completely free to use whatever you want. We like it so we used it for basic styling.

<a name="production"></a>
## [Is it production ready?](#production)

> {primary.fa-server} If it fits your needs; yes. Please let us know if you're missing something.
