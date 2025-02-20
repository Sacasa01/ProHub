<html>
    <head>
        <title>Generador de Combinación de Lotería Primitiva</title>
    </head>
    <body>
        <h1>Generador de Combinación de Lotería Primitiva</h1>
        </form>
        <?php
function dameNumero() {
    $numPremio = [];
    $num = 0;
    while (count($numPremio) < 6) {
        $num = rand(1, 49);
        if (!in_array($num, $numPremio)) {
            $numPremio[] = $num;
        }
    }
    return $numPremio;
}

$premio = dameNumero();

echo "El número premiado de la lotería primitiva es: " . implode(", ", $premio);
?>


    </body>
</html>
