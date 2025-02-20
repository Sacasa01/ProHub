<!DOCTYPE html>
<html>
<head>
    <title>Ejercicio 4</title>
</head>
<body>
    <h1>Ejercicio 4</h1>

    <?php
        //Datos de  la figura
        $altura = 10;
        $base = 8;
        $cateto = 5;
        
            //Operaciones
            $areaRectangulo = $base*$cateto;
            $alturaTriangulo = $altura-$cateto;
            $areaTriangulo = ($base*$alturaTriangulo)/2;
            $areaTotal = $areaTriangulo+$areaRectangulo;
        
            echo "La area de la  figura es ($areaTotal)"

?>
</body>
</html>