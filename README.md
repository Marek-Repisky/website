# Products CRUD (PHP, custom MVC)

A simple product catalogue built in vanilla PHP with a lightweight, custom-built MVC architecture (no framework). Supports creating, listing, searching, updating, and deleting products, including image upload handling.

## Features

- **Create / Read / Update / Delete** products
- **Search** products by title
- **Image upload** per product, stored in a randomized subfolder to avoid filename collisions
- Simple **Router** that maps clean URLs to controller actions
- **PDO** with prepared statements for all database queries (SQL-injection safe)
- Basic server-side **validation** (required title and price)

## Tech stack

- PHP 8+ (uses typed properties / nullable types)
- MySQL (via PDO)
- Composer (PSR-4 autoloading)
- Bootstrap (front-end styling)

## Project structure

```
├── controllers/
│   └── ProductController.php   # index, create, update, delete actions
├── models/
│   └── Product.php              # validation + save logic
├── helpers/
│   └── UtilHelper.php
├── views/
│   ├── _layout.php
│   └── products/
│       ├── index.php
│       ├── _form.php
│       ├── create.php
│       └── update.php
├── public/
│   ├── index.php                # front controller / entry point
│   ├── app.css
│   └── images/                  # uploaded product images
├── Router.php
├── Database.php
├── composer.json
└── composer.lock
```

## Setup

1. **Clone the repo**
   ```bash
   git clone <repo-url>
   cd products-crud-php
   ```

2. **Install dependencies**
   ```bash
   composer install
   ```

3. **Create the database**

   Create a MySQL database named `products_crud` and a `products` table, e.g.:
   ```sql
   CREATE DATABASE products_crud;

   USE products_crud;

   CREATE TABLE products (
       id INT AUTO_INCREMENT PRIMARY KEY,
       title VARCHAR(255) NOT NULL,
       description TEXT,
       price DECIMAL(10,2) NOT NULL,
       image VARCHAR(255),
       create_date DATETIME NOT NULL
   );
   ```

4. **Configure the database connection**

   By default the app connects to `mysql:host=localhost;port=3306;dbname=products_crud` with user `root` and no password (see `Database.php`). Update these credentials if your local setup differs.

5. **Run it**

   Point your web server's document root at the `public/` folder, or use PHP's built-in server:
   ```bash
   php -S localhost:8000 -t public
   ```
   Then visit `http://localhost:8000`.

## Status

Complete and functional — full CRUD flow with image upload, search, and validation.

## Notes

This project was built as a learning exercise in evolving a PHP application from procedural code toward an object-oriented, MVC-based structure with a custom router and database layer.
