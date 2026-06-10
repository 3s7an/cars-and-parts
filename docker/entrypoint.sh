#!/bin/sh
set -e

until php -r "
    \$host = getenv('DB_HOST');
    \$port = getenv('DB_PORT') ?: '3306';
    \$db = getenv('DB_DATABASE');
    \$user = getenv('DB_USERNAME');
    \$pass = getenv('DB_PASSWORD');
    try {
        new PDO(\"mysql:host={\$host};port={\$port};dbname={\$db}\", \$user, \$pass ?: null);
        exit(0);
    } catch (Throwable \$e) {
        exit(1);
    }
"; do
    echo "Waiting for MySQL at ${DB_HOST}:${DB_PORT}..."
    sleep 2
done

php artisan migrate --force --no-interaction

if [ -n "$VITE_DEV_SERVER_URL" ]; then
    echo "$VITE_DEV_SERVER_URL" > public/hot
    chown www-data:www-data public/hot
else
    rm -f public/hot
fi

chown -R www-data:www-data storage bootstrap/cache
chmod -R ug+rwx storage bootstrap/cache

if [ "$APP_ENV" = "production" ]; then
    php artisan config:cache
    php artisan route:cache
    php artisan view:cache
fi

exec /usr/bin/supervisord -c /etc/supervisor/conf.d/supervisord.conf
