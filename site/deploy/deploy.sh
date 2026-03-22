#!/bin/bash
# ============================================================
# Urbie — Script de Deploy no EC2
# ============================================================
# Uso: ./deploy.sh
# Execute no servidor EC2 (Ubuntu) com sudo
# ============================================================

set -e

PROJECT_DIR="/var/www/urbie/site"
APACHE_CONF="/etc/apache2/sites-available/urbie.conf"

echo "🚀 Iniciando deploy do Urbie..."

# 1. Atualizar código
echo "📦 Atualizando código..."
if [ ! -d "$PROJECT_DIR" ]; then
    mkdir -p /var/www/urbie
    git clone https://github.com/1brunovieira/urbie.git /var/www/urbie
else
    cd /var/www/urbie && git pull origin main
fi

# 2. Instalar dependências PHP
echo "🔧 Instalando dependências PHP..."
cd "$PROJECT_DIR"
composer install --no-dev --optimize-autoloader

# 3. Instalar dependências Node e build
echo "⚡ Buildando assets..."
npm ci
npm run build

# 4. Configurar permissões
echo "🔑 Configurando permissões..."
chown -R www-data:www-data "$PROJECT_DIR"
chmod -R 755 "$PROJECT_DIR"
chmod -R 775 "$PROJECT_DIR/storage"
chmod -R 775 "$PROJECT_DIR/bootstrap/cache"

# 5. Configurar .env se não existir
if [ ! -f "$PROJECT_DIR/.env" ]; then
    cp "$PROJECT_DIR/.env.example" "$PROJECT_DIR/.env"
    echo "⚠️  Configure o arquivo .env em $PROJECT_DIR/.env"
    echo "   Depois execute: php artisan key:generate"
fi

# 6. Otimizar Laravel
echo "🚀 Otimizando Laravel..."
cd "$PROJECT_DIR"
php artisan config:cache
php artisan route:cache
php artisan view:cache
php artisan storage:link

# 7. Configurar Apache
echo "🌐 Configurando Apache..."
cp "$PROJECT_DIR/deploy/apache-urbie.conf" "$APACHE_CONF"
a2enmod rewrite headers expires
a2ensite urbie.conf
apache2ctl configtest && service apache2 reload

echo "✅ Deploy concluído!"
echo ""
echo "Acesse:"
echo "  Site:   http://15.228.98.234/urbie"
echo "  Painel: http://15.228.98.234/urbie/painel"
