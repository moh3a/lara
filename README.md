# Laragigs

Practice PHP and first time using the Laravel framework

## issues

problem with running the migration -> Access denied for user 'root'@'localhost'

```sh
php artisan migrate
```

## quickstart

-   Setup XAMPP on windows
-   Install composer

```sh
choco install composer
```

or alternatively run the composer's windows installer to point to XAMPP's version of php

-   Install laravel cli globally

```sh
composer global require laravel/installer
```

-   Run migrations

```sh
php artisan make:migration create_listings_table
```

-   Start dev server

```sh
php artisan serve
```
