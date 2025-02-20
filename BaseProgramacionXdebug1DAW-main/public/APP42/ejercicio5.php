<!DOCTYPE html>
<html>
<head>
    <title>Ejercicio: 1</title>
</head>
<body>
    <h1>Repeticiones en el Array</h1>

    <?php
    
 
    $valores = [1, 2, 3, 4, 5, 6, 7, 8, 9, 8, 2, 4];

    
    $contador = array();
    $repeticiones = array();

   
    foreach ($valores as $valor) {
       
        if (!in_array($valor, $contador)) {
            
            array_push($contador, $valor);

            
            $numcontador = 0;
            foreach ($valores as $v) {
                if ($v == $valor) {
                    $numcontador++;
                }
            }

          
            $repeticiones[$valor] = $numcontador;
        }
    }

  
    foreach ($repeticiones as $valor => $repeticion) {
        echo "El valor $valor se repite $repeticion veces.<br>";
    }
    ?>

</body>
</html>

