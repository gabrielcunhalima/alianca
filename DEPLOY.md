# Deploy — Aliança Consultoria
Stack: Laravel 13 + Tailwind CSS 3 + Alpine.js 3 + Vite 8 + MySQL + Hostinger

## URL Local (WAMP)
http://localhost/alianca/public

---

## 1. Setup WAMP (já executado pelo Wagner Web)

```bash
# Copiar projeto
cp -r clients/alianca-consultoria/site/ E:/wamp64/www/alianca/

# Instalar dependências PHP
cd E:/wamp64/www/alianca && composer install --no-interaction --prefer-dist

# Gerar APP_KEY
php artisan key:generate

# Criar banco
mysql -u root -e "CREATE DATABASE IF NOT EXISTS alianca_db CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;"

# Migrations
php artisan migrate --force

# Compilar assets
npm install && npm run build
```

---

## 2. Configurar .env
w
```env
APP_NAME="Aliança Consultoria"
APP_ENV=production
APP_KEY=          # gerado pelo artisan key:generate
APP_DEBUG=false
APP_URL=https://aliancaconsultoria.com.br

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=alianca_db
DB_USERNAME=alianca_user
DB_PASSWORD=SUA_SENHA

MAIL_MAILER=smtp
MAIL_HOST=smtp.hostinger.com
MAIL_PORT=465
MAIL_USERNAME=financeiro@aliancaadministracao.com
MAIL_PASSWORD=SUA_SENHA_EMAIL
MAIL_ENCRYPTION=ssl
MAIL_FROM_ADDRESS=financeiro@aliancaadministracao.com
MAIL_FROM_NAME="Aliança Consultoria"
```

---

## 3. Deploy na Hostinger

### Via File Manager ou FTP:
1. Fazer upload de TODOS os arquivos para `/public_html/`
2. A pasta `public/` do Laravel deve ser a raiz do domínio

### Estrutura correta na Hostinger:
```
/home/u123456/domains/aliancaconsultoria.com.br/
├── public_html/         ← conteúdo de /public do Laravel
│   ├── index.php
│   ├── .htaccess
│   └── build/           ← gerado pelo npm run build
└── alianca/             ← resto do Laravel (fora do public_html)
    ├── app/
    ├── config/
    ├── resources/
    ├── routes/
    └── ...
```

**Ou** configurar o Document Root no painel Hostinger para apontar para `public/`.

---

## 4. Corrigir permissões suPHP (CRÍTICO)

Via SSH ou File Manager:
```bash
# Diretórios: 755
find . -type d -exec chmod 755 {} \;

# Arquivos: 644
find . -type f -exec chmod 644 {} \;

# Storage e bootstrap/cache precisam ser escrevíveis
chmod -R 775 storage bootstrap/cache
```

---

## 5. Configurar SSL Let's Encrypt

Painel Hostinger → SSL → Let's Encrypt → instalar para `aliancaconsultoria.com.br`

---

## 6. Comandos pós-deploy

Via SSH:
```bash
php artisan config:cache
php artisan route:cache
php artisan view:cache
php artisan storage:link
```

---

## 7. Forçar HTTPS no Laravel

Em `app/Providers/AppServiceProvider.php`:
```php
public function boot(): void
{
    if (config('app.env') === 'production') {
        \Illuminate\Support\Facades\URL::forceScheme('https');
    }
}
```

---

## 8. Checklist final

- [ ] Site abre em https://aliancaconsultoria.com.br sem erro
- [ ] Todas as 5 páginas carregam (/, /servicos, /sobre, /clientes, /contato)
- [ ] Formulário de contato envia email para financeiro@aliancaadministracao.com
- [ ] Redirect HTTP → HTTPS funcionando
- [ ] robots.txt acessível em /robots.txt
- [ ] Mobile: menu hamburguer funciona
- [ ] Core Web Vitals: LCP < 2.5s (verificar no PageSpeed Insights)
