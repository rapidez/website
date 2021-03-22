# Installation

---

- [Requirements](#requirements)
- [Create your first project](#create-project)
- [CORS](#cors)
- [Multistore](#multistore)
- [Demo Magento 2 webshop](#magento-demo-shop)

<a name="requirements"></a>
## [Requirements](#requirements)

- [Laravel requirements](https://laravel.com/docs/8.x/installation#server-requirements)
- PHP >= 7.4
- MySQL >= 5.7.13
- Elasticsearch >= 7.6
- Magento >= 2.4.1 installation ([or use a demo shop](#magento-demo-shop)) with flat tables enabled

<a name="create-project"></a>
## [Create your first project](#create-project)

```bash
composer create-project rapidez/rapidez rapidez
```
```bash
php artisan rapidez:install
```
> {info} Add the url and database credentials from your Magento 2 installation to the `.env`

```bash
yarn
yarn run prod
php artisan storage:link
php artisan rapidez:validate
php artisan rapidez:index
```
Use your favorite webserver (we like [Valet+](https://github.com/weprovide/valet-plus) os macOS) or use PHP's built-in development server:
```bash
php artisan serve
```
See it in the browser! 🚀

<a name="cors"></a>
## [CORS](#cors)

### Magento

Because we're making Ajax request to the Magento API; CORS need to be opened. If you're using Valet Plus this can easily done, [see here](https://github.com/weprovide/valet-plus/issues/493). With the Docker Magento installation it's already opened [with a patch](https://github.com/michielgerritsen/magento2-extension-integration-test/blob/master/magento/patches/cors.patch). For production you've to restrict this to your domain.

### Elasticsearch

If you're using your own Elasticsearch installation you've to open CORS in `elasticsearch.yml` and restart Elasticsearch. An example can be found in the root of this project. That configuration is used when you're using Elasticsearch from our Docker Compose config.

<a name="multistore"></a>
## [Multistore](#multistore)

When you've setup multiple stores in Magento then Rapidez needs to know which store to show. Rapidez listens to the `MAGE_RUN_CODE` like Magento does. So just set that variable from your webserver.

With Nginx you could use a map, for example:

```nginx
map $http_host $MAGE_RUN_CODE {
    default default_store_code;
    second-store.com second_store_code;
    thrid-store.com third_store_code;
}
```

And pass that to PHP-FPM:
```nginx
fastcgi_param MAGE_RUN_CODE $MAGE_RUN_CODE;
```

<a name="magento-demo-shop"></a>
## [Demo Magento 2 webshop](#magento-demo-shop)

If you do not have a Magento 2 installation yet, you want to test Rapidez or like to develop with a fresh Magento 2 installation you can use a Magento 2 and Elasticsearch installation in a Docker container.

> {info} Make sure Docker can use at least 4GB of memory!

```bash
docker-compose up -d
docker exec rapidez_magento magerun2 indexer:reindex
```
Edit the `.env`

```dotenv
MAGENTO_URL=http://localhost:1234
DB_PORT=3307
DB_DATABASE=magento
DB_USERNAME=magento
DB_PASSWORD=password
```
