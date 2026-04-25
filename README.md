# 🛒 Laravel Products API

API RESTful de gerenciamento de produtos com autenticação via token, construída com Laravel 13 e PHP 8.3.

## 🚀 Tecnologias

- PHP 8.3
- Laravel 13
- SQLite
- Laravel Sanctum (autenticação por token)

## 📋 Endpoints

### Autenticação
| Método | Rota | Descrição |
|--------|------|-----------|
| POST | /api/register | Cadastro de usuário |
| POST | /api/login | Login — retorna token |
| POST | /api/logout | Logout (requer token) |

### Produtos — rotas públicas
| Método | Rota | Descrição |
|--------|------|-----------|
| GET | /api/produtos | Lista todos os produtos |
| GET | /api/produtos/{id} | Busca produto por ID |

### Produtos — rotas protegidas (requer token)
| Método | Rota | Descrição |
|--------|------|-----------|
| POST | /api/produtos | Cria novo produto |
| PUT | /api/produtos/{id} | Atualiza produto |
| DELETE | /api/produtos/{id} | Deleta produto |

## ⚙️ Como rodar localmente

```bash
# Clone o repositório
git clone https://github.com/Viokyn/php-laravel.git
cd php-laravel

# Instala as dependências
composer install

# Configura o ambiente
cp .env.example .env
php artisan key:generate

# Cria o banco e roda as migrations
php artisan migrate

# Sobe o servidor
php artisan serve
```

A API estará disponível em `http://127.0.0.1:8000`

## 🔐 Autenticação

Esta API usa autenticação via Bearer Token com Laravel Sanctum.

**1. Registre um usuário:**
```json
POST /api/register
{
    "name": "Seu Nome",
    "email": "email@exemplo.com",
    "password": "123456"
}
```

**2. Faça login e copie o token retornado:**
```json
POST /api/login
{
    "email": "email@exemplo.com",
    "password": "123456"
}
```

**3. Use o token nas rotas protegidas:**
```
Authorization: Bearer <seu_token_aqui>
```

## 📦 Exemplo de uso

**Criar produto (autenticado):**
```json
POST /api/produtos
{
    "nome": "Notebook",
    "preco": 3500.00
}
```

**Resposta:**
```json
{
    "id": 1,
    "nome": "Notebook",
    "preco": 3500,
    "created_at": "2026-04-23T14:00:00.000000Z",
    "updated_at": "2026-04-23T14:00:00.000000Z"
}
```

## 👨‍💻 Autor

Desenvolvido por [Filippe (Viokyn)](https://github.com/Viokyn)
