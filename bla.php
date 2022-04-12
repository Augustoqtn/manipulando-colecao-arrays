<?php

$notas = [
    [
        'Aluno' => 'Maria',
        'Nota' => 10,
    ],
    [
        'Aluno' => 'Augusto',
        'Nota' => 6,
    ],
    [
        'Aluno' => 'Ricardo',
        'Nota' => 9,
    ],
];

function ordenaNotas(array $nota1, array $nota2): int
{
    if ($nota1['Nota'] > $nota2['Nota']) {
        return -1;
    }

    if ($nota2['Nota'] > $nota1['Nota']) {
        return 1;
    }

    return 0;
}

usort($notas, 'ordenaNotas');
var_dump($notas);
