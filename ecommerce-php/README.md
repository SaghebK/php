# 🛒 E-commerce Product Management (PHP & MySQL)

A simple, lightweight Product Catalog and Management system built using Object-Oriented PHP, PDO, and MySQL.

---

## 🌟 Features

* **Database Connection:** Secure PDO connection with error handling.
* **Product Catalog:** View all products in a clean, responsive table.
* **Add Product:** Form to create and store new products in MySQL.
* **RTL Support:** Native right-to-left UI designed for Persian/Arabic content.

---

## 📂 Project Structure

```text
ecommerce-php/
├── db.php             # PDO Database Connection
├── index.php          # Main Dashboard & Product Listing
├── add.php            # Add New Product Form
├── style.css          # CSS Stylesheet
└── schema.sql         # MySQL Database Schema
```

---

## 🚀 Setup & Installation

1. Import `schema.sql` into your MySQL server.
2. Update database credentials in `db.php` if needed.
3. Run using XAMPP/WAMP or built-in PHP server:
   ```bash
   php -S localhost:8000
   ```
