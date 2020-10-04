# GlobalCTT Documentation

* Laravel version: 7.22.2

# Roadmap

- [x] Role status
- [x] Web admin

- [x] Student CRUD

# Installation 

* git clone git@github.com:sergeev/globalctt.git
* .env.samples -> .env
* composer install & composer update
* php artisan key:generate
* php artisan migrate
* php artisan db:seed

# Clear Cache (for dev)

* php artisan cache:clear
* php artisan route:clear
* php artisan config:clear
* php artisan view:clear

# Fix errors create new file in project (Example - Target class [ExamplesSeeder] does not exist.)

* php artisan clear-compiled
* composer dump-autoload
* php artisan optimize

```
Route::get('/clear-cache', function() {
    Artisan::call('cache:clear');
    return "Cache is cleared";
});
```

# Dev commands

- Create CRUD
	- php artisan make:migration create_[examples]_table --create=examples
    - php artisan make:controller ExamplesController --resource --model=Examples

# Composer packages
- composer require yajra/laravel-datatables-oracle:"~9.0"
- composer require livewire/livewire