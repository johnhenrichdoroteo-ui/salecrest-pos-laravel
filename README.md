# Salecrest POS: Laravel Foundations

This is the Laravel version of the four-page Salecrest POS foundation for IT0049 Technical Formative Activity 5.

## Pages

| URL | Purpose |
| --- | --- |
| `/` | Home page introducing Salecrest |
| `/about` | About the project and its Laravel structure |
| `/customers` | Customer account list |
| `/users` | Staff account list |

The customer and staff entries are fictional sample data held in PHP arrays inside their controllers. They are displayed with Blade `@foreach`. This activity does not use a customer or staff database, login, or CRUD forms.

## Run locally

Use PHP 8.3 or newer and Composer. In PowerShell, open this project folder and run:

```powershell
composer install
if (-not (Test-Path .env)) {
    Copy-Item .env.example .env
    php artisan key:generate
}
php artisan serve
```

Then open `http://127.0.0.1:8000`. The commands keep an existing `.env` and its application key. The page assets are in `public`, so there is no Node build step for this activity.

## Main files

- `routes/web.php` maps each URL to a controller method.
- `app/Http/Controllers/PageController.php` returns the home and about views.
- `app/Http/Controllers/CustomerController.php` holds the customer sample array.
- `app/Http/Controllers/UserController.php` holds the staff sample array.
- `resources/views/layouts/app.blade.php` contains the shared header, navigation, and footer.
- `resources/views/pages/` contains the four page templates.
- `public/css/salecrest.css` contains the slate blue, teal, and cool neutral palette and responsive layout.
- `public/images/` contains the Salecrest logo and two slate-toned retail photos used behind the home and about headers.

## Check the project

```powershell
php artisan route:list
php artisan test --compact
```

The Laravel starter migrations remain in the project, but the four activity pages do not query those tables. Hosting and a public URL are separate submission steps.
