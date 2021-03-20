# Packages

---

This works just like any Laravel package, [read their documentation to get started](https://laravel.com/docs/master/packages) and have a look at the [existing packages](https://github.com/rapidez) to see how things are handled.

### Events

[Eventy](https://github.com/tormjens/eventy) is used to have Wordpress style filters which can be used within packages.

Filter | Explanation
--- | ---
`product.scopes` | Add additional global product scopes
`product.casts` | Add additional global product casts
`index.product.scopes` | Add product scopes to the product query when indexing
`index.product.data` | Manipulate the product data before it's getting indexed 
`index.product.attributes` | Index additional product attributes
`index.product.mapping` | Manipulate the index mapping
`category.scopes` | Add additional global category scopes
