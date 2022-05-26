<?php

require_once __DIR__ . '/vendor/autoload.php';

use App\Services\Http;

$requisicao = new Http();
$requisicao->get('https://viacep.com.br/ws/01001000/json/');

echo($requisicao->retorno);
