<?php
require_once 'publicacion.php';
class Libro extends Publicacion{

    public $paginas;

public function __construct($titulo, $autor, $anyo, $paginas){
    parent::__construct($titulo, $autor, $anyo);
        $this->paginas = $paginas;
    }
}
