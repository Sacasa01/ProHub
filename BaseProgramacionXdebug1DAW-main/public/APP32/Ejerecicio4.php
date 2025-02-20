<!DOCTYPE html>
<html>
<head>
    <title>Ejercicio 1</title>
</head>
<body>
    <h1>Ejercicio 4: Garra Phone</h1>

    <?php
        $minutos = $_GET["minutos"];
        $dia = $_GET["dia"];
        $hora = $_GET["hora"];
        $costeLlamada = 0;
        

        if (($minutos < 5) && ($minutos >=1)){
            $costeLlamada = $minutos * 1;
        }elseif ($minutos < 8) {
            $costeLlamada = (5 * 1)+(($minutos - 5) * 0.80);
        }elseif ($minutos < 10) {
            $costeLlamada = (5 * 1)+(3 * 0.80)+(($minutos - 8) * 0.70);
        }elseif ($minutos > 10) {
            $costeLlamada = (5 * 1)+(3 * 0.80)+(2 * 0.70) + (($minutos - 10)* 0.50);
        }

        $impuesto = 0;
        switch ($dia) {
            case 'domingo':
                $impuesto = ($costeLlamada*3)/100;
                break;
            case 'lunes':
            case 'martes':
            case 'miercoles':
            case 'jueves':
            case 'viernes':
            case 'sabado':
                if (($hora >= "00:00") && ($hora < "12:00")) {
                    $impuesto = ($costeLlamada * 15) / 100;
                } else { 
                    $impuesto = ($costeLlamada * 10) / 100;
                }
                break;
            default:
                
                break;
        }
            $costoTotal = $costeLlamada+$impuesto;
            $costoTotal = round ($costoTotal, 2);
        
        echo ("El coste de la llamada es de " . ($costoTotal) . "€");

?>
</body>
</html>