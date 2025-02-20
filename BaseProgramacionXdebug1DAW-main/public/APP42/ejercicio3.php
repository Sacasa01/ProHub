<!DOCTYPE html>
<html>
<head>
    <title>Ejercicio: 1</title>
</head>
<body>
    <h1>Array Inversa</h1>

    <?php
    
    $valores = [1, 2, 3, 4, 5, 6, 7, 8, 9,];

    $pares = array();
    $impares = array();

    foreach ($valores as $valor) {
        if ($valor % 2 == 0) {
            $pares[] = $valor;

        } else {
            $impares[] = $valor;
        }
    }
 echo "Los valores pares son el: <br>";
 foreach($pares as $par){
    echo $par  . "<br>";
 }
echo "Los valores impares son el:<br>";
 foreach($impares as $impar){
    echo $impar  . "<br>";
 }




    ?>
</body>
</html>
