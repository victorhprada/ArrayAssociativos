<?php

namespace Alura;

require 'Autoload.php';

$correntista = [
    'Giovani',
    'João',
    'Maria',
    'Luis',
    'Luisa',
    'Rafael'
];

$CorrentistaNaoPagantes = [
    'Luis',
    'Luisa',
    'Rafael'
];

$correntistaPagantes =  array_diff($correntista, $CorrentistaNaoPagantes);

echo "<pre>";
var_dump($correntistaPagantes);
echo "</pre>";

$correntista2 = [
    'Giovani',
    'João',
    'Maria',
    'Luis',
    'Luisa',
    'Rafael'
];

$dinheiro = [
    2500,
    3000,
    4400,
    1000,
    8700,
    9000
];

$relacionados  = array_combine($correntista2, $dinheiro);

$relacionados["Matheus"] = 4500;

echo "<pre>";
var_dump($relacionados);
echo "</pre>";

echo "<pre>";
echo $relacionados["Giovani"] . PHP_EOL;
echo $relacionados["Matheus"] . PHP_EOL;

echo "O saldo do Giovani é: {$relacionados["Giovani"]}" . PHP_EOL;
echo "</pre>";

if (array_key_exists("Maria", $relacionados)) {
    echo "O saldo do/da correntista é: {$relacionados["Maria"]}";
} else{
    echo "Correntista não existe. Tente outro";
}

$maiores =  ArrayUtils::encontrarPessoaComSaldoMaior(3000, $relacionados);

echo "<pre>";
var_dump($maiores);
echo "</pre>";