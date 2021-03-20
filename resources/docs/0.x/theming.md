# Theming

---

- [Views](#views)
- [CSS](#css)
- [Javascript](#javascript)

The base theming is located within `rapidez/core` but you can create your own package with all the views, css and js.

<a name="views"></a>
## [Views](#views)

To change the views you can publish them with:
```bash
php artisan vendor:publish --provider="Rapidez\Core\RapidezServiceProvider" --tag=views
```
> {info} It's recommended to only add the views you've changed into your source control for upgradability. To keep track of what you've changed in a view it's a good idea to add the unchanged version to version control before you make any changes.

<a name="css"></a>
## [CSS](#css)

Use TailwindCSS as we've done with the base styling or change the `webpack.mix.js` file and use whatever you want. Have a look at the [Laravel Mix docs](https://laravel.com/docs/8.x/mix) for all the available options.

<a name="javascript"></a>
## [Javascript](#javascript)

In `resources/js/app.js` there is just a `require` so you can extend easily. If you'd like to change or overwrite something you can copy the content of the required file and change the parts you'd like.
