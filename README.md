# Laravel Assignment API

This is a Laravel-based API project that manages franchises, schedules, parents, and students, with proper relationships and full CRUD capabilities.

## 📦 Models and Relationships

- **Franchise**
  - Has many Parents
  - Has many Schedules

- **Schedule**
  - Belongs to a Franchise

- **Parent**
  - Belongs to a Franchise
  - Has many Students

- **Student**
  - Belongs to a Parent

## 🗃️ Database Setup

To reset and seed the database:

```bash
php artisan migrate:fresh --seed
```

## 🔀 API Endpoints

| Method | Endpoint           | Description              |
|--------|--------------------|--------------------------|
| GET    | /api/franchises    | List all franchises      |
| POST   | /api/franchises    | Create a new franchise   |
| GET    | /api/franchises/1  | Show a franchise         |
| PUT    | /api/franchises/1  | Update a franchise       |
| DELETE | /api/franchises/1  | Delete a franchise       |
| (Same for `schedules`, `parents`, `students`) |

## 📂 Seeded Example Data

- 2 Franchises: `Downtown Branch`, `Uptown Branch`
- 2 Schedules: `Morning Schedule`, `Evening Schedule`
- 2 Parents: `Alice Smith`, `Bob Johnson`
- 2 Students: `Charlie Smith`, `Daisy Smith`

## 🚀 Getting Started

1. Clone the repo or unzip the package.
2. Run `composer install`
3. Copy `.env.example` to `.env` and set your DB credentials
4. Run:
    ```bash
    php artisan key:generate
    php artisan migrate:fresh --seed
    php artisan serve
    ```

## 📫 API Only

This project is backend-only. No UI is included — all output is returned as JSON. Use Postman or cURL for testing.

---

Made with ❤️ for educational purposes.
