
## Como rodar o projeto baixado

Instalar as dependências do PHP
```
composer install
```

Gerar a chave
```
php artisan key:generate
```

Alterar no arquivo "app/Http/Controllers/EnviarSmsController.php" as credenciais do servidor resposável em enviar SMS.<br>
Sistema usado  para enviar SMS: https://login.iagente.com.br/login-sms<br>

Iniciar o projeto criado com Laravel
```
php artisan serve
```

```
http://127.0.0.1:8000
```

## Sequencia para criar o projeto
Criar o projeto com Laravel
```
composer create-project laravel/laravel .
```

Iniciar o projeto criado com Laravel
```
php artisan serve
```

Para acessar o front-end
```
http://127.0.0.1:8000
```