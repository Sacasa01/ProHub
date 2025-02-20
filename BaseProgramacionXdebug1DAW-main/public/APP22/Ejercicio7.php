<!DOCTYPE html>
<html>
<head>
    <title>Ejercicio 7</title>
</head>
<body>
    <h1>Ejercicio 7</h1>

    <?php
        //Datos de  la figura
        $x1 = 1;
        $y1 = 1;
        $x2 = 4;
        $y2 = 2;
        
            //Operaciones
            $cateto1 = $x2-$x1;
            $cateto2 = $y2-$y1;
            $h = sqrt(($cateto1**2)+($cateto2**2));

            echo "La area de la  figura es ($h)"

?>
</body>
</html>