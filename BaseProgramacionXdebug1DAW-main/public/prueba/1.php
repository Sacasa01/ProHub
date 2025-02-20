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

    // Constructor
    public function __construct($marca, $color, $modelo)
    {
        $this->marca = $marca;
        $this->color = $color;
        $this->modelo = $modelo;
    }

    // Métodos
    public function arrancar()
    {
        echo $this->marca . " Arrancado<br>";
    }
}

// Creación de un objeto
$coche1 = new Coche("Audi", "Rojo", "A4");
echo $coche1->marca . "<br>";
$coche1->arrancar();
// prueba de docker
