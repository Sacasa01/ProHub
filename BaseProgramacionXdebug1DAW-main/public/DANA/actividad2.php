<!DOCTYPE html>
<html>
<head>
    <title>Precipitaciones por estación</title>
</head>
<body>
<h1>Precipitaciones diarias</h1>
<?php

// Crear el array bidimensional con 5 estaciones y 24 horas
$estaciones = 5;
$horas = 24;
$rango_min = 0;
$rango_max = 100;

$precipitaciones = [];

// Llenar el array bidimensional con valores aleatorios
for ($estacion = 0; $estacion < $estaciones; $estacion++) {
    for ($hora = 0; $hora < $horas; $hora++) {
        $precipitaciones[$estacion][$hora] = rand($rango_min, $rango_max);
    }
}

// Calcular el total de precipitaciones por estación y encontrar la estación con más lluvia
$totales = [];
$mayor_acumulacion = 0;
$estacion_mas_lluviosa = 0;

for ($estacion = 0; $estacion < $estaciones; $estacion++) {
    $total_precipitacion = array_sum($precipitaciones[$estacion]);
    $totales[$estacion] = $total_precipitacion;

    if ($total_precipitacion > $mayor_acumulacion) {  // es el condicional
        $mayor_acumulacion = $total_precipitacion;     // se actualiza el valor con mayor precipitacion
        $estacion_mas_lluviosa = $estacion; // se actualiza el indice con mayor precipitacion
    }
}

// mostrar totales de precipitaciones por estación
echo "<h2>Total de precipitaciones por estación:</h2>";
foreach ($totales as $indice => $total) {
    echo "Estación " . ($indice + 1) . ": $total mm<br>";
}

// mostrar estación con más lluvia
echo "<h2>Estación con mayor acumulación de lluvia:</h2>";
echo "La estación " . ($estacion_mas_lluviosa + 1) . " tuvo la mayor acumulación con $mayor_acumulacion mm.<br>";

// mostrar array completo
echo "<h2>Datos completos:</h2>";
foreach ($precipitaciones as $indice => $horas) {
    echo "Estación " . ($indice + 1) . ": " . implode(", ", $horas) . "<br>";
}

?>
</body>
</html>
