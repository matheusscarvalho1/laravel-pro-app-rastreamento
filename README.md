#📦 Aplicação de Rastreamento de Fretes

Projeto desenvolvido durante os cursos da TreinaWeb.
Este repositório faz parte do projeto prático Laravel – Aplicação de Rastreamento de Fretes, com o objetivo de aplicar conceitos fundamentais do framework Laravel na construção de uma aplicação real.

##🚀 Tecnologias Utilizadas

- PHP

- Laravel

- PHP Filament

- Composer

Banco de dados relacional (MySQL, PostgreSQL ou outro compatível)

📂 Instalação do Projeto
1️⃣ Clonar o repositório
git clone https://github.com/treinaweb/laravel-aplicacao-de-rastreamento-de-fretes.git


Acesse a pasta do projeto:

cd laravel-aplicacao-de-rastreamento-de-fretes

2️⃣ Instalar as dependências

Em ambiente padrão:

composer install


Ou, em ambiente de desenvolvimento:

composer update

3️⃣ Configurar variáveis de ambiente

Copie o arquivo de exemplo:

cp .env.example .env


Edite o arquivo .env e configure:

Nome da aplicação

Ambiente

Chave da aplicação

Conexão com o banco de dados (DB_HOST, DB_DATABASE, DB_USERNAME, DB_PASSWORD)

Gere a chave da aplicação:

php artisan key:generate

4️⃣ Criar a estrutura do banco de dados

Execute as migrations:

php artisan migrate

5️⃣ Iniciar o servidor de desenvolvimento
php artisan serve


A aplicação estará disponível em:

http://localhost:8000

📌 Objetivo do Projeto

Praticar o uso do Laravel

Trabalhar com migrations, controllers e models

Aplicar boas práticas de organização de código

Criar uma aplicação funcional de rastreamento de fretes