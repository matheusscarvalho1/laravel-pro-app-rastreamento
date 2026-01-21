## Projeto desenvolvido na TreinaWeb Cursos

Esta aplicação tem como objetivo realizar o **rastreamento de fretes**, permitindo o controle de etapas, status e histórico de movimentações, além de contar com um **painel administrativo** para gerenciamento dos dados.

## 🛠️ Tecnologias Utilizadas

- PHP 8.2
- Laravel 11
- Blade
- Filament PHP v5
- Tailwind CSS
- Eloquent ORM
- SQLite (ambiente de desenvolvimento)
- Composer

---

### Instalando o projeto

#### Clonar o repositório

```
git clone https://github.com/treinaweb/laravel-aplicacao-de-rastreamento-de-fretes.git
```

#### Instalar as depencências

```
composer install
```

Ou em ambiente de desenvolvimento:

```
composer update
```

#### Criar arquivo de configurações de ambiente

Copiar o arquivo de exemplo `.env.example` para `.env` na raiz do projeto
configurar os detalhes da aplicação e conexão com o banco de dados.

#### Criar a estrutura no banco de dados

```
php artisan migrate
```

#### Iniciar o servidor de desenvolvimento

```
php artisan serve
```

- A aplicação fica disponível em:

```
http://localhost:8000
```