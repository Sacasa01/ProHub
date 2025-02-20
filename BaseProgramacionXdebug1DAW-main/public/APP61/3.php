<!DOCTYPE html>
<html>

<head>
    <title></title>
</head>

<body>
    <h1>Calcular preico con decuento</h1>
    <?php
    class Articulo
    {
        public $nombre;
        public $material;
        public $precio;

        public function setNombre($nombre)
        {
            $this->nombre = $nombre;
        }
        public function setMaterial($material)
        {
            $this->material = $material;
        }
        public function setPrecio($precio)
        {
            $this->precio = $precio;
        }
        public function descuento($descuento)
        {
            // se me reptia el decuento 2 veces y lo he tennido que poner asi, vaya movida jajja
            return $this->precio - ($this->precio) * ($descuento / 100);
        }
    }
    $articulo = new Articulo();
    $articulo->setNombre("Mesa");
    $articulo->setMaterial("Madera");
    $articulo->setPrecio(100);
    $articulo->descuento(10);
    //porcenataje del decuento aqui
    $precioFinal = $articulo->descuento(10);

    echo "Nombre del artículo: " . $articulo->nombre . "<br>";
    echo "Material: " . $articulo->material . "<br>";
    echo "El precio después del descuento es de: $" . $precioFinal;
