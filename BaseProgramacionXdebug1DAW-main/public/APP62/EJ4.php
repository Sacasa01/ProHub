
<?php
// Clase Vehiculo
class Vehiculo
{
    public $marca;
    public $modelo;
    public $color;

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

    public $tipoCombustible;


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
class bicicleta extends Vehiculo{
    public $tipo;
    public $km;
    public function __construct($marca, $modelo, $color, $tipo, $km){
        parent::__construct($marca, $modelo, $color);
        $this->tipo = $tipo;
        $this->km = $km;
    }
    //GETTTTTTTERS
  public function getTipo(){
    return $this->tipo;
  }
    public function getKm(){
        return $this->km;
    }
    //SETTTTTTTTERS
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;
    }
    public function setKm($km)
    {
        $this->km = $km;
    }
    public function decribir(){
        return parent:: describir() . "<br>" . "Tipo: " . $this->tipo . "<br>" . "Km: " . $this->km;
    }
}

//COCHES
echo "<h2>COCHES</h2>";
$coche = new Coche("Nissan", "Skyline", "Gris-Azul", "Gasolina");
echo $coche->describir(); 

//BICICLETAS
echo "<h2>BICICLETAS</h2>";
$bicicleta = new bicicleta("Xiaomi", "MEkatron", "Negra-Gris", "Electrica", 184);
echo $bicicleta->decribir();