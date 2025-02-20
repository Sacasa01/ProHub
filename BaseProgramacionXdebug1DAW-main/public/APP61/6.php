<!DOCTYPE html>
<html>

<head>
    <title></title>
</head>

<body>
    <h1>Ejercicio 6: </h1>
    <h2></h2>
    <?php
    class Matrix
    {
        public $filas;
        public $columnas;
        public $elementos;


        public function __construct($filas, $columnas)
        {
            $this->filas = $filas;
            $this->columnas = $columnas;

            $this->elementos = array();
            for ($i = 0; $i < $this->filas; $i++) {
                for ($j = 0; $j < $this->columnas; $j++) {
                    $this->elementos[$i][$j] = 0;
                }
            }
        }
        public function obtenerFilas()
        {
            return $this->filas;
        }
        public function obtenerColumnas()
        {
            return $this->columnas;
        }
        // public function fijarValor($fila, $columnas, $elementos){
        //     if ($filas >= 0 && $filal){

        //     }
        // }
        public function combinaciones($min = 1, $max = 100)
        {
            for ($i = 0; $i < $this->filas; $i++) {
                for ($j = 0; $j < $this->columnas; $j++) {
                    $this->elementos[$i][$j] = rand($min, $max);
                }
            }
        }
        public function mostrarTabla()
        {
            echo "<table border='1' style='border-collapse: collapse; text-align: center;'>";
            for ($i = 0; $i < $this->filas; $i++) {
                echo "<tr>";
                for ($j = 0; $j < $this->columnas; $j++) {
                    echo "<td style='padding: 10px;'>" . $this->elementos[$i][$j] . "</td>";
                }
                echo "</tr>";
            }
            echo "</table>";
        }
    }
    $matriz1 = new Matrix(4, 4);
    $matriz1->combinaciones(1,65);

    $matriz2 = new Matrix(2,2);
    $matriz2-> combinaciones(1,9);

    echo "<h2>Matriz 1: </h2>";
    $matriz1->mostrarTabla();
    echo "<h2>Matriz 2: </h2>";
    $matriz2->mostrarTabla();

