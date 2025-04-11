# Laravel Assignment API

This is a Laravel API project for managing franchises, parents, students, and schedules.

## Features

- CRUD operations for:
  - Franchises
  - Parents
  - Students
  - Schedules
- Relationships:
  - A Parent belongs to a Franchise
  - A Student belongs to a Parent
  - A Schedule belongs to a Franchise

## How to Run

1. Clone the project
2. Run `composer install`
3. Copy `.env.example` to `.env` and set your database credentials
4. Run:
   ```
   php artisan key:generate
   php artisan migrate:fresh --seed
   php artisan serve
   ```

## API Endpoints

- `GET /api/franchises`
- `POST /api/parents`
- `GET /api/students`
- `PUT /api/schedules/{id}`
- `DELETE /api/franchises/{id}`

All responses are returned in JSON.

## Notes

- Laravel version: 10
