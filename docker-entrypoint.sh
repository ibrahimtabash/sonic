#!/bin/bash

set -e

echo "Running Laravel migrations..."

php artisan migrate --force

echo "Clearing Laravel cache..."

php artisan optimize:clear

echo "Starting Apache..."

php artisan db:seed --force

exec apache2-foreground
