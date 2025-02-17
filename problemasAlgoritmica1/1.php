<?php
$notas = [10, 8, 6, 0, 2, 9, 3, 7, 0];

function clasificaciones($notas)
{
    $suma = array_sum($notas);
    $cuenta = 0;

    foreach ($notas as $nota) {
        $cuenta++;
        if ($nota == 0) {
            $cuenta--;
        }
    }

   $media = round($suma/$cuenta, 2); 
    return $media;
}

$media = clasificaciones($notas);
echo "Esta es la media de la notas sin contar los ceros: " . $media . " puntos."; 
