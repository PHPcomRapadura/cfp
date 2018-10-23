# PHPcomRapadura Call For Paper

Projeto para controle de submissão de palestras dos eventos da comunidade.

## Instalação
Clone este projeto para sua maquina e configure seu ambiente copiando o arquivo
.env.example para .env especificando os dados do seu banco de dado e outros.

```
cp .env.example .env
```
### Instalação via docker

Em um terminal execute:

```
docker-compose up
```

Após os containers estarem up, execute as migrations

```
docker exec -it cfp_app_1 php artisan migrate
docker exec -it cfp_app_1 php artisan db:seed
```

### Instalação manual
#### Dependências
Instale suas dependências através do composer, rodando em seu terminal:

```
composer install
```


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
Pronto, a intalação esta concluida para verificar a aplicação, rode o camando abaixo e 
acesse via http://localhost:8000 em seu navegador.

```
php artisan serve
```

