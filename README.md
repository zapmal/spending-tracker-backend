# Expense-tracker API

API for [this](https://github.com/Zondazx/spending-tracker)

## Config (in order)

- Fill all the database-related fields in the `.env.example` file.
- `cp .env.example .env`
- `php artisan migrate`
- `php artisan db:seed` adds 50 expenses to the database.
- `php artisan serve` starts the server.