<!DOCTYPE html>
<html>
<head>
    <title>Ejercicio 1</title>
</head>
<body>
    <h1>Ejercicio 2: Vinivultor</h1>

    <?php
        $tipo = $_GET["tipo"]; 
        $tamano = $_GET["tamano"]; 
        $cantidad = $_GET["cantidad"]; 
        $precioKgInicial = 0.60;

        if (($tipo == "A") && ($tamano==1)){
            echo "el precio son " . (($precioKgInicial+0.20)*$cantidad) . "€"; 
        } elseif (($tipo == "A") && ($tamano==2)){
            echo "el precio son " . (($precioKgInicial+0.30)*$cantidad) . "€"; 
        } elseif (($tipo == "B") && ($tamano==1)){
            echo "el precio son " . (($precioKgInicial-0.30)*$cantidad) . "€"; 
        } elseif (($tipo == "B") && ($tamano==2)){
            echo "el precio son " . (($precioKgInicial-0.50)*$cantidad) . "€"; 
        
         }else {
            echo "faltan variables";
         }
        
?>
</body>
</html>