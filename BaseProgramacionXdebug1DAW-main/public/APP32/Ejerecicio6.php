<!DOCTYPE html>
<html>
<head>
    <title>Ejercicio 1</title>
</head>
<body>
    <h1>Ejercicio 4: Garra Phone</h1>

    <?php
            $total = 0;
            for ($i=1;$i<=12;$i++){
                $ahorroMes= rand (1,900);
                $total+=$ahorroMes;
                echo "En el mes $i has ahorrado $ahorroMes<br>";
            }
            

            echo "Has ahorrado en todo el año: " . ($total)
            
?>
</body>
</html>