<html>
<head>
    <title>Ejercicio 1</title>
</head>
<body>
    <h1></h1>
</body>
</html>


<?php
  $meteorologicalData = [
    [
        'station' => 'Catarroja',
        'temperature' => 15,
        'humidity' => 85,
        'atmosphericPressure' => 1024
    ],
    [
        'station' => 'Alzira',
        'temperature' => 35,
        'humidity' => 75,
        'atmosphericPressure' => 1000
    ],
    [
        'station' => 'Almussafes',
        'temperature' => 17,
        'humidity' => 95,
        'atmosphericPressure' => 950
    ],
    [
        'station' => 'Carlet',
        'temperature' => 31,
        'humidity' => 55,
        'atmosphericPressure' => 850
    ]
  ];
// Función para corregir la presión atmosférica de una estación específica
function fixPressure($estacion, $valor) {
    // Verifica si el índice de la estación existe en el array
    if (isset($valor[$estacion])) {
        if ($valor[$estacion]['temperature'] < 30) {
            $valor[$estacion]['atmosphericPressure'] /= 0.85; // Corrige 15% menos
        } else {
            $valor[$estacion]['atmosphericPressure'] /= 0.75; // Corrige 25% menos
        }
    }
    return $valor; // Devuelve el array con la estación corregida
}

// Función para mostrar la información de todas las estaciones
function show($ver) {
    foreach ($ver as $indice => $station) {
        echo "Índice: $indice<br>";  // Usamos <br> para salto de línea en entorno web
        echo "Estación: " . $station['station'] . "<br>";
        echo "Temperatura: " . $station['temperature'] . "°C<br>";
        echo "Humedad: " . $station['humidity'] . "%<br>";
        echo "Presión atmosférica: " . $station['atmosphericPressure'] . " hPa<br>";
        echo str_repeat("-", 20) . "<br><br>";  // Añadir salto de línea adicional para separar estaciones
    }
}

// Función para calcular la temperatura promedio
function averageTemperature($data) {
    $totalTemperature = 0;
    $count = count($data);

    foreach ($data as $station) {
        $totalTemperature += $station['temperature'];
    }

    return $count > 0 ? $totalTemperature / $count : 0;
}

// Mostrar las estaciones iniciales
echo "Estaciones iniciales:\n";
show($meteorologicalData);

// Corregir una estación específica y mostrar la lista actualizada
$stationToFix = 1; // Cambia este índice según la estación que quieras corregir
$meteorologicalData = fixPressure($stationToFix, $meteorologicalData);

echo "\nEstaciones después de corregir la estación con índice $stationToFix:\n";
show($meteorologicalData);

// Mostrar la temperatura promedio
$averageTemp = averageTemperature($meteorologicalData);
echo "\nTemperatura media de las estaciones: " . number_format($averageTemp, 2) . "°C\n";
?>