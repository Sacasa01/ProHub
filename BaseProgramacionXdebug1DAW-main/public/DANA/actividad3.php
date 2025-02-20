<!DOCTYPE html>
<html>
<head>
    <title>Clasificación de riesgo por zonas</title>
</head>
<body>
<h1>Clasificación de riesgo por zonas</h1>
<?php

// crear el array y aleatoriedad
$zonas = 10;
$rango_min = 0;
$rango_max = 100;

$precipitaciones = [];
echo "<h2>Total de precipitaciones por estación:</h2>";
foreach ($totales as $indice => $total) {
    echo "Estación " . ($indice + 1) . ": $total mm<br>";
}

// clasificar  zona por riesgo
echo "<h2>Clasificación de las zonas:</h2>";
foreach ($precipitaciones as $indice => $valor) {
    $riesgo = "";

    if ($valor <= 20) {
        $riesgo = "Bajo";
    } elseif ($valor >= 21 && $valor <= 50) {
        $riesgo = "Medio";
    } else { 
        $riesgo = "Alto";
    }

  // mostrar
    echo "Zona " . ($indice + 1) . ": $valor mm, Riesgo: $riesgo<br>";
}

?>
</body>
</html>
