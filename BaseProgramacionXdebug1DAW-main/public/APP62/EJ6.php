//EJERCICIO 2 REALMENETE

<?php
class Universidad {
    public $nombre;
    public $direccion;

    public function __construct($nombre, $direccion) {
        $this->nombre = $nombre;
        $this->direccion = $direccion;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getDireccion() {
        return $this->direccion;
    }
}

class Estudiante extends Universidad {
    public $numMatricula;
    public $fechaIngreso;
    public $edad;

    public function __construct($nombre, $direccion, $numMatricula, $fechaIngreso, $edad) {
        parent::__construct($nombre, $direccion);
        $this->numMatricula = $numMatricula;
        $this->fechaIngreso = $fechaIngreso;
        $this->edad = $edad;
    }

    public function getNumMatricula() {
        return $this->numMatricula;
    }

    public function getFechaIngreso() {
        return $this->fechaIngreso;
    }

    public function getEdad() {
        return $this->edad;
    }
}

class EstudianteIntercambio extends Estudiante {
    public $paisOrigen;

    public function __construct($nombre, $direccion, $numMatricula, $fechaIngreso, $edad, $paisOrigen) {
        parent::__construct($nombre, $direccion, $numMatricula, $fechaIngreso, $edad);
        $this->paisOrigen = $paisOrigen;
    }

    public function getPaisOrigen() {
        return $this->paisOrigen;
    }
}

class Profesor extends Universidad {
    public $numSS;
    public $titulacion;
    public $especialidad;

    public function __construct($nombre, $direccion, $numSS, $titulacion, $especialidad) {
        parent::__construct($nombre, $direccion);
        $this->numSS = $numSS;
        $this->titulacion = $titulacion;
        $this->especialidad = $especialidad;
    }

    public function getNumSS() {
        return $this->numSS;
    }

    public function getTitulacion() {
        return $this->titulacion;
    }

    public function getEspecialidad() {
        return $this->especialidad;
    }

    public function setNumSS($numSS) {
        $this->numSS = $numSS;
    }

    public function setTitulacion($titulacion) {
        $this->titulacion = $titulacion;
    }

    public function setEspecialidad($especialidad) {
        $this->especialidad = $especialidad;
    }
}

class PersonalGestion extends Universidad {
    public $numSS;
    public $posicion;

    public function __construct($nombre, $direccion, $numSS, $posicion) {
        parent::__construct($nombre, $direccion);
        $this->numSS = $numSS;
        $this->posicion = $posicion;
    }

    //GETTERS
    public function getNumSS() {
        return $this->numSS;
    }

    public function getPosicion() {
        return $this->posicion;
    }

    //SETTERS
    public function setNumSS($numSS) {
        $this->numSS = $numSS;
    }

    public function setPosicion($posicion) {
        $this->posicion = $posicion;
    }
}
echo "<br>";
$estudiante = new Estudiante("Juan", "Calle Falsa 123", "12345", "2023-01-01", 20);
echo $estudiante->getNombre() . "\n"; // Juan

$estudianteIntercambio = new EstudianteIntercambio("Ana", "Avenida Siempre Viva 456", "67890", "2023-02-01", 22, "España");
echo $estudianteIntercambio->getPaisOrigen() . "\n"; // España

$profesor = new Profesor("Carlos", "Plaza Mayor 789", "98765", "Matemáticas", "Álgebra");
echo $profesor->getTitulacion() . "\n"; // Matemáticas

$personalGestion = new PersonalGestion("Laura", "Calle Real 321", "54321", "Administrador");
echo $personalGestion->getPosicion() . "\n"; // Administrador
