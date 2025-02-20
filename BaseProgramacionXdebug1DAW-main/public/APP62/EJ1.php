<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
</head>

<body>

</body>

</html>
<?php
class Animal
{
    public $nombre;
    public $edad;
    public function __construct($nombre, $edad)
    {
        $this->nombre = $nombre;
        $this->edad = $edad;
    }
    public function hacerSonido()
    {
    }
}

class Perro extends Animal
{
    public function hacerSonido()
    {
        echo "Wooof, Wooof";
    }
}

class Gato extends Animal
{
    public function hacerSonido()
    {
        echo "Grrrr, Grrrr, Miau";
    }
}
class Pajarito extends Animal
{
    public function hacerSonido()
    {
        echo "Pio, Pio";
    }
}

$perro = new Perro("Chispas", 5);
$gato = new Gato("Aguacate", 3);
$pajarito = new Pajarito("Blue", 1);

$perro->hacerSonido();
echo "<br>";
$gato->hacerSonido();
echo "<br>";
$pajarito->hacerSonido();
