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

echo "alguém tirou 3?" . PHP_EOL;

var_dump(in_array(3, $notas, true));

// array_key_exists = verifica se a chave exite;
// in_array = verifica se o valor existe;
// isset = verifica se a chave existe e não é nula.