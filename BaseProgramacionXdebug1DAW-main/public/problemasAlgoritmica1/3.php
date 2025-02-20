<?php
$numeros = [1, 1, 1, 2, 2, 3, 4, 5, 5, 5, 5];
$aociativo = [];
function repeticiones(&$numeros, &$aociativo)
{
    foreach ($numeros as $numero) {
        if (isset($aociativo[$numero])) {
            $aociativo[$numero]++;
        } else {
            $aociativo[$numero] = 1;
        }
    }
}
repeticiones($numeros, $aociativo);
print_r($aociativo);

// var_dump($array);