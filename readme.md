## Hello, this is a simple Laravel/Vue.JS CRUD example

#### How to run it
- Copy .env.example to .env
- Run the next commands in cli
```
composer install
php artisan migrate
php artisan db:seed
```
- Run web server (homestead, docker or php artisan serve)
- Login as admin
```
email: admin@admin.ru
pass: 123456
```


#### Some interesting things about it:

- The smart seeders: These seeders can see if they already been seeded.
So you can run `php artisan db:seed` without thinking of if it will be seeded twice.
- The `php artisan cfc` command that clear all cache (cache, config, route, view)
