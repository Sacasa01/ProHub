<!DOCTYPE html>
<html>

<head>
    <title></title>
</head>

<body>
    <h1>Calcular de Permitero y Area de un Triángulo</h1>
    <?php
    // definimos la clase
    class Triangle
    {
        // propiedades
        public $lado1;
        public $lado2;
        public $lado3;

        // metodos

        public function calcularPerimetro($lado1, $lado2, $lado3)
        {
            $this->lado1 = $lado1;
            $this->lado2 = $lado2;
            $this->lado3 = $lado3;

            $perimetro = ($lado1 + $lado2 + $lado3);

            return $perimetro;
        }
        public function calcularArea($lado1, $lado2, $lado3, $perimetro)
        {
            $this->lado1 = $lado1;
            $this->lado2 = $lado2;
            $this->lado3 = $lado3;
            //semipermietro
            $s = $perimetro / 2;
            //formula Heron
            $area = sqrt($s * ($s - $lado1) * ($s - $lado2) * ($s - $lado3));

            return $area;
        }
    }

    $triangulo1 = new Triangle();
    $triangulo1->lado1 = 4;
    $triangulo1->lado2 = 5;
    $triangulo1->lado3 = 7.5;


    $perimetro = $triangulo1->calcularPerimetro($triangulo1->lado1, $triangulo1->lado2, $triangulo1->lado3);
    $area = $triangulo1->calcularArea($triangulo1->lado1, $triangulo1->lado2, $triangulo1->lado3, $perimetro);


    echo "Estos son los lados del triángulo: " . $triangulo1->lado1 . "cm, " . $triangulo1->lado2 . "cm y " . $triangulo1->lado3 . "cm<br>";
    echo "<br>";

    echo "El permitero del triangulo es: " . $perimetro . "cm<br>";
    echo "El area del triangulo es: " . round($area) . "cm2<br>";
