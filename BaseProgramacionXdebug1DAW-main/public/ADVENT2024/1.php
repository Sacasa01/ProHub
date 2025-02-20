<html>
<head>
    <title>DIA 1</title>
</head>
<body>
    <h1>Diferencias entre los números de las dos listas:</h1>
</body>
</html>
<?php
function generarNumerosAleatorios($cantidad, $min, $max) {
    $numeros = []; // array que almacena los números aleatorios del bucle de abajo

    for ($i = 0; $i < $cantidad; $i++) {
        $numeros[] = rand($min, $max);
    }

    return $numeros;
}

// Config...
$cantidad = 6; 
$min = 0;     
$max = 9;    

// arrays
$lista1 = generarNumerosAleatorios($cantidad, $min, $max);
$lista2 = generarNumerosAleatorios($cantidad, $min, $max);

sort($lista1);
sort($lista2);

// final apart
$distancia =[];
for ($i = 0; $i < count($lista1); $i++) {
    $diferencia = abs($lista1[$i] - $lista2[$i]);
    
    $distancia[] = $diferencia;
    echo "<h2>Numero $i</h2><br>";
    echo "<br>El número de la lista1 es: " . $lista1[$i] . "<br>";
    echo "El número de la lista2 es: " . $lista2[$i] . "<br>";
    echo "Y la diferencia entre ellos es: $diferencia<br>";
    
    
}
// print_r($distancia);
$suma = array_sum($distancia);
echo "<h2>Distancia Total:</h2><br>";
echo "Por ultima la distancia total es de: $suma";


// Mostrar los arrays completos
echo "<h2>ARRAYS:</h2><br>";
echo "<br>Array 1:<br>";
echo "<pre>";     
print_r($lista1);
echo "</pre>";

echo "<br>Array 2:<br>";
echo "<pre>";
print_r($lista2);
echo "</pre>";
?>