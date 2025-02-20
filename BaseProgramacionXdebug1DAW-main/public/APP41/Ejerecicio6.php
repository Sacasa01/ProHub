<html>
    <head>
        <title>Ejercicio 4</title>
    </head>
    <body>
        <h1>Calculadora de la letra del DNI</h1>
    </body>

<?php

$posiciones = [
    1 => 'Ana',
    2 => 'Oswaldo',
    3 => 'Raúl',
    4 => 'Celia',
    5 => 'María',
    6 => 'Antonio'
];

foreach ($posiciones as $posicion => $nombre) {
    echo "$posicion. $nombre<br>";

}

?>

</body>
</html>