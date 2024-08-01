#!/bin/bash

# Install composer dependencies
composer install --no-dev --optimize-autoloader

# Clear caches
php artisan config:cache
php artisan route:cache
php artisan view:cache
