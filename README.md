# Salecrest POS: From Arrays to Eloquent

This is the four-page Salecrest POS project updated for IT0049 Technical Formative Activity 6. Customer and staff records now come from a database through Eloquent instead of controller arrays.

## Pages

| URL | Purpose |
| --- | --- |
| `/` | Home page introducing Salecrest |
| `/about` | About the project and its Laravel structure |
| `/customers` | Customer account list |
| `/users` | Staff account list |

The customer and staff entries are fictional sample records. This activity uses migrations, models, and seeders to display them, but does not add login or CRUD forms.

## Run locally

Use PHP 8.3 or newer and Composer. In PowerShell, open this project folder and run:

```powershell
composer install
if (-not (Test-Path .env)) {
    Copy-Item .env.example .env
    php artisan key:generate
}
if (-not (Test-Path database/database.sqlite)) {
    New-Item database/database.sqlite -ItemType File
}
php artisan migrate
php artisan db:seed
php artisan serve
```

Then open `http://127.0.0.1:8000`. The commands keep an existing `.env` and its application key. Run `php artisan db:seed` again only if you need to add any missing sample accounts; the seeder does not duplicate existing ones. The page assets are in `public`, so there is no Node build step for this activity.

## Main files

- `routes/web.php` maps each URL to a controller method.
- `app/Http/Controllers/PageController.php` returns the home and about views.
- `app/Http/Controllers/CustomerController.php` queries the Customer model.
- `app/Http/Controllers/UserController.php` queries the User model.
- `app/Models/Customer.php` and `app/Models/User.php` represent database records.
- `database/migrations/` defines the customer table and adds POS fields to Laravel's existing user table.
- `database/seeders/` adds six customer and six staff sample records.
- `database/factories/` supplies test records.
- `resources/views/layouts/app.blade.php` contains the shared header, navigation, and footer.
- `resources/views/pages/` contains the four page templates.
- `public/css/salecrest.css` contains the slate blue, teal, and cool neutral palette and responsive layout.
- `public/images/` contains the Salecrest logo and two slate-toned retail photos used behind the home and about headers.

## Check the project

```powershell
php artisan route:list
php artisan test --compact
```

The existing Laravel `users` table is extended instead of replaced, so its standard `name`, `email`, and hashed `password` columns remain available for later authentication work. A hosted public URL is a separate submission step; this repository alone does not host the application.
