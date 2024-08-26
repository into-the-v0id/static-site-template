FROM dunglas/frankenphp:1-php8.3-alpine

# Setup frontend
COPY ./frontend/public /var/www/html/frontend/public

# Setup backend
RUN cp $PHP_INI_DIR/php.ini-production $PHP_INI_DIR/php.ini
COPY ./backend /var/www/html/backend

# Setup caddy/frankenphp
COPY Caddyfile /etc/caddy/Caddyfile
RUN frankenphp validate --config /etc/caddy/Caddyfile
