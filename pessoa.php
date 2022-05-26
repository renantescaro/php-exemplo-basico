<?php

require_once __DIR__ . '/vendor/autoload.php';

use App\Pessoa;

$pessoa = new Pessoa();
$nomeCompletoPessoa = $pessoa->nomeCompleto();
$idade = $pessoa->idade();

echo('<b>Nome completo:</b>');
echo($nomeCompletoPessoa);

echo('<br><br>');

echo('<b>Idade:</b>');
echo($idade);
