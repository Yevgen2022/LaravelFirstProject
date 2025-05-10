# Laravel First Project

A beginner-friendly **Laravel-based application** built as part of a training course. The project demonstrates the use of routes, controllers, Blade views, Eloquent models, and database migrations using Laravel’s MVC architecture.

---

##  Features

-  Routing via `web.php` with named routes
-  Controllers for multiple page sections (about, contacts, posts, etc.)
-  Blade templates with reusable layout
-  Model relationships: posts, tags, categories
-  CRUD operations for posts
-  Database seeding and migrations
-  Form validation and error handling

---

##  Tech Stack

- **Laravel** 8+
- **PHP** 8+
- **Blade** template engine
- **Eloquent ORM**
- **SQLite** / MySQL (interchangeable)
- **Composer** (dependency management)
- **Vite** or Laravel Mix (for assets)

---

##  Folder Structure Highlights

## 📁 Folder Structure Highlights

```text
app/
├── Http/
│   ├── Controllers/     → Route logic
│   └── Middleware/      → (optional, not shown)
├── Models/              → Eloquent models

resources/
├── views/               → Blade templates
├── js/ & sass/          → Frontend (optional)

database/
├── migrations/          → DB schema
└── seeders/             → Test data


---

##  Learning Objectives

- Learn the basics of Laravel MVC structure
- Understand RESTful routes with controller actions
- Build dynamic layouts using Blade templating
- Practice database migrations and seeding
- Build relationships between models like Post, Tag, Category

---

##  Screenshots

_(Insert optional screenshots or demo gif)_

---

##  Setup Instructions

```bash
git clone https://github.com/Yevhen2022/LaravelFirstProject
cd LaravelFirstProject
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate --seed
php artisan serve


