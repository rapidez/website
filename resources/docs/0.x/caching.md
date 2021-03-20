# Cache cleaning

---

Rapidez caches a lot to speed things up. This means that after you've changed some Magento configuration you've to clear the cache. This can be done easily with `php artisan cache:clear` but you can automate this just like the [indexer](/{{route}}/{{version}}/indexer) with `/api/admin/cache/clear?token=` and also append your token.
