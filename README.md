# GlobalCTT Documentation

* Laravel version: 7.22.2

# Installation 

* git clone git@github.com:sergeev/globalctt.git
* .env.samples -> .env
* composer install & composer update
* php artisan key:generate

# Clear Cache (for dev)

* php artisan cache:clear
* php artisan route:clear
* php artisan config:clear
* php artisan view:clear

```
Route::get('/clear-cache', function() {
    Artisan::call('cache:clear');
    return "Cache is cleared";
});
```