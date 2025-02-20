<!DOCTYPE html>
<html>

<head>
    <title></title>
</head>

<body>
    <h1>Calcular Promedio de los numeros</h1>
    <?php
    // definimos la clase
    class Average
    {
        //propiedades
        public $numero1;
        public $numero2;
        public $numero3;

        //metodos
        public function setNumero1($numero)
        {

            $this->numero1 = $numero;
        }

        public function setNumero2($numero)
        {

            $this->numero2 = $numero;
        }

        public function setNumero3($numero)
        {

            $this->numero3 = $numero;
        }
        public function calcularPromedio()
        {

            $promedio = ($this->numero1 + $this->numero2 + $this->numero3) / 3;
            return $promedio;
        }
    }

    $average1 = new Average();
    $average1->setNumero1(15);
    $average1->setNumero2(25);
    $average1->setNumero3(18);
    //proemdio redondeado
    echo "El promedio de los numeros es: " . round($average1->calcularPromedio());
