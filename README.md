# Finvise Backend

This is the **Laravel 12** backend for the Finvise web application. It provides RESTful API endpoints for authentication, user management, and other core features.

---

## 🚀 Project Overview

-   Built with **Laravel 12**
-   Uses **JWT** for authentication
-   RESTful API for frontend integration
-   MySQL database

---

## Project Demo

https://api.finvise.rezha-dev.web.id/

---

## 📦 Installation & Setup

### Prerequisites

-   PHP >= 8.3
-   Composer
-   MySQL
-   Node.js >= 18.x
-   npm or pnpm

### Steps

1️⃣ Clone the repository:

```bash
git clone https://github.com/rezhajamil/finvise-assesment.git
cd finvise-assesment
```

2️⃣ Install dependencies:

```bash
composer install
npm install
```

3️⃣ Create a .env file:

```bash
cp .env.example .env
```

4️⃣ Generate app key & JWT secret:

```bash
php artisan key:generate
php artisan jwt:secret
```

5️⃣ Run migrations:

```bash
php artisan migrate
```

Run products seeder (optional):

```bash
php artisan db:seed
```

6️⃣ Start the server:

```bash
php artisan serve
```

### Example Request

Register:

```http
POST /api/register
Content-Type: application/json

{
  "name": "John Doe",
  "email": "john@example.com",
  "password": "password",
  "password_confirmation": "password"
}
```

Login:

```http
POST /api/login
Content-Type: application/json

{
  "email": "john@example.com",
  "password": "password"
}
```

Fetch Products:

```http
GET /api/products

Content-Type: application/json
```

Fetch Product Detail:

```http
GET /api/products/{product_id}

Content-Type: application/json
```

### 📝 Deployment

-   Upload project to production server.

-   Set up `.env` with production values.

-   Run the following commands:

```bash
composer install --optimize-autoloader --no-dev
php artisan migrate --force
php artisan config:cache
php artisan route:cache
php artisan view:cache
```

Configure web server (Nginx/Apache) to point to the `public` directory.
