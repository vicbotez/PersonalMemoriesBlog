# Personal Memories Blog

A simple personal blog for storing and sharing memories.

## Features

### Admin Area
- Manage Tags
- Manage Media (Images)
- Manage Users
  - 2 user roles: **admin** and **subscriber**
- Manage Posts
  - `READ MORE` post separation line
  - Upload images to blog posts

### Visitors
- View all posts
- Filter posts by tags
- Read full posts

---

## Installation

### 1. Clone the project

```bash
git clone https://github.com/vicbotez/PersonalMemoriesBlog.git
cd PersonalMemoriesBlog
```


### 2. Rename the environment file
Rename .env.example to .env:

```bash
cp .env.example .env
```

### 3. Configure .env file
Update the following environment variables:

```env
# Website settings
APP_NAME=PersonalMemoriesBlog
APP_DEBUG=true
APP_URL=http://yourdomain.com

# First Admin User
ADMIN_NAME=YourName
ADMIN_EMAIL=admin@example.com
ADMIN_PASSWORD=secret

# Database settings
DB_DATABASE=your_db_name
DB_USERNAME=your_db_user
DB_PASSWORD=your_db_password
```

### 4. Install dependencies

```bash
composer install
```

### 5. Generate application key

```bash
php artisan key:generate
```

### 6. Run migrations

```bash
php artisan migrate
```

### 7. Seed the database with default admin user

```bash
php artisan db:seed
```

### 8. Create symbolic link for storage

```bash
php artisan storage:link
```

### 9. (Optional) Update .htaccess for shared hosting
If deploying on shared hosting, add this to the root .htaccess:

```apache
RewriteEngine On
RewriteRule ^(.*)$ public/$1 [L]
```

## Requirements

Make sure your environment meets the following requirements:

- PHP 8.2 or higher
- Composer (latest stable)
- Laravel 12
- A database server (e.g. MySQL, PostgreSQL, SQLite)
- Node.js & NPM (for compiling frontend assets, if applicable)
- A web server (e.g. Apache, Nginx)

Optional for local development:
- Laravel Sail or Valet

### Licence 

MIT License



