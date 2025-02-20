<!DOCTYPE html>
<html>

<head>
    <title></title>
</head>

<body>
    <h1></h1>
</body>

</html>
<?php
// Definimos la clase
class Coche
{
    // Propiedades
    public $marca;
    public $color;
    public $modelo;

    // Métodos
    public function arrancar()
    {
        echo $this->marca . " Arrancado<br>";
    }
}

// Creación de un objeto
// $coche1 = new Coche();
$coche1->marca = "Audi";
echo $coche1->marca . "<br>";
$coche1->arrancar();
