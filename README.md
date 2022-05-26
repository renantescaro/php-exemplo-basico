# Simples exemplo de PHP

## Preparar ambiente
* Instalar PHP 7.4 e Composer
* Adicionar o PHP nas variáveis de ambiente


## Testar no terminal o funcionamento do PHP e do composer
```bash
php --version
composer --version
```

## Iniciar composer
```bash
composer init
```

## Lista de pacotes: 
https://packagist.org/


## Instalar pacote no projeto
```bash
composer require nome/pacote
```


## Adicionar o autoload do composer no seu código, exemplo
```php
<?php
require_once __DIR__ . '/vendor/autoload.php';

// exemplo de importação de pacote
use SebastianBergmann\Timer\Timer;

// seu código usando o pacote adicionado
```


## Iniciar aplicação PHP
```bash
php -S localhost:80
```


## Acessar exemplos
[link](http://localhost)
