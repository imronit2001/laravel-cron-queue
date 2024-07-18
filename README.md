# Laravel Project Setup

This guide will walk you through the steps to set up a Laravel project on your local machine.

## Prerequisites

Before you begin, ensure you have met the following requirements:

- [Composer](https://getcomposer.org/) installed on your machine
- [Node.js and npm](https://nodejs.org/en/) installed on your machine
- A web server (e.g., Apache, Nginx) or [Laravel Valet](https://laravel.com/docs/8.x/valet) for macOS users

## Installation

Follow these steps to set up the project:

### 1. Clone the Repository

Clone the repository from GitHub:

```sh
git clone https://github.com/imronit2001/laravel-cron-queue.git
cd laravel-cron-queue
```

### 2. Install Dependencies

Install PHP dependencies using Composer:

```sh
composer install
```


### 3. Environment Configuration

Copy the .env.example file to create your .env configuration file:

```sh
cp .env.example .env
```

Generate an application key:
```sh
php artisan key:generate
```


### 4. Database Configuration

Update your .env file with your database credentials. Here is an example:

```sh
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database
DB_USERNAME=your_username
DB_PASSWORD=your_password
```

### 5. Migrate the Database

Run the following command to migrate the database:

```sh
php artisan migrate
```

### 6. Serve the Application

You can serve the application locally using Laravel's built-in server:

```sh
php artisan serve
```

### 7. Run the Cron Job Scheduling
```sh
php artisan schedule:run
sudo service cron status
sudo service cron start
php artisan schedule:run
crontab -e


* * * * * cd /path-to-your-project && php artisan schedule:run >> /dev/null 2>&1

php artisan schedule:run
php artisan schedule:work

```

### 8. Test Queues

```sh
php artisan make:controller MailController
php artisan make:mail TestMail
php artisan make:controller TestController
php artisan make:command 
php artisan user:add
php artisan 
php artisan queue:table
php artisan migrate
php artisan make:job SendEmail
php artisan queue:work
php artisan queue
php artisan queue:clear
php artisan queue:work
php artisan queue:clear
php artisan queue:list
php artisan queue
php artisan queue:work
php artisan make:job SendOtp
php artisan make:mail SendOtpMail
php artisan queue:work --queue=high,default
```