<!DOCTYPE html>
<html>
<head>
    <title>Ejercicio: 1</title>
</head>
<body>
    <h1>Array Inversa</h1>

    <?php
    
    $valores = [1, 2, 3, 4, 5, 6, 7, 8, 9];

   
    $valoresInvertidos = array_reverse($valores);

   
    echo "Valores en orden inverso: <br>";
    foreach ($valoresInvertidos as $valor) {
        echo $valor . "<br>";
    }
    ?>
</body>
</html>
