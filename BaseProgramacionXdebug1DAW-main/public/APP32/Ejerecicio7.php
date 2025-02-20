<!DOCTYPE html>
<html>
<head>
    <title>Ejercicio 1</title>
</head>
<body>
    <h1>Ejercicio 4: Garra Phone</h1>

    <?php
            $total = 0;
            for ($i=1;$i<=20;$i++){
                $N = rand (-10,10);
                
            
                if ($N > 0)
                echo "$N es mayor que 0<br>";
                if ($N < 0)
                echo "$N es menor que 0<br>";
                if ($N == 0)
                echo "$N es igual que 0<br>";
        
            }
            

          
            
?>
</body>
</html>