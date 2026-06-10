#!/bin/sh
set -e

if [ ! -f vendor/autoload.php ]; then
    echo "Installing Composer dependencies for Wayfinder..."
    composer install --no-interaction --prefer-dist
fi

if [ ! -x node_modules/.bin/vite ]; then
    echo "Installing npm dependencies..."
    npm ci
fi

exec npm run dev -- --host 0.0.0.0 --port "${VITE_PORT:-5173}"
