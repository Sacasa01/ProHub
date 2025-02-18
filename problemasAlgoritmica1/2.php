<?php
$numeros = [12, 22, 87, 96, 65, 24, 17, 5];
$array2 = [
    "Minimo" => "",
    "Maximo" => ""
];
function calcMinMax($numeros, $array2)
{
    $array2["Minimo"] = min($numeros);
    $array2["Maximo"] = max($numeros);

    return $array2;
}
$array2 = calcMinMax($numeros, $array2);
var_dump($array2);