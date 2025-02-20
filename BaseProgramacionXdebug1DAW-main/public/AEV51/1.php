<html>
<head>
    <title></title>
</head>
<body>
    <h1></h1>
</body>
</html>
<?php

$pomodoroHaters = [
    ['~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~'],
    ['~', '~', '~', '~', '~', '0', '0', 'A', '0', 'A', '0', '0', 'A', '0', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~'],
    ['~', '~', '~', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~'],
    ['~', '~', '~', '0', '0', '0', '0', '0', '0', 'A', '0', '0', '0', '0', 'A', '0', '~', '~', '~', '~', '~', '~', '~', '~'],
    ['~', '~', '~', '~', '~', '0', '0', '0', '0', '0', 'A', 'A', '0', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~'],
    ['~', '~', '~', '~', '~', '~', '0', '0', '0', '0', '0', 'A', '0', '0', 'A', 'A', 'A', '0', '~', '~', '~', '~', '~', '~'],
    ['~', '~', '0', '0', '0', 'A', '0', 'A', 'A', '0', '0', '0', '0', '0', '0', '0', 'A', '0', '0', '0', 'A', '0', '0', '~'],
    ['~', '~', '~', '~', '~', '~', '0', '0', 'A', '0', '0', '0', 'A', '0', '0', '0', '0', '0', '0', 'A', '0', '0', '0', '~'],
    ['~', '~', '~', '~', '~', '~', '~', '~', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '~'],
    ['~', '~', '~', '~', '~', '0', '0', 'A', '0', '0', '0', '0', '0', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~'],
    ['~', '~', '~', '~', '~', '0', '0', '0', '0', '0', 'A', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '~', '~', '~'],
    ['~', '~', '~', '0', '0', '0', '0', '0', '0', '0', 'A', '0', '0', '0', '0', '0', '0', '0', '0', '~', '~', '~', '~', '~'],
    ['~', '0', '0', '0', '0', '0', '0', '0', '0', 'A', '0', '0', '0', 'A', '0', '0', '0', '0', '0', 'A', '0', '~', '~', '~'],
    ['~', '~', '~', '~', '~', '~', '~', '~', '~', '0', '0', '0', '0', 'A', '0', '0', '~', '~', '~', '~', '~', '~', '~', '~'],
    ['~', '~', '~', '~', '~', '~', '~', '~', '~', '0', '0', '0', 'A', 'A', 'A', '0', '0', 'A', '0', '0', '0', '~', '~', '~'],
    ['~', '~', '~', '~', '0', 'A', 'A', '0', '0', 'A', '0', '0', '0', 'A', '0', '0', '0', '0', '~', '~', '~', '~', '~', '~'],
    ['~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '0', 'A', '0', '0', '0', '~', '~', '~', '~', '~', '~', '~', '~'],
    ['~', '~', '~', '~', '~', '~', '~', '~', '0', '0', '0', 'A', '0', '0', '0', '0', '0', 'A', '0', 'A', '0', '0', '0', '~'],
    ['~', '~', '~', '0', 'A', '0', '0', '0', '0', '0', '0', '0', '0', 'A', '0', '0', '0', '~', '~', '~', '~', '~', '~', '~'],
    ['~', '~', '~', '~', '~', '~', '~', '~', '~', '0', '0', '0', 'A', '0', '0', 'A', '0', '~', '~', '~', '~', '~', '~', '~'],
    ['~', '~', '~', '~', '0', '0', '0', '0', 'A', '0', '0', '0', '0', 'A', '0', '~', '~', '~', '~', '~', '~', '~', '~', '~'],
    ['~', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'A', '0', '0', '0', '0', '0', '0', '~', '~', '~', '~', '~', '~'],
    ['~', '~', '~', '~', '~', '0', '0', '0', '0', '0', 'A', '0', '0', '0', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~'],
    ['~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~']
];
$impacts = [
    [20, 4],
    [2, 13],
    [13, 12],
    [3, 17],
    [2, 13],
    [5, 19],
    [6, 18],
    [5, 2],
    [20, 13],
    [9, 7],
    [5, 9],
    [15, 16],
    [16, 13],
    [16, 9],
    [16, 0],
    [3, 19],
    [19, 8],
    [1, 16],
    [18, 4],
    [21, 23],
    [7, 17],
    [22, 15],
    [21, 6],
    [14, 8],
    [12, 23],
    [7, 7],
    [22, 4],
    [3, 21],
    [2, 3],
    [8, 11],
    [0, 4],
    [7, 21],
    [11, 4],
    [7, 15],
    [6, 17],
    [5, 19],
    [4, 19],
    [4, 7],
    [23, 21],
    [15, 20],
    [2, 9],
    [21, 2],
    [1, 13],
    [7, 10],
    [21, 5],
    [13, 17],
    [2, 14],
    [11, 14],
    [22, 17],
    [18, 22],
    [2, 23],
    [3, 1],
    [18, 6],
    [17, 12],
    [18, 18],
    [20, 2],
    [3, 14],
    [11, 21],
    [6, 5],
    [6, 2],
    [12, 23],
    [18, 18],
    [21, 6],
    [10, 12],
    [5, 4],
    [16, 19],
    [8, 10],
    [12, 21],
    [15, 1],
    [20, 14],
    [3, 20],
    [6, 19],
    [20, 13],
    [15, 4],
    [10, 2],
    [5, 16],
    [20, 1],
    [12, 13],
    [11, 5],
    [12, 14],
    [8, 3],
    [6, 8],
    [19, 7],
    [16, 9],
    [13, 20],
    [3, 5],
    [1, 0],
    [20, 14],
    [12, 21],
    [12, 16],
    [15, 7],
    [9, 1],
    [1, 18],
    [20, 6],
    [8, 6],
    [22, 1],
    [10, 22],
    [19, 19],
    [7, 16],
    [8, 8]
];

//ESCRIBE AQUÍ TU PROGRAMA PRINCIPAL

    // Funcion para imprimir el array
function imprimir_array($array) {
    foreach ($array as $fila) {
        echo implode(" ", $fila) . "<br>";
    }
}

    //Fucnion para imprimir el array con el array de impactos
function sustituirImpactos($mapa, $impactos) {
    foreach ($impactos as $impacto) {
        $x = $impacto[0]; //Fiña
        $y = $impacto[1]; //Columna

        if ($mapa[$x][$y] === "A") { //cascoUrbano
            $mapa[$x][$y] = "C";
        }
    }
    return $mapa;
}


 //Fucnion clorilio

 function calcularClorilioHabitantes($mapaModificado) {
    $contadorNucleos = 0;

    foreach ($mapaModificado as $fila) {
        foreach ($fila as $celda) {
            if ($celda === "C") {
                $contadorNucleos++; 
            }
        }
        
    }
  
    $habitantes = $contadorNucleos * 5000;
    $litrosClorilio = $habitantes * 0.025;

    return [
        "Habitantes" => $habitantes,
        "Litros" => $litrosClorilio
    ];
}




// Funcion seguros

function sustituirImpactos2($mapa, $impactos) {
    foreach ($impactos as $impacto) {
        $x = $impacto[0]; //Fiña
        $y = $impacto[1]; //Columna

        if ($mapa[$x][$y] ==="0") { //tierra
             $mapa[$x][$y] = "X";

        } elseif ($mapa[$x][$y] ==="~") { //mar
            $mapa[$x][$y] = "S";
            
        } 
        
    }
return $mapa;
}

// Funcion Recuento de daños
function recuento($mapaFinal){
    $contadorNoUrbano = 0;
    $contadorUrbano = 0;


        foreach ($mapaFinal as $fila){
            foreach ($fila as $celda){

                if ($celda === "X"){
                    $contadorNoUrbano++;
                }elseif ($celda === "C"){
                    $contadorUrbano++;
                }
            }
        }
    $costosUrbanos = $contadorUrbano * 200000;
    $costosNoUrbanos = $contadorNoUrbano * 50000;
    $costosTotales = $costosNoUrbanos + $costosUrbanos;

    return [
        "Urbanos" => $costosUrbanos,
        "noUrbanos" => $costosNoUrbanos,
        "Totales" => $costosTotales
    ];
    }

    // Funcion km^2 del mar

    function recuentoMarTotal($mapa){
        $contadorMar = 0;
    
            foreach ($mapa as $fila){
                foreach ($fila as $celda){
    
                    if ($celda === "~"){
                        $contadorMar++;
                    }
                }
            }
    return $contadorMar;
    }
  
    // Funcion km^2 del mar impactado

    function recuentoMarImpactado($mapaFinal){
        $contadorMarAfectado = 0;
    
            foreach ($mapaFinal as $fila){
                foreach ($fila as $celda){
    
                    if ($celda === "S"){
                        $contadorMarAfectado++;
                    }
                }
            }
    return $contadorMarAfectado;       
    }

        // Funcion para el calculo del pescado

    function VascosSinFronteras($marImpacto, $mar) {   

        $pescado = round(($marImpacto * 2000) / $mar);


        $pescadoVendido = round($pescado * 5);

        return [
            "Pescado" => $pescado,
            "PesacadoVendido" => $pescadoVendido
        ];        
    }
 








//ESCRIBE AQUÍ LA DEFINICIÓN DE LAS FUNCIONES

    // RPIEMRA FUNCION
    echo "<h1>MAPA ORIGINAL</h1> <br>";
    imprimir_array($pomodoroHaters);
    echo "<br>";
echo "----------------------------------------------------------------------------------------------------------------------------------------------------------------";

    // SEGUNDA FUNCION
    $mapaModificado = sustituirImpactos($pomodoroHaters, $impacts);
    echo "<h1>MAPA CON IMPACTOS URBANOS</h1><br>";
    imprimir_array($mapaModificado);
    echo "<br>";
echo "----------------------------------------------------------------------------------------------------------------------------------------------------------------";


    //TERCERA FUNCION

    $todo = calcularClorilioHabitantes($mapaModificado); 

    echo "<h1>Hay un total de: {$todo["Habitantes"]} habitantes.</h1><br>";
    echo "<h2>Se necesitan un total de: {$todo['Litros']} litros de Clorilio.</h2>";
echo "----------------------------------------------------------------------------------------------------------------------------------------------------------------";


    //CUARTA FUNCION
    $mapaFinal = sustituirImpactos2($mapaModificado, $impacts);
    echo "<h1>MAPA CON IMPACTOS URBANOS, NO HABITADOS Y MAR</h1><br>";
    imprimir_array($mapaFinal);
    echo "<br>";
 echo "----------------------------------------------------------------------------------------------------------------------------------------------------------------";

    //QUINTA FUNCION

    $costos = recuento($mapaFinal);

    echo "<h1>DAÑOS TOTALES: {$costos['Totales']}€<br></h1>";
    echo "<h2>Daños Urbanos: {$costos["Urbanos"]}€<br></h2>"; //OPCIONAL
    echo "<h2>Daños No Urbanos: {$costos["noUrbanos"]}€<br></h2>"; //OPCIONAL
    echo "<br>";
    echo "----------------------------------------------------------------------------------------------------------------------------------------------------------------";
   
    //SEXTA Y SEPTIMA FUNCION
    $mar = recuentoMarTotal($pomodoroHaters);
    $marImpacto = recuentoMarImpactado($mapaFinal);
    echo "<h2>Hay {$marImpacto} Km^2 Afectados de un total de: {$mar} Km^2 de Mar<br></h2>";

    $ONG = VascosSinFronteras($marImpacto, $mar);
    //SEPTIMA FUNCION
    echo "<h2>Hay un total de: {$ONG['Pescado']} Toneladas de pesacado<br></h2>";
    echo "<h2>Podemos ganar: {$ONG['PesacadoVendido']}€ vendiendo el pescado</h2>";


// EXTRA FELIZ NAVIDAD.

function arbolDeNavidad() {
    echo "........ * ........ <br>";
    echo "....... ** ....... <br>";
    echo "...... ***...... <br>";
    echo "......****.....<br>";
    echo "....******....<br>";
    echo "...*******...<br>";
    echo "..*********..<br>";
    echo ".**********.<br>";
    echo "........**......<br>";
    echo "........**......<br>";
    echo "  <br>";
    echo "<h3>¡FELIZ NAVIDAD!<h3><br>";
}

arbolDeNavidad();
?>