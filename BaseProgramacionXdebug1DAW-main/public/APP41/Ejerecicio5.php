<html>
    <head>
        <title>Ejercicio 4</title>
    </head>
    <body>
        <h1>Calculadora de la letra del DNI</h1>
    </body>
</html>
<?php
function generarFechas(){
    $meses = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"];
    $fechas1 = array_rand($meses);
    $mesAleatorio = $meses[$fechas1];
    $fechas = 0;
    switch ($mesAleatorio) {
        case 'Enero':
        case 'Marzo':
        case 'Mayo':
        case 'Julio':
        case 'Agosto':
        case 'Octubre':
        case 'Diciembre':
            $dia = random_int(1, 31);
            break; 
        case 'Febrero':
            $dia = random_int(1, 28);
            break; 
        case 'Abril':
        case 'Junio':
        case 'Septiembre':
        case 'Noviembre':
            $dia = random_int(1, 30);
            break; 
    }
    return [$dia, $mesAleatorio];
}
for ($i=1;$i<=10;$i++) { 
list ($dia, $mes) = generarFechas();

echo "Fecha $i: " . $dia . " de " . $mes . " de 2018 <br>";
}













?>
</body>
</html>