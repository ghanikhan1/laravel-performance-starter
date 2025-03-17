Laravel Tailwind Starter Kit

This is a Laravel 10 + TailwindCSS + Alpine.js + Vite Starter Kit designed for rapid frontend development.

🚀 Getting Started

Follow these steps to set up and run the project.

1️⃣ Download the Project

Clone the repository or download the ZIP file from GitHub.

2️⃣ Install Dependencies

Run the following commands to install PHP and Node dependencies:

composer install
npm install

3️⃣ Setup Environment

Copy the example environment file and generate an application key:

cp .env.example .env
php artisan key:generate

4️⃣ Setup Database (If Required)

If your project requires a database, run migrations:

php artisan migrate

5️⃣ Compile Frontend Assets

Run the following command to build Tailwind and JavaScript assets
