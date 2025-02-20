<!DOCTYPE html>
<html>
<head>
    <title>Ejercicio 1</title>
</head>
<body>
    <h1>Ejercicio 4: Garra Phone</h1>

    <?php
            $total=0;  
            $sueldoHora = 12;
            for ($i=1;$i<=6;$i++){
              $horas = rand (1,8);
              $total+=$horas;
              echo "El dia $i ha trabajado $horas horas <br>";

            }  
            
            echo "Has cobrado en total: " . ($total*$sueldoHora) . "€"
?>
</body>
</html>