<?php

$notas = [
    'Augusto' => null,
    'Ricardo' => 7,
    'Marcelo' => 9,
    'Babaca'  => 5,
    'Cleitinho' => 10

];

ksort($notas);
var_dump($notas);

if (is_array($notas)) {
    echo "sim é um array" . PHP_EOL;
}

var_dump(array_is_list($notas));

echo "fez aprova?" . PHP_EOL;

var_dump(isset($notas['Augusto']));