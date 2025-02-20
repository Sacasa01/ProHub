<!DOCTYPE html>
<html>
<head>
    <title>Ejercicio: 1</title>
</head>
<body>
    <h1>Array Inversa</h1>

    <?php
    
    $valores = [1, 2, 3, 4, 5, 6, 7, 8, 9,];

   $bidimensional = array(
    array(),
    array()
   );

    foreach ($valores as $valor) {
        if ($valor % 2 == 0) {
            $bidimensional[0][] = $valor;

        } else {
            $bidimensional[1][] = $valor;
        }
    }
 echo "Los valores pares son el: <br>";
 foreach($bidimensional[0] as $par){
    echo $par  . "<br>";
 }
echo "Los valores impares son el:<br>";
 foreach($bidimensional[1] as $impar){
    echo $impar  . "<br>";
 }


    ?>
</body>
</html>
