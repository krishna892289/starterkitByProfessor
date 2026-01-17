# Laravel Starter Kit by Professor

[![Laravel](https://img.shields.io/badge/Laravel-Simple%20Starter%20Kit-brightgreen)](https://laravel.com)
[![PHP](https://img.shields.io/badge/PHP-8.1%2B-blue)](https://php.net)
[![License](https://img.shields.io/badge/License-MIT-yellow.svg)](https://opensource.org/licenses/MIT)
[![Composer Package](https://img.shields.io/badge/Composer-krishna892289/starterkit--by--professor-orange)](https://packagist.org/packages/krishna892289/starterkit-by-professor)

## Simple Laravel Starter Kit for Beginners – No Spatie, No JWT, Lightweight Alternative to Breeze & Jetstream

**Laravel Starter Kit by Professor** is a clean, minimal, and beginner-friendly boilerplate for new Laravel projects. Designed specifically for developers who want to start quickly without the complexity of heavy packages.

If you're tired of Breeze or Jetstream adding features you don't need (Livewire, Inertia, Teams, Spatie Permissions, JWT, etc.), this starter kit gives you exactly what a typical Laravel application needs — and nothing more.

Perfect for:
- Learning Laravel from scratch
- Building small to medium-sized web applications
- Rapid prototyping
- Teaching or tutorial projects

### Why Choose This Over Laravel Breeze or Jetstream?

| Feature                        | Starter Kit by Professor | Laravel Breeze | Laravel Jetstream |
|-------------------------------|--------------------------|----------------|-------------------|
| Authentication (Login/Register/Password Reset) | Yes                   | Yes         | Yes            |
| Email Verification            | Yes                      | Yes         | Yes            |
| Simple Dashboard              | Yes                      | Yes         | Yes            |
| Profile Management            | Yes                      | Basic       | Advanced       |
| Spatie Permissions            | No (keeps it simple)     | No          | Optional       |
| JWT / API Authentication      | No (session-based only)  | No          | Optional       |
| Livewire or Inertia           | No                       | No          | Yes            |
| Team Management               | No                       | No          | Yes            |
| Complexity                    | Very Low                 | Low         | High           |
| Best For                      | Beginners & Simple Apps  | Simple Apps | Feature-rich Apps |

This kit focuses on **clean, readable code** using pure Blade, Laravel's default session authentication, and zero extra bloat.

### Features

- Complete authentication scaffolding (Register, Login, Logout, Password Reset, Email Verification)
- Clean and minimal Blade templates
- Basic protected dashboard
- Profile update functionality
- Ready-to-use middleware and routes
- No external heavy dependencies (No Spatie, No JWT, No Livewire, No Inertia)
- Easy to customize and extend

### Requirements

- PHP >= 8.1
- Composer
- Laravel 10.x or 11.x (tested on both)
- MySQL / PostgreSQL / SQLite

### Installation

Add the package to your fresh Laravel project via Composer: 


```bash
composer require krishna892289/starterkit-by-professor
```
Publish and install the starter kit:
```Bash
php artisan starter-kit:install
```
Run fresh migrations (this will create users table and any additional tables):
```Bash
php artisan migrate:fresh
```
(Optional) Seed dummy data if provided:
```Bash
php artisan db:seed
```
That's it! Run your app:
```Bash
php artisan serve
```
Visit /login or /register to get started.

Usage
After installation:

Register a new account → Verify email → Login
Access protected routes at /dashboard
Customize views in resources/views/auth and resources/views/dashboard
Extend with your own models, controllers, and features

Keywords for Search
Laravel starter kit, Laravel boilerplate for beginners, simple Laravel authentication, Laravel scaffolding without Breeze, Laravel without Jetstream, lightweight Laravel starter, Laravel session authentication, no Spatie Laravel starter, no JWT Laravel kit, Laravel beginner template, Laravel 11 starter kit, Laravel 10 starter kit
Contributing
Contributions are welcome! Feel free to:

Open issues for bugs or feature requests
Submit pull requests with improvements
Suggest better documentation

Please follow Laravel coding standards.
License
This project is open-sourced under the MIT License.
Author
Created with ❤️ by Krishna (@krishna892289 on GitHub)
Thank you for using Starter Kit by Professor! If you find it helpful, please give it a ⭐ on GitHub.
