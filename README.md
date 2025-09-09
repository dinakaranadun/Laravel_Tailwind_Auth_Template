<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

# Laravel Application

## 🛠️ Requirements

- PHP >= 8.4  
- Composer  
- MySQL  
- Node.js (v23 or higher recommended) & npm  

---

## 🚀 Installation & Setup

```bash
# 1. Clone the repository


# 2. Navigate into the project directory
cd repo

# 3. Install PHP dependencies
composer install

# 4. Copy the example environment file
rename .env.example to .env

# 5. Generate the application key
php artisan key:generate

# 6. Configure your .env file with database, mail, and other settings (see below)

# Database settings
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=your_database_user
DB_PASSWORD=your_database_password

# Mailtrap SMTP configuration for testing emails
MAIL_MAILER=smtp
MAIL_HOST=smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=your_mailtrap_username
MAIL_PASSWORD=your_mailtrap_password
MAIL_ENCRYPTION=null
MAIL_FROM_ADDRESS=example@example.com
MAIL_FROM_NAME="${APP_NAME}"


# 7. Run database migrations
php artisan migrate

# 9. Install Node.js dependencies
npm install

# 10. Build frontend assets using Vite
# For development (with hot reload):
npm run dev
# For production build:
npm run build

# 11. Start the Laravel development server
php artisan serve
or you can use herd

# 12. Make sure to run the queue worker
```
## If you have any questions or issues, feel free to open an issue
