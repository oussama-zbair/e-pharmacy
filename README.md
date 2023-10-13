# E-Pharmacy Laravel Starter

A Laravel-based e-pharmacy project.

## Prerequisites

- PHP
- Composer
- Web Server (e.g., Apache, Nginx)
- Database (e.g., MySQL)

## Setup Instructions

Follow these steps to set up and run the project on your local environment:

1. **Clone the repository:**

   ```bash
   git clone https://github.com/oussama-zbair/e-pharmacy.git
   ```

2. **Navigate to the project directory:**

    ```bash
       cd e-pharmacy
    ```

3. **Copy the .env.example file to .env:**

    ```bash
    cp .env.example .env
    ```

4. **Open the .env file in your text editor and update the DB_DATABASE field with your database details.**
5. **Install project dependencies:**

   ```bash
   composer install
   ```

6. **Generate an application key:**

   ```bash
   php artisan key:generate
   ```

7. Run database migrations and seed the database:

   ```bash
   php artisan migrate:fresh --seed
   ```

8. Start the development server:
   ```bash
   php artisan serve
   ```
