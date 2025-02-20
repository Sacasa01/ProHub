<!DOCTYPE html>
<html>
<head>
    <title>Ejercicio 1</title>
</head>
<body>
    <h1>Ejercicio 1: El Crustáceo Crujiente</h1>

    <?php
        $personas = $_GET["personas"];

        if (($personas < 200) && ($personas>=1)){
            echo "El plato cuesta 95.00€ por persona";
        } elseif (($personas>=200) && ($personas<=300)){
            echo "El plato cuesta 85.00€ por persona";
        } elseif ($personas >= 300){
            echo "El plato cuesta 75.00€ por persona";
        } elseif ($personas == 0) {
            echo "0€";
        }
        

?>
</body>
</html>