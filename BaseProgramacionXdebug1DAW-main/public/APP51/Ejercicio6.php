<html>
    <head>
        <title>Cálculo de Salarios de Empleados</title>
    </head>
    <body>
        <h1>Salarios de Empleados</h1>

        <?php
        // Función para calcular el salario
        function calculaSalario($horas, $tarifa = 10) {
            $salario = 0;

            // Si el trabajador ha trabajado más de 40 horas, se calculan las horas extras
            if ($horas > 40) {
                // Se calcula el salario de las primeras 40 horas
                $salario = 40 * $tarifa;
                // Se calculan las horas extras (con un incremento del 25%)
                $horasExtras = $horas - 40;
                $tarifaExtra = $tarifa * 1.25;
                $salario += $horasExtras * $tarifaExtra;
            } else {
                // Si el trabajador no ha hecho horas extras, se paga normalmente
                $salario = $horas * $tarifa;
            }

            return $salario;
        }

        // Array de empleados con horas trabajadas y tarifa por hora
        $empleados = [
            'Juan' => [
                'horas' => 40,
                'tarifa' => 15
            ],
            'Perico' => [
                'horas' => 20,
                'tarifa' => 25
            ],
            'Andrés' => [
                'horas' => 45
            ]
        ];

        // Calculamos el salario de cada empleado y lo mostramos
        foreach ($empleados as $nombre => $datos) {
            $horas = $datos['horas'];
            $tarifa = isset($datos['tarifa']) ? $datos['tarifa'] : 10;  // Usamos tarifa por defecto si no está definida
            $salario = calculaSalario($horas, $tarifa);
            echo "<p><strong>$nombre</strong> ha trabajado $horas horas con una tarifa de $tarifa €/hora. El salario total es: " . number_format($salario, 2, ',', '.') . " €</p>";
        }
        ?>

    </body>
</html>
