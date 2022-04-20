<?php

$notasBimestre1 = [
    'Augusto' => 6,
    'Ricardo' => 7,
    'Marcelo' => 9,
    'Babaca'  => 5,
    'Cleitinho' => 10

];

$notasBimestre2 = [
    'Ricardo' => 7,
    'Marcelo' => 9,
    'Babaca'  => 5,
    'Cleitinho' => 10

];

//                     (só leva as chaves em consideracao)
//             array a ser comparado     arrays para comparar
var_dump(array_diff_key($notasBimestre1, $notasBimestre2));
