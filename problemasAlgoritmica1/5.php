<?php
function dups($array)
{
    $unicos = [];
    
    foreach ($array as $valor) {
        if (empty($unicos) || end($unicos) !== $valor) {
            $unicos[] = $valor;
        }
    }

    // Reindexar el array con array_values()
    $unicos = array_values($unicos);

    return $unicos;
}

$valores = [1, 1, 1, 2, 2, 3, 4, 5, 5, 5, 5];
$valoresUnicos = dups($valores);

print_r($valoresUnicos);
?>
