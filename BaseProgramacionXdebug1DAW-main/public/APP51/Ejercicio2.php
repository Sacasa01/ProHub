<html>
    <head>
        <title>Conversión a Números Romanos</title>
    </head>
    <body>
        <h1>Conversión de número decimal a número romano</h1>
        <form method="POST">
            <label for="numero">Número entre 1 y 10</label>
            <input type="number" name="numero" min="1" max="10" required><br>

            <input type="submit" value="introducir">
        </form>
<?php

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
         $numero = $_POST['numero'];

        // Función/array
        function numRomano($numero) {
            $romanos = [
                1 => 'I',
                2 => 'II',
                3 => 'III',
                4 => 'IV',
                5 => 'V',
                6 => 'VI',
                7 => 'VII',
                8 => 'VIII',
                9 => 'IX',
                10 => 'X'
            ];

            if ($numero >= 1 && $numero <= 10) {
                return $romanos[$numero];
            } else {
                return "Por favor ingrese un número entre 1 y 10.";
            }
        }

            if (is_numeric($numero) && $numero >= 1 && $numero <= 10) {
                $numeroRomano = numRomano($numero);
                echo "<p>El número $numero en formato romano es: $numeroRomano</p>";
            } else {
                echo "<p>Introduzca un número entre 1 y el 10.</p>";
            }
        }
?>
</body>
</html>




