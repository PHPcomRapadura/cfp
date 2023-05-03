# PHPcomRapadura Call For Paper (ESTAMOS EM REFORMA) migrando Laravel 5.3 para 10x

Projeto para controle de submissão de palestras dos eventos da comunidade.

## Instalação via laradock

1 - Clone o repositório: `git clone add https://github.com/Laradock/laradock.git` na pasta raiz do projeto
2 - Ao fim da instalação navegue até a pasta laradcok recém criada
3 - Copie as informações do arquivo .env.example e crie um novo arquivo .env `cp .env.example .env`
4 - Edite as seguintes informações no arquivo .env:

COMPOSE_PROJECT_NAME=cfp_phpeste
PHP_VERSION=8.1

### MYSQL #################################################

MYSQL_VERSION=latest
MYSQL_DATABASE=cfp_phpeste
MYSQL_USER=root
MYSQL_PASSWORD=php@will@never@die
MYSQL_PORT=3306
MYSQL_ROOT_PASSWORD=root
MYSQL_ENTRYPOINT_INITDB=./mysql/docker-entrypoint-initdb.d

### NGINX #################################################

NGINX_HOST_HTTP_PORT=8023
NGINX_HOST_HTTPS_PORT=443
NGINX_HOST_LOG_PATH=./logs/nginx/
NGINX_SITES_PATH=./nginx/sites/
NGINX_PHP_UPSTREAM_CONTAINER=php-fpm
NGINX_PHP_UPSTREAM_PORT=9000
NGINX_SSL_PATH=./nginx/ssl/

### PHP MY ADMIN ##########################################

# Accepted values: mariadb - mysql

PMA_DB_ENGINE=mysql

# Credentials/Port:

PMA_USER=default
PMA_PASSWORD=secret
PMA_ROOT_PASSWORD=secret
PMA_PORT=8081
PMA_MAX_EXECUTION_TIME=600
PMA_MEMORY_LIMIT=256M
PMA_UPLOAD_LIMIT=2G

se rolar algum conflito de porta mude a que está conflitando!

5 - configure seu ambiente copiando o arquivo
.env.example para .env especificando os dados do seu banco de dado e outros criados pelo laradock.

```
cp .env.example .env
```

6 - Rodar o comando `docker-compose up -d nginx mysql phpmyadmin` para criar os containers docker (partimos do ponto que você tem o docker instalado na sua máquina)
7 - Rodar o comando `docker-compose exec workspace bash` para consegui rodar os comandos (Artisan, Composer, PHPUnit, Gulp, …)

#### Segurança
Aplicações laravel utilizam uma chave de encriptação, que pode ser gerada 
automaticamente através do artisan, rodando:

```
php artisan key:generate
```

#### Banco de dados
Migre as tabelas para seu banco de dados. Certifique que você configurou os dados do 
seu banco de dados no arquivo **.env** e que sua maquina contêm os drivers necessarios 
para trabalhar com seu banco de dados. 

```
php artisan migrate
php artisan db:seed
```

## Aplicação
Pronto, a intalação esta concluida para verificar a aplicação, acesse via http://localhost:8023 em seu navegador.
