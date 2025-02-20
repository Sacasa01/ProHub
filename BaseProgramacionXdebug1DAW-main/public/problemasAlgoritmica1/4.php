<?php
$valores = [12, 22, 87, 96, 65, 24, 17, 5];
function invertido($valores){
    $invertido =[];
    $largo = count($valores);
        for($i=$largo -1; $i>=0; $i--){
            $invertido[] = $valores[$i];
        }
        return $invertido;
}
$valoresInvertido = invertido($valores);
print_r($valoresInvertido);