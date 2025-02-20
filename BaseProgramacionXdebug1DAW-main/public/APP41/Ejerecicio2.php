<?php
// Función para generar un array de números aleatorios
function generarArrayAleatorio($tamanio, $min, $max) {
    $array = [];
    for ($i = 0; $i < $tamanio; $i++) {
        $array[] = rand($min, $max);
    }
    return $array;
}

// Generamos dos arrays de tamaños diferentes
$array1 = generarArrayAleatorio(5, 1, 100); // Array de 5 elementos
$array2 = generarArrayAleatorio(5, 1, 100); // Array de 5 elementos (puedes cambiar el tamaño)

// Mostramos los arrays
echo "Array 1: ";
print_r($array1);
echo "<br>Array 2: ";
print_r($array2);
echo "<br>";

// Verificamos si los arrays tienen la misma longitud
if (count($array1) == count($array2)) {
    echo "El producto de los elementos en la misma posición es:<br>";
    for ($i = 0; $i < count($array1); $i++) {
        $producto = $array1[$i] * $array2[$i];
        echo "Posición $i: " . $array1[$i] . " * " . $array2[$i] . " = " . $producto . "<br>";
    }
} else {
    echo "Los arrays no tienen la misma longitud. No se puede realizar el producto.";
}
?>



// function randomNum() {
// $numeroAleatorio1 = random_int(0, 900000000000);
// $numeroAleatorio2 = random_int(0, 900000000000);

// echo "El primer número es: " . $numeroAleatorio1 . "<br>";
// echo "El segundo número es: " . $numeroAleatorio2 . "<br>";

// return [$numeroAleatorio1, $numeroAleatorio2];
// }
// if ($numeroAleatorio1=$numeroAleatorio2)
//     $result = $numeroAleatorio1*$numeroAleatorio2;
//     echo "EL prodcuto de los dos numeros es: " . $result;


