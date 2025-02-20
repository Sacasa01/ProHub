<!DOCTYPE html>
<html>
<head>
    <title>Ejercicio 1</title>
</head>
<body>
    <h1>Ejercicio 3: Gestion de alumnas</h1>

<?php
    $type = $_GET["students"];
    $result = 0;
    if ($type >= 100) {
        $result = $type * 65;
    } elseif ($type >= 50 && $type <= 90) {
        $result = $type * 70;
    } elseif ($type >= 30 && $type <= 49) {
        $result = $type * 70;
    } else {
        $result = 4000;
    }

echo "El resultado es de $result € para $type personas";
?>
</body>
</html>