<!DOCTYPE html>
<html>
<head>
    <title>Ejercicio: 1</title>
</head>
<body>
    <h1>Array Inversa</h1>

    <?php
$repes = [1, 2, 3, 4, 3, 7, 3, 4, 5, 5];
$final = [];
$tam = count($repes) - 1;

for ($i = 0; $i < $tam; $i++) {
    $actual = $repes[$i];
    $repite = 0;

    for ($j = $i + 1; $j <= $tam; $j++) {
        $siguiente = $repes[$j];
        if ($actual == $siguiente) {
            $repite++;
        }
    }

    if ($repite > 0) {
        if (!in_array($actual, $final)) {
            $final[] = $actual;
        }
    }
}

var_dump($final);

    ?>
</body>
</html>
