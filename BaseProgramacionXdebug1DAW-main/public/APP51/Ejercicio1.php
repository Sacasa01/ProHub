<!DOCTYPE html>
<html>
<head>
    <title>PRograma1</title>
</head>
<body>
    <h1>Hermanos</h1>
    <form method="POST">
            <label for="numero">Edad del primer hermano:</label>
            <input type="number" name="edad1"><br>
            
            <label for="numero">Edad del segundo hermano:</label>
            <input type="number" name="edad2"><br>

            <input type="submit" value="Introducir">
        </form>

<?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // verificamos que ambos campos de edad no estén vacíos
        if (!empty($_POST["edad1"]) && !empty($_POST["edad2"])) {
            $edad1 = $_POST["edad1"];
            $edad2 = $_POST["edad2"];

            // función calcular la diferencia de edad
            function diferenciaEdad($edad1, $edad2) {
                return abs($edad1 - $edad2); // Retorna la diferencia en valor absoluto
            }

            // Calculamos la diferencia
            $diferencia = diferenciaEdad($edad1, $edad2);

            // Mostramos el resultado
            echo "La diferencia de edad entre los dos hermanos es de " . $diferencia . " años.";
        } else {
            echo "Por favor, introduce las edades de ambos hermanos.";
        }
    }
?>

</body>
</html>
