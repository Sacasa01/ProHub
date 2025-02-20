<html>
    <head>
        <title>Ejercicio 4</title>
    </head>
    <body>
        <h1>Calculadora de la letra del DNI</h1>

        <?php
        // Función para calcular la letra del DNI
        function calcularLetraDNI($numeroDNI) {
            $letras = 'TRWAGMYFPDXBNJZSQVHLCKE';
            $letra = $letras[$numeroDNI % 23];
            return $letra;
        }

        // Comprobamos si el formulario fue enviado
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $numeroDNI = $_POST['numero'];
            if (is_numeric($numeroDNI) && $numeroDNI > 0) {
                $letra = calcularLetraDNI($numeroDNI);
                echo "<p>La letra correspondiente al DNI $numeroDNI es: $letra</p>";
            } else {
                echo "<p>Por favor, ingrese un número de DNI válido.</p>";
            }
        }
        ?>

        <form method="POST">
            <label for="numero">Número del DNI</label>
            <input type="number" name="numero" required><br>
            <input type="submit" value="Calcular">
        </form>

        <hr>

        <h1>Simulación de Lanzamiento de Dados</h1>

        <?php
        // Función para simular el lanzamiento de un dado
        function lanzarDado() {
            return random_int(1, 6); // Retorna un número aleatorio entre 1 y 6
        }

        // Variables para el juego
        $jugador1Gana = 0;
        $jugador2Gana = 0;
        $empates = 0;

        if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['jugar'])) {
            $tiradas = 5; // Número de tiradas

            // Simulación de las tiradas
            for ($i = 1; $i <= $tiradas; $i++) {
                $dadoJ1 = lanzarDado();
                $dadoJ2 = lanzarDado();

                if ($dadoJ1 > $dadoJ2) {
                    $jugador1Gana++;
                } elseif ($dadoJ1 < $dadoJ2) {
                    $jugador2Gana++;
                } else {
                    $empates++;
                }
            }

            // Resultados del juego
            echo "<p>Jugador 1 ganó $jugador1Gana veces</p>";
            echo "<p>Jugador 2 ganó $jugador2Gana veces</p>";
            echo "<p>Hubo $empates empates</p>";
        }
        ?>

        <form method="POST">
            <input type="submit" name="jugar" value="Jugar al Dado">
        </form>

    </body>
</html>
