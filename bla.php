<?php

$notas = [
    10,
    8,
    9,
    7

];
// fiz uma copia das notas:
$notasOrdenadas = $notas;
// coloquei eles em ordem:
sort($notasOrdenadas);

echo "Oredenadas:";
var_dump($notasOrdenadas);

echo "Desordenadas:";
var_dump($notas);
