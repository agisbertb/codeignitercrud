# CodeIgniter 4 User CRUD Application

## Overview

This is a simple User CRUD application built with [CodeIgniter 4](https://codeigniter.com). The application allows you to perform Create, Read, Update, and Delete operations on user records.

## Features

- User creation with fields: Name, Surname, Age, Email, and Phone.
- View a list of users.
- Edit user details.
- Delete users.

![User CRUD Application](/image.png)

## Installation

To set up the project, follow these steps:

1. **Clone the repository:**

    ```bash
    git clone git@github.com:agisbertb/codeignitercrud.git
    cd your-repo-folder
    ```

2. **Install dependencies:**

    Make sure you have Composer installed, then run:

    ```bash
    composer install
    ```

3. **Set up your environment:**

    Copy the .env.example file to .env and configure the necessary settings:

    ```bash
    cp .env.example .env
    ```

    Update the following fields in your .env file:

    ```bash
    app.baseURL = 'http://localhost/your-app-folder'
    database.default.hostname = 'localhost'
    database.default.database = 'your_database_name'
    database.default.username = 'your_database_username'
    database.default.password = 'your_database_password'
    ```

## Database Migration

To create the users table, run the following command:
    
```bash
php spark migrate
```

This will execute the migration file to create the necessary database table.

## Database Seeding

To populate the users table with initial data, run:

```bash
php spark db:seed UserSeeder
```

This will insert sample user data into the database.

## Running the Application

Make sure your web server points to the public directory of your CodeIgniter application. You can use PHP's built-in server for testing:

```bash
php spark serve
```

Now, visit http://localhost:8080 in your web browser to access the application.

## Requirements

- Make sure your server meets the requirements for PHP 8.1 or higher.
- Ensure the required PHP extensions are installed and enabled, including intl and mbstring.

## Repository Management

For tracking issues and feature requests, please visit the [CodeIgniter Forum](http://forum.codeigniter.com).
