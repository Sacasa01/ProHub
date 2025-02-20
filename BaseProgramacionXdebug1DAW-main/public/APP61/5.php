<!DOCTYPE html>
<html>

<head>
    <title>Ejercicio 5: Promedio de los Números</title>
    <style>
        .container {
            display: flex;
            gap: 20px; /* Espacio entre las columnas */
        }

        .empleado {
            border: 1px solid #ccc;
            padding: 10px;
            width: 200px; /* Ancho de cada columna */
        }

        h3 {
            margin-top: 0;
        }
    </style>
</head>

<body>
    <h1>Ejercicio 5: </h1>
    <h1>Calcular promedio de los numeros</h1>
    <h2>(con funcion contructor)</h2>
    <?php
    class Empleado
    {
        public $nombre;
        public $salario;
        public $horasDia;

        public function __construct($nombre, $salario, $horasDia)
        {
            $this->nombre = $nombre;
            $this->salario = $salario;
            $this->horasDia = $horasDia;
        }

        public function getInfo()
        {
            echo "El nombre es: " . $this->nombre . "<br>";
            echo "El salario es: " . $this->salario . "€" . "<br>";
            echo "Las horas diarias son: " . $this->horasDia . " horas" . "<br>";
        }

        public function addSal()
        {
            if ($this->salario < 500) {
                $this->salario += 10;
            }
        }

        public function addWork()
        {
            if ($this->horasDia > 6) {
                $this->salario += 5;
            }
        }
    }
    // Empleado 1
    echo "<h3>Empleado 1 (Antes de los cambios):</h3>";
    $empleado1 = new Empleado("Juanito", 2, 9);
    $empleado1->getInfo();

    $empleado1->addSal();
    $empleado1->addWork();

    // Empleado 2
    echo "<h3>Empleado 2 (Antes de los cambios):</h3>";
    $empleado2 = new Empleado("Pepita", 499, 7);
    $empleado2->getInfo();

    ?>

    <div class="container">
        <div class="empleado">
            <h3>Empleado 1:</h3>
            <?php $empleado1->getInfo(); ?>
        </div>
        <div class="empleado">
            <h3>Empleado 2:</h3>
            <?php $empleado2->getInfo(); ?>
        </div>
    </div>
</body>

</html>