<!DOCTYPE html>
<html>
<head>
    <title>Ejercicio 2</title>
</head>
<body>
    <h1>Ejercicio 2:</h1>
    <h2>La Tuerca Feliz</h2>

<form method="POST">
    <label for="name">Materia prima:</label>
    <input name="name"><br>

    <label for="cantidad">Clave del producto:</label> 
    <input type="number" name="cantidad"><br>

    <input type="submit" value="introducir">

</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verificamos que no esté vacío.
    if (!empty($_POST["name"]) && !empty($_POST["cantidad"])) {
        $materiaPrima = $_POST["name"];
        $cantidad = $_POST["cantidad"]; 
    
        $manoDeObra = 0;
        $gastosDeFabricacion = 0; 
        switch ($cantidad) {
            case '1':
                $manoDeObra = $materiaPrima * 0.80;
                $gastosDeFabrcacion = $materiaPrima * 0.28;
            break;
            case '2':
                $manoDeObra = $materiaPrima * 0.85;
                $gastosDeFabrcacion = $materiaPrima * 0.30;
            break;
            case '3':
                $manoDeObra = $materiaPrima * 0.75;
                $gastosDeFabrcacion = $materiaPrima * 0.35;
            break;
            case '4':
                $manoDeObra = $materiaPrima * 0.75;
                $gastosDeFabrcacion = $materiaPrima * 0.28;
            break;
            case '5':
                $manoDeObra = $materiaPrima * 0.80;
                $gastosDeFabrcacion = $materiaPrima * 0.30;
            break;
            case '6':
                $manoDeObra = $materiaPrima * 0.85;
                $gastosDeFabrcacion = $materiaPrima * 0.35;
            break;

            default:
            echo "Clave de producto no válida.";
            exit;
        }


        $costoDeProduccion = $materiaPrima + $manoDeObra + $gastosDeFabrcacion;

        $precioDeVenta = $costoDeProduccion + ($costoDeProduccion * 0.45);

        echo "El precio de venta es de : $precioDeVenta € y el costo de producción es: $costoDeProduccion €<br>";
        echo "El benefeicio es de: " . ($precioDeVenta - $costoDeProduccion) . "€";
    } else {
        echo "Por favor, complete todos los campos.</p>";
    }
}

?>
</body>
</html>