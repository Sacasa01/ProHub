<?php
// Clase Vehiculo
class Vehiculo
{
    private $marca;
    private $modelo;
    private $color;

    public function __construct($marca, $modelo, $color)
    {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->color = $color;
    }

    //GETTTTTTTERS
    public function getMarca()
    {
        return $this->marca;
    }

    public function getModelo()
    {
        return $this->modelo;
    }

    public function getColor()
    {
        return $this->color;
    }

    //SETTTTTTTTERS
    public function setMarca($marca)
    {
        $this->marca = $marca;
    }

    public function setModelo($modelo)
    {
        $this->modelo = $modelo;
    }

    public function setColor($color)
    {
        $this->color = $color;
    }

    public function describir()
    {
        return "Marca: " . $this->marca ."<br>" . "Modelo: " . $this->modelo . "<br>" . "Color: " . $this->color;
    }
}

class Coche extends Vehiculo
{

    private $tipoCombustible;


    public function __construct($marca, $modelo, $color, $tipoCombustible)
    {
        parent::__construct($marca, $modelo, $color);
        $this->tipoCombustible = $tipoCombustible;
    }

    public function getTipoCombustible()
    {
        return $this->tipoCombustible;
    }

    public function setTipoCombustible($tipoCombustible)
    {
        $this->tipoCombustible = $tipoCombustible;
    }

    public function describir()
    {
        return parent::describir() . "<br>" . "Tipo de Combustible: " . $this->tipoCombustible;
    }
}

$coche = new Coche("Nissan", "Skyline", "Gris-Azul", "Gasolina");
echo $coche->describir(); 
