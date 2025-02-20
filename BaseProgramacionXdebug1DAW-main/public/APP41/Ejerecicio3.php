<html>
    <head>
        <title>Ejercicio 1</title>
    </head>
    <body>
        <h1>Calculadora de la letra del DNI</h1>
        <form method="POST">
            <label for="numero">Número del DNI</label>
            <input type="number" name="cantidad"><br>
            <input type="submit" value="Calcular">
        </form>
    </body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!empty($_POST["cantidad"])) { // Verificamos que no esté vacío
        $cantidad = $_POST["cantidad"];

    if (strlen($cantidad) == 8)  {
        function calcularLetraDni($cantidad) {
            $letras = "TRWAGMYFPDXBNJZSQVHLCKE";
            $resto = $cantidad % 23;
            return $letras[$resto];
        }

        $letra = calcularLetraDni($cantidad);  
        echo "Tu letra del DNI es la: " . $letra;
    }else{
        echo "El numero deber tener 8 caracteres ";
        }
    }
}
?>

