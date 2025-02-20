<!DOCTYPE html>
<html>
<head>
    <title>Buscar Pares con Diferencia Específica</title>
</head>
<body>
    <h1>Buscar Pares de Números con Diferencia Específica</h1>

    <form method="POST">
        <label for="diferencia">Introduce la diferencia:</label>
        <input type="number" id="diferencia" name="diferencia" required>
        <input type="submit" value="Buscar">
    </form>

    <?php
   
    $numeros = [1, 15, 39, 75, 92];

  
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      
        $diferencia = isset($_POST['diferencia']) ? (int)$_POST['diferencia'] : 0;

      
        if ($diferencia <= 0) {
            echo "Por favor, ingresa una diferencia válida mayor que 0.";
            exit;
        }

      
        $pares = [];
        for ($i = 0; $i < count($numeros); $i++) {
            for ($j = $i + 1; $j < count($numeros); $j++) {
              
                if (abs($numeros[$j] - $numeros[$i]) == $diferencia) {
                    
                    $pares[] = "({$numeros[$i]}, {$numeros[$j]})";
                }
            }
        }

        
        if (count($pares) > 0) {
            echo "Pares de números con una diferencia de $diferencia: <br>";
            echo implode("<br>", $pares);
        } else {
            echo "No se encontraron pares con la diferencia de $diferencia.";
        }
    }
    ?>

</body>
</html>
