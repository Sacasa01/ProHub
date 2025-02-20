<!DOCTYPE html>
<html>
<head>
    <title>Ejercicio 1</title>
</head>
<body>
    <h1>Ejercicio 4: Garra Phone</h1>

    <?php
            $n = isset($_GET['n']) ? (int)$_GET['n'] : 10; // Si no se define, por defecto se calculan 10 términos

            // Inicializar los primeros dos términos de la serie
            $fibonacci = [0, 1];
            
            // Generar la secuencia de Fibonacci
            for ($i = 2; $i < $n; $i++) {
                // El siguiente número es la suma de los dos anteriores
                $fibonacci[] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
            }
            
            // Mostrar los primeros N números de la serie de Fibonacci
            echo "Los primeros $n números de la secuencia de Fibonacci son:<br>";
            echo implode(", ", $fibonacci);  
?>
</body>
</html>