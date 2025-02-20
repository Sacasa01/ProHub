<!DOCTYPE html>
<html>
<head>
    <title>Ejercicio 5</title>
</head>
<body>
    <h1>Ejercicio 5</h1>

    <?php
        //Datos de  la figura
        $radio = 5;
        $h = 10;
        $pi = 3.1416;
        
            //Operaciones
            $areaSemicircunferencia = ($pi*($radio**2))/2;
            $baseTriangulo = $radio**2;
            $alturaTriangulo = sqrt(($h**2)-$baseTriangulo);
            $areaTriangulo = ($baseTriangulo*$alturaTriangulo)/2;
            $areaTotal = $areaTriangulo + $areaSemicircunferencia;
        
            echo "La area de la  figura es ($areaTotal)"

?>
</body>
</html>