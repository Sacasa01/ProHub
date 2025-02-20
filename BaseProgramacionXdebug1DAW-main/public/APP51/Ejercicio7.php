<?php
// Función para buscar una palabra en el texto
function buscarPalabra($texto, $palabra) {
    // Usamos strpos para encontrar la primera ocurrencia de la palabra
    $coincidencias = substr_count($texto, $palabra);
    if ($coincidencias > 0) {
        echo "La palabra '$palabra' se encuentra $coincidencias vez/veces en el texto.\n";
    } else {
        echo "La palabra '$palabra' no se encuentra en el texto.\n";
    }
}

// Función para reemplazar la palabra por su versión en mayúsculas
function reemplazarPalabra($texto, $palabra) {
    // Reemplazamos todas las ocurrencias de la palabra por su versión en mayúsculas
    $textoModificado = str_ireplace($palabra, strtoupper($palabra), $texto);
    return $textoModificado;
}

// Solicitar al usuario el texto y la palabra a buscar
echo "Introduce el texto:\n";
$texto = trim(fgets(STDIN));

echo "Introduce la palabra a buscar:\n";
$palabra = trim(fgets(STDIN));

// Llamamos a la función para buscar la palabra
buscarPalabra($texto, $palabra);

// Llamamos a la función para reemplazar la palabra por su versión en mayúsculas
$textoModificado = reemplazarPalabra($texto, $palabra);

// Mostrar el texto modificado
echo "Texto modificado: \n$textoModificado\n";
?>
