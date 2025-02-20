<html>
    <head>
        <title>Ejercicio 1</title>
    </head>
    <body>
        <h1>Calculadora aritmetica</h1>
        <form method="POST">
            <label for="numero">Número de 5 digitos</label>
            <input type="number" name="cantidad"><br>
            <input type="submit" value="Introducir">
        </form>
    </body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!empty($_POST["cantidad"])) { // Verificamos que no esté vacío
        $cantidad = $_POST["cantidad"];
    
    if (strlen($cantidad) == 5)  {
        function calcularMedia($cantidad) {
            $digitos = str_split($cantidad);
            $suma = array_sum($digitos);
           $media = $suma / 5;
           return $media;
        }
    $media = calcularMedia($cantidad);
    echo "La media aritmetica es: " . $media;  
    
    }else{
        echo "El numero deber tener 5 caracteres ";
        }
    }
}
?>

