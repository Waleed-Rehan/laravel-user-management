# Laravel User Management — Feature Pack

This zip contains a **complete Users CRUD** (Create/Read/Update/Delete) for a Laravel 10/11 project,
with **basic routing** and **Blade views** plus **minimal styling** (no build step).

## What you get
- `Route::resource('users', UserController::class)` wiring with `/` pointing to Users list.
- `UserController` with validation, pagination, create/update (with optional password change), and delete.
- Blade views (`index`, `create`, `edit`, `show`) + shared `_form` and a simple layout.
- Migration adding `role` and `is_active` to the default `users` table.
- Seeder creating an admin and sample users.

## Quick start (fresh Laravel app)
1) Create a fresh app (Laravel 11 or 10):
```bash
composer create-project laravel/laravel user-mgmt
cd user-mgmt
```

3) Ensure your `.env` DB settings are correct, then run migrations & seed:
```bash
php artisan migrate
php artisan db:seed --class=UserSeeder
```

4) Serve:
```bash
php artisan serve
```

5) Visit **http://localhost:8000** → Users index.

## Route notes
This pack includes a full example `routes/web.php`. If you already have one, either replace it
(or replicate the two lines below in your existing file):

```php
use App\Http\Controllers\UserController;
Route::get('/', fn() => redirect()->route('users.index'));
Route::resource('users', UserController::class);
```

## Login/Auth
This pack focuses on *users management* pages only and does **not** include authentication scaffolding.
Add Laravel Breeze/Jetstream/etc. separately if you need auth-protected routes.

## Compatibility
- Laravel 11.x or 10.x
- PHP 8.2+ recommended

---

**Default seeded admin**: `admin@example.com` / password: `password` (please change in production).
