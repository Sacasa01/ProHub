<!DOCTYPE html>
<html>

<head>
    <title></title>
</head>

<body>
    <h1>Calcular promedio de los numeros</h1>
    <h2>(con funcion contructor)</h2>
    <?php
    class Average1
    {
        //propiedades
        public $numero1;
        public $numero2;
        public $numero3;

        function __construct($numero1, $numero2, $numero3)
        {
            $this->numero1 = $numero1;
            $this->numero2 = $numero2;
            $this->numero3 = $numero3;
        }
        public function calcularPromedio()
        {
            return ($this->numero1 + $this->numero2 + $this->numero3) / 3;
        }
        public function imprimirPromedio(){
            $resultado = $this->calcularPromedio();
            echo "El promedio de lso tres numero es: " . round($resultado);
        }
    }
$average1 = new Average1(12, 15, 20);
$average1->imprimirPromedio();
