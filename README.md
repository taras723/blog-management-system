# Blog Management System

A straightforward blog management system built with PHP/Laravel that allows users to manage articles, comments, and provides API endpoints for integration.

## Task Description

Create a simple blog management system that will include the following basic functions:

The user can create, edit, view and delete articles.
Implement the ability to add comments to articles.
Add the ability to search by title.
Implement API endpoints for working with posts and comments. (optional)

## Table of Contents

-   [Features](#features)
-   [Requirements](#requirements)
-   [Technologies](#technologies)
-   [Installation](#installation)
-   [API Documentation](#api-documentation)
-   [Database Structure](#database-structure)
-   [Additional Features](#additional-features)
-   [Security](#security)

## Features

### Core Features (Task Requirements)

-   **Article Management (CRUD)**

    -   Create, read, update, and delete articles
    -   Article fields: title, content, category, timestamps
    -   Paginated article listing
    -   Admin interface for article management

-   **Comments System**

    -   Add comments to articles
    -   Comment fields: content, post_id, timestamps
    -   API support for comment creation

-   **Search Functionality**

    -   Search articles by title
    -   Real-time search results

-   **API Endpoints**
    -   GET /api/posts - List all articles
    -   GET /api/posts/{id} - Get article details
    -   POST /api/posts/{id}/comments - Add a comment
    -   POST /api/login - Authentication and API token generation

## Requirements

-   PHP 7.4 - ^8.0
-   MySQL 5.7+
-   Composer
-   Laravel 8.x
-   Laravel Sanctum for API authentication

## Technologies

-   Laravel 9.45.1
-   Blade
-   PHP 8.1.7
-   MySQL 8.0.29
-   HTML 5
-   CSS 3
-   JavaScript
-   SweetAlert 2
-   FontAwesome 6.5.1

## Installation

1. Clone the repository:

```bash
git clone https://github.com/taras723/blog-management-system.git
cd blog-management-system
```

2. Install dependencies:

```bash
composer install
npm install
npm run build
```

3. Create environment file:

```bash
cp .env.example .env
```

4. Configure your database in `.env` file:

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=your_username
DB_PASSWORD=your_password
```

5. Configure SMTP for email functionality:

```
MAIL_MAILER=smtp
MAIL_HOST=your_smtp_host
MAIL_PORT=your_smtp_port
MAIL_USERNAME=your_username
MAIL_PASSWORD=your_password
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=your_email
```

6. Generate application key:

```bash
php artisan key:generate
```

7. Run migrations and seeders:

```bash
php artisan migrate --seed
```

8. Start the development server:

```bash
php artisan serve
```

9. Access the application:

```
http://localhost:8000
```

Default login credentials:

```
Role: Admin
Email: admin@gmail.com
Password: admin

Role: Writer
Email: writer@gmail.com
Password: writer
```

## API Documentation

### Authentication

To access protected API endpoints, you need to obtain an API token:

```bash
POST /api/login
Content-Type: application/json

{
    "email": "admin@gmail.com",
    "password": "admin1234"
}
```

Response:

```json
{
    "token": "your-api-token"
}
```

Include the token in subsequent requests:

```
Authorization: Bearer your-api-token
```

### Available Endpoints

1. List all posts:

```
GET /api/posts
```

2. Get post details:

```
GET /api/posts/{id}
```

3. Add comment to post:

```
POST /api/posts/{id}/comments
Content-Type: application/json

{
    "content": "Your comment text"
}
```

## Database Structure

### Posts Table

-   id (bigint, primary key)
-   title (string)
-   excerpt (text)
-   body (text)
-   image_path (string)
-   slug (string)
-   is_published (boolean)
-   additional_info (text, nullable)
-   category_id (bigint, foreign key)
-   read_time (integer)
-   user_id (bigint, foreign key)
-   change_user_id (bigint, foreign key)
-   changelog (text, nullable)
-   created_at (timestamp)
-   updated_at (timestamp)

### Comments Table

-   id (bigint, primary key)
-   post_id (bigint, foreign key)
-   name (string)
-   body (text)
-   created_at (timestamp)
-   updated_at (timestamp)

### Categories Table

-   id (bigint, primary key)
-   name (string)
-   backgroundColor (string)
-   textColor (string)
-   created_at (timestamp)
-   updated_at (timestamp)

## Additional Features

-   **Post Management**

    -   Version control and history tracking
    -   Auto-save functionality
    -   Reading time calculation
    -   Changelog tracking
    -   Post pinning capability

-   **User Experience**

    -   Dark mode support
    -   Responsive design
    -   Image browser and selection
    -   Real-time notifications
    -   Advanced filtering options

-   **Content Organization**

    -   Category management with custom styling
    -   Post history comparison
    -   Enhanced post tiles
    -   Improved post creation/editing interface

-   **Security & Permissions**
    -   Role-based access control
    -   Super-permissions system
    -   Protected post management
    -   Secure user operations
