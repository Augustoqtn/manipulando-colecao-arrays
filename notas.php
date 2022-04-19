<?php

$notas = [
    'Augusto' => 8,
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