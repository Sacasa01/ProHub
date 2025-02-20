<!DOCTYPE html>
<html>
    <head> 
    <title>Ejercicio 3</title>
    </head>
    <body>
      <h1>Compañia de paquetería</h1>  

 <form method="POST">
    <label for = "cantidad">Introduzca el tipo de zona: </label>
    <input type ="number" name = "cantidad"> <br>
    
    <label for = "cantidad2">Introduzca el peso del paquete: </label>
    <input type ="number" name = "cantidad2"> gramos <br>

    <input type="submit" value="Calcular precio">
 </form>

<?php
 if ($_SERVER['REQUEST_METHOD'] == "POST") {
   if (!empty($_POST["cantidad"]) && !empty($_POST["cantidad2"])) {
       $cantidad = $_POST["cantidad"];
       $cantidad2 = $_POST["cantidad2"];
       $precio = 0;
       $pais = "";

       switch ($cantidad) {
         case "1":
             $precio = $cantidad2 * 11;
             $pais = "América";
             break;
         case "2":
             $precio = $cantidad2 * 10;
             $pais = "África";
             break;
         case "3":
             $precio = $cantidad2 * 12;
             $pais = "Oceanía";
             break;
         case "4":
             $precio = $cantidad2 * 24;
             $pais = "Europa";
             break;
         case "5":
             $precio = $cantidad2 * 27;
             $pais = "Asia";
             break;
         default:
             echo "Zona no válida.";
             break;
            }

            if ($pais != "") {
                echo "El paquete sera enviado a $pais y tu pedido costará sobre unos $precio" . "€";
            }
        } else {
            echo "Por favor, complete todos los campos.";
        }
    }
    ?>
</body>
</html>
