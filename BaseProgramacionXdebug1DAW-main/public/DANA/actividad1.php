<!DOCTYPE html>
<html>
<head>
    <title>DANA</title>
</head>
<body>
<h1>Actividad 1</h1>
<h2>Precipitacion de lluvia</h2>
<?php
//configuracion del tamaño de la array y aleatoriedad
$tamano_array = 24;
$rango_min = 0;
$rango_max = 100;
//configuracion de la array y numero aleatorios
$precipitaciones = [];
for($i=0;$i<$tamano_array;$i++){
$precipitaciones[] = rand($rango_min,$rango_max);
}
//Alerta de precipitación si es mayor a 50 mm
foreach ($precipitaciones as $indice => $valor) {
    if ($valor > 50){
        echo "<strong>¡ALERTA LLUVIAS PELIGROSAS, RIESGO DE INUNDACIONES!</strong><br>";
    }
    //Mostrar la precipitaciones en orden
    $cardinalidad = $indice + 1; 
    echo "$cardinalidad horas, $valor mm<br>";
}
?>
</body>
</html>