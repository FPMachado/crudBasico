<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Tecnologias utilizadas

* Banco de Dados: mysql
* IDE: VSCode

## Como Utilizar
* Baixar o XAMPP
    > https://www.apachefriends.org/pt_br/download.html
    
* Criar um Banco de dados local com o nome de "crud_basico" (Funcionalidades básicas do programa)
```
    CREATE TABLE produtos (
        id int NOT NULL AUTO_INCREMENT,
        nome varchar (255) NOT NULL,
        custo double NOT NULL,
        preco double NOT NULL,
        quantidade int NOT NULL,
        PRIMARY KEY (id));
  ```
  
  * Entrar na pasta do projeto via prompt e executar o comando
  
  ```
  php artisan key:generate
  ```
  Após rodar o comando verificar as configurações com o banco de dados MySql (descomentar o php.ini)
