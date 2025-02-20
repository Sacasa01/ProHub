<!DOCTYPE html>
<html>
<head>
    <title>Ejercicio 1</title>
</head>
<body>
    <h1>Ejercicio 1:</h1>
    <h2>El Pepinilllo Grasiento</h2>

<form method="POST">
    <label for="name">Tipo de la hamburguesa:</label>
    <input name="name"><br>

    <label for="cantidad">Cantidad:</label> 
    <input type="number" name="cantidad"><br>

    <input type="submit" value="introducir">

</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verificamos que no esté vacío.
    if (!empty($_POST["name"]) && !empty($_POST["cantidad"])) {
        $nombre = $_POST["name"];
        $cantidad = $_POST["cantidad"]; 
        $precio = 0;

     
        if ($nombre == "sencilla") {
            $precio = 20;
        } elseif ($nombre == "doble") {
            $precio = 25;
        } elseif ($nombre == "triple") {
            $precio = 28;
        } else {
            echo "<p>Tipo de hamburguesa incorrecto.</p>";
            exit; 
        }

       
        $totalAntesTarjeta = $precio * $cantidad;


        $cargoTarjeta = $totalAntesTarjeta * 0.05;


        $totalFinal = $totalAntesTarjeta + $cargoTarjeta;


        echo "<p>El total a pagar por $cantidad hamburguesas $nombre es: " . round($totalFinal, 2) . "€</p>";
    } else {
        echo "<p>Por favor, complete todos los campos.</p>";
    }
}

?>
</body>
</html>