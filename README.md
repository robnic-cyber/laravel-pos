# Laravel POS Laboratory Exercise

This project rebuilds the TFA1 POS pages in Laravel using the MVC pattern:

- `/` — landing page
- `/about` — application overview
- `/customers` — customer accounts from a static PHP array
- `/users` — user accounts from a static PHP array

## Requirements

- PHP 8.2+
- Composer

## Setup and run

```bash
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate
php artisan serve
```

Open `http://127.0.0.1:8000`. Use `php artisan route:list` to inspect the four application routes.

The migration and seeder are included for submission completeness. The two account pages intentionally use controller-local arrays, as required by the laboratory activity; a database is not needed to render the sample listings.

## MVC mapping

- `routes/web.php` maps URLs to controller methods.
- `PageController` handles the landing and about pages.
- `CustomerController` and `UserController` prepare five sample records each.
- Blade templates in `resources/views` render the pages and use `@foreach` for both account listings.
