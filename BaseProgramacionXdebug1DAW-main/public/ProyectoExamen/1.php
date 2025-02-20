<?php
session_start();
if (!isset($_SESSION['movimientos'])) {
    $_SESSION['movimientos'] = 0;
}

// Generar combinaciones de números y colores
$numeros = [1, 2, 3, 4, 5, 6];
$colores = ['RED', 'YEL', 'GRE', 'BLU', 'BLA', 'WHI'];

function generarCombinaciones($numeros, $colores) {
    $combinaciones = [];
    foreach ($numeros as $numero) {
        foreach ($colores as $color) {
            $combinaciones[] = "$numero-$color"; 
        }
    }
    shuffle($combinaciones); 
    // $combinaciones = array_merge($combinaciones, $combinaciones);
    return $combinaciones;

}

function contarCasillasConNumeroTres($combinaciones) {
    $contador = 0;                                                           //POSIBLE CAMBIO 1
    foreach ($combinaciones as $combinacion) {
        list($numero, $color) = explode('-', $combinacion);
        if ($numero == 3) {
            $contador++;
        }
    }
    return $contador;
}


// function contarMisMovimientos() {
// }

function generarTablero($filas, $columnas, $combinaciones) {
    $tablero = [];
    $indice = 0;

    for ($i = 0; $i < $filas; $i++) {
        $fila = [];                             //crea filas vacias
        for ($j = 0; $j < $columnas; $j++) {    //y este añade valores a las filas
            $fila[] = $combinaciones[$indice];
            $indice++;
        }
        $tablero[] = $fila;                      //guarda las filas en el tablero
    }

    return $tablero;
}

function imprimirTablero($tablero) {
    echo "<table border='1' style='border-collapse: collapse;'>";
    foreach ($tablero as $fila) {
        echo "<tr>";
        foreach ($fila as $celda) {
            echo "<td style='padding: 5px; text-align: center;'>$celda</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
}

function verificarMovimiento($tablero, $filaInicio, $columnaInicio, $filaFin, $columnaFin) {
    if ($filaInicio === $filaFin || $columnaInicio === $columnaFin) {
        return "Tirada permitida"; 
    }
    return "Tirada no permitida";  
}

function verificarColorONumero($tablero, $filaInicio, $columnaInicio, $filaFin, $columnaFin) {
    list($numInicio, $colorInicio) = explode('-', $tablero[$filaInicio][$columnaInicio]);  
    list($numFin, $colorFin) = explode('-', $tablero[$filaFin][$columnaFin]);

    echo "<h2>Casilla inicial: $numInicio-$colorInicio</h2>";
    echo "<h2>Casilla final: $numFin-$colorFin</h2>";               //POSIBLE CAMBIO 4

    if ($numInicio === $numFin || $colorInicio === $colorFin) { //reglas de juego
        return "Tirada válida"; 
    }
    return "Tirada no válida"; 
}


if (!isset($_SESSION['tablero'])) { //comprueba si no esta creada la sesion
    $combinaciones = generarCombinaciones($numeros, $colores);
    $_SESSION['tablero'] = generarTablero(6, 6, $combinaciones);
    $_SESSION['movimientos']++;         //posible cambio 5 pt 2
echo "<h2>Movimientos realizados: {$_SESSION['movimientos']}</h2>";

}
// $combinaciones = generarCombinaciones($numeros, $colores);
// $contador = contarCasillasConNumeroTres($combinaciones);
// echo "Cantidad de casillas con número 3: $contador";
$tablero = $_SESSION['tablero'];

// Procesar formulario
$mensajePosicion = "";
$mensajeColorONumero = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $filaInicio = (int)$_POST['filaInicio'] - 1; //(int) convierte a entero
    $columnaInicio = (int)$_POST['columnaInicio'] - 1; // resta 1 por lo de cero en php
    $filaFin = (int)$_POST['filaFin'] - 1;
    $columnaFin = (int)$_POST['columnaFin'] - 1;
    echo "<h2>Coordenadas iniciales: ($filaInicio, $columnaInicio)</h2>";       //POSIBLE CAMBIO 3
    echo "<h2>Coordenadas finales: ($filaFin, $columnaFin)</h2>";

    $rangoValido = $filaInicio >= 0 && $filaInicio < 6 &&
                   $columnaInicio >= 0 && $columnaInicio < 6 &&
                   $filaFin >= 0 && $filaFin < 6 &&
                   $columnaFin >= 0 && $columnaFin < 6;

    if (!$rangoValido) {
        $mensajePosicion = "Coordenadas fuera de rango";
    } else {
        $mensajePosicion = verificarMovimiento($tablero, $filaInicio, $columnaInicio, $filaFin, $columnaFin);

        $mensajeColorONumero = verificarColorONumero($tablero, $filaInicio, $columnaInicio, $filaFin, $columnaFin);
    }
}
if ($mensajePosicion === "Tirada permitida" && $mensajeColorONumero === "Tirada válida") {
    $distanciaFilas = abs($filaInicio - $filaFin);
    $distanciaColumnas = abs($columnaInicio - $columnaFin);         //POSIBLE CAMBIO 2
    $totalCasillasMovidas = $distanciaFilas + $distanciaColumnas;
    echo "Total casillas movidas: $totalCasillasMovidas";
}
// Reiniciar tablero
if (isset($_GET['reiniciar'])) {
    unset($_SESSION['tablero']);
    unset($_SESSION['movimientos']);//borra la sesion de movimiento, posible cambio 5 pt 3
    header("Location: " . $_SERVER['PHP_SELF']);
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Examen 1a Evaluación</title>
</head>
<body>
    <h1>Examen 1a Evaluación</h1>
    <form method="post">
        <label for="filaInicio">Fila inicio: </label>
        <input type="number" name="filaInicio" required><br>

        <label for="columnaInicio">Columna inicio: </label>
        <input type="number" name="columnaInicio" required><br>

        <label for="filaFin">Fila fin: </label>
        <input type="number" name="filaFin" required><br>

        <label for="columnaFin">Columna fin: </label>
        <input type="number" name="columnaFin" required><br>

        <input type="submit" value="Prueba">
    </form>



    <?php
    // Imprimir tablero
    imprimirTablero($tablero);

    //  mensajes validar y permitido
    if ($mensajePosicion) {
        echo "<h2>$mensajePosicion</h2>";
    }

    if ($mensajeColorONumero) {
        echo "<h2>$mensajeColorONumero</h2>";
    }
    ?>

    <form method="get">
        <button type="submit" name="reiniciar" value="1">Reiniciar Tablero</button>
    </form>
</body>
</html>
