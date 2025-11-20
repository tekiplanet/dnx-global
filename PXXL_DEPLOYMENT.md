# Pxxl.app Deployment Configuration for Laravel

## Current Issue
Your Laravel application is returning a 404 error because the **Base Directory** is set to `public`, but Laravel needs the root directory to access vendor, bootstrap, app, and other folders.

## Fix Required in Pxxl.app Dashboard

### 1. Change Base Directory
- Go to your project settings in pxxl.app
- Navigate to **Configuration** tab
- Change **Base Directory** from `public` to `.` (root) or leave it empty
- The web server should automatically serve from `public/index.php`

### 2. Configure Build Commands (if available)
If pxxl.app has a "Build & Output Settings" section, add these commands:

**Build Command:**
```bash
composer install --no-dev --optimize-autoloader
php artisan config:cache
php artisan route:cache
php artisan view:cache
```

**OR if build commands are not supported:**
The platform should automatically run `composer install` when it detects `composer.json`.

### 3. Environment Variables
Make sure to set these in pxxl.app's Environment Variables section:

```
APP_NAME=DNX Global
APP_ENV=production
APP_KEY=base64:... (generate using: php artisan key:generate)
APP_DEBUG=false
APP_URL=https://dnx-global.pxxl.click

LOG_CHANNEL=stack
LOG_LEVEL=error

# Database (if you have one)
DB_CONNECTION=mysql
DB_HOST=...
DB_PORT=3306
DB_DATABASE=...
DB_USERNAME=...
DB_PASSWORD=...

# Session
SESSION_DRIVER=file
CACHE_DRIVER=file
QUEUE_CONNECTION=sync
```

### 4. Port Configuration
- Port: `28624` (or whatever pxxl.app assigns)
- The platform should handle port mapping automatically

## Why This Fixes the 404

1. **Base Directory `public` is wrong**: When set to `public`, pxxl.app clones your repo and only uses the `public` folder. Laravel's `public/index.php` tries to access `../vendor/autoload.php` and `../bootstrap/app.php`, but those are in the parent directory which isn't accessible.

2. **Base Directory `.` (root) is correct**: When set to root, the entire Laravel project is available, and the web server (configured for Laravel) will serve requests through `public/index.php`.

## Deployment Checklist

- [ ] Base Directory changed from `public` to `.` (root)
- [ ] Build commands configured (if available)
- [ ] Environment variables set (especially APP_KEY)
- [ ] Composer dependencies will be installed
- [ ] Redeploy the project

After making these changes, redeploy your project in pxxl.app.

