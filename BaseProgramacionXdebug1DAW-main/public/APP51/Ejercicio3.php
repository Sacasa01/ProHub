<html>
    <head>
        <title>Generador de Combinación de Lotería Primitiva</title>
    </head>
    <body>
        <h1>Generador de Combinación de Lotería Primitiva</h1>

        <form method="POST">
            <input type="submit" value="Generar Combinación">
        </form>
        <?php

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $combinacion = generarCombinacion();
                echo "<p>La combinación generada es: " . implode(", ", $combinacion) . "</p>";
        }

        // funcion aleatoriedad
        function dameNumero() {
            return random_int(1, 49);
        }

        //funcion generar combinacion
        function generarCombinacion() {
            $numeros = [];
            while (count($numeros) < 6) {
                $numero = dameNumero();
                
                if (!in_array($numero, $numeros)) {
                    $numeros[] = $numero;
                }
            }
            sort($numeros); 
            return $numeros;
        }

?>

    </body>
</html>
