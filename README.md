# QRding 
### QRding is a QR code generator for wedding and party organizer.

## How to install QRding (Laravel)
Clone this repository
```bash
git clone github.com:ljoboy/qrding.git
```

Install composer dependencies
```bash
composer install
```

Install npm dependencies
```bash
npm install
```

Copy .env.example to .env
```bash
cp .env.example .env
```

Generate application key
```bash
php artisan key:generate
```

Run migration
```bash
php artisan migrate:fresh --seed
```

Run development server
```bash
php artisan serve
```
