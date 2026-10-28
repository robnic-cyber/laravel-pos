# Laravel POS Laboratory Exercise

This project rebuilds the TFA1 POS pages in Laravel using the MVC pattern:

- `/` — landing page
- `/about` — application overview
- `/customers` — customer accounts retrieved with the `Customer` Eloquent model
- `/users` — user accounts retrieved with the `User` Eloquent model

## Requirements

- PHP 8.2+
- Composer

## Setup and run

```bash
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate --seed
php artisan serve
```

Open `http://127.0.0.1:8000`. Use `php artisan route:list` to inspect the four application routes.

The migrations create the `customers` and `users` tables, and `DatabaseSeeder` inserts five sample records into each table. Use `php artisan migrate:fresh --seed` to rebuild the database from scratch during development.

## MVC mapping

- `routes/web.php` maps URLs to controller methods.
- `PageController` handles the landing and about pages.
- `CustomerController` and `UserController` retrieve records with Eloquent.
- Blade templates in `resources/views` render the pages and use `@foreach` for both account listings.
