<!DOCTYPE html>
<html>
<head>
    <title>Ejercicio 1</title>
</head>
<body>
    <h1>Ejercicio 4: Garra Phone</h1>

    <?php
            $tipo = $_GET["tipo"];
            $km = $_GET["km"];
            $personas = $_GET["personas"];

            if ($personas >= 20 ){
             switch ($tipo) { 
                case 'A':
                echo "el precio del billete por persona es de: " . ((2.0 * $km)+$personas) . "€";
                    break;
                case 'B':
                    echo "el precio del billete por personas es de: " . ((2.5 * $km)+$personas) . "€";
                    break;
                case 'C':
                    echo "el precio del billete por personas es de: " . ((3.0 * $km)+$personas) . "€";
                    break;
    
                }
}               if ($personas <= 20 ){
                switch ($tipo) {
                    case 'A':
                        echo "el precio del billete por personas es de: " . ((2.0 * $km)+$personas) . "€";
                    break;
                    case 'B':
                        echo "el precio del billete por personas es de: " . ((2.5 * $km)+$personas) . "€";
                    break;
                    case 'C':
                        echo "el precio del billete por personas es de: " . ((3.0 * $km)+$personas) . "€";
                    break;
    


                    }
}

?>
</body>
</html>