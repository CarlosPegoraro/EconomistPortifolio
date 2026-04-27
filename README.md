# Portfólio de Economista Moderno (Laravel 12)

Este repositório contém uma base Laravel 12 para o portfólio (MPA), com Tailwind + Vite, Livewire e arquivos de deploy com Nginx.

## Checklist de arquivos essenciais

✅ Bootstrap e entrypoints:
- `artisan`
- `bootstrap/app.php`
- `bootstrap/providers.php`
- `public/index.php`

✅ Configuração principal:
- `config/app.php`
- `config/database.php`
- `config/mail.php`
- `config/services.php`
- `config/logging.php`
- `config/cache.php`
- `config/filesystems.php`

✅ Aplicação e rotas:
- `routes/web.php`
- `routes/console.php`
- `app/Providers/AppServiceProvider.php`
- `app/Http/Controllers/Controller.php`
- `app/Models/User.php`

✅ Banco/testes/ambiente:
- `database/seeders/DatabaseSeeder.php`
- `database/factories/UserFactory.php`
- `phpunit.xml`
- `tests/TestCase.php`
- `.env.example`
- `.gitignore`

✅ Front-end e UI:
- `resources/views/*`
- `resources/js/app.js`
- `resources/css/app.css`
- `tailwind.config.js`
- `vite.config.js`
- `postcss.config.js`

✅ Deploy:
- `Dockerfile`
- `docker-compose.yml`
- `docker/nginx/default.conf`

## Observação importante

Para rodar de fato, ainda é necessário gerar dependências no ambiente de deploy/dev:

```bash
composer install
npm install
cp .env.example .env
php artisan key:generate
```

Sem `vendor/` e `node_modules/` (que não devem ir para o Git), o projeto não inicializa em runtime.
