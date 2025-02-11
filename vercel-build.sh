#!/bin/bash

# Install composer dependencies
composer install

# Clear caches
php artisan config:cache
php artisan route:cache
php artisan view:cache
