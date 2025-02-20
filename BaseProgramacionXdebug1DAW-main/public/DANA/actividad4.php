<!DOCTYPE html>
<html>
<head>
    <title>Estado de las calles</title>
</head>
<body>
<h1>Estado de las calles</h1>
<?php

// crear arrays y rangos
$calles = [];
$estadoCalles = [];
$Calles = 50; // numero de calles
$rango_min = 0; // sin daño
$rango_max = 2; //  intransitable

// llenar los arrays
for ($i = 1; $i <= $Calles; $i++) {
    $calles[] = "Calle" . $i; // calle1, calle2, etc...
    $estadoCalles[] = rand($rango_min, $rango_max);
}

// contador 
$contadorIntransitables = 0;

// recorrer calles y mostrar su estado 
echo "<h2>Estado actual de las calles:</h2>";
foreach ($calles as $indice => $nombreCalle) {
    $estado = $estadoCalles[$indice];
    $descripcionEstado = "";

    
    switch ($estado) {
        case 0:
            $descripcionEstado = "Sin daño";
            break;
        case 1:
            $descripcionEstado = "Dañado";
            break;
        case 2:
            $descripcionEstado = "Intransitable";
            $contadorIntransitables++; 
            break;
    }

    // mostrar la información de la calle
    echo "$nombreCalle: $descripcionEstado<br>";
}

// mostrar alerta si hay más de 10 calles intransitables
if ($contadorIntransitables > 10) {
    echo "<h2 style='color: red;'>ALERTA: ¡Hay más de 10 calles intransitables!</h2>";
}

?>
</body>
</html>
