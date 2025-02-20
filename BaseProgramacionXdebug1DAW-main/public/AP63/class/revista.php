<?php
require_once 'publicacion.php';
require_once 'libro.php';
class Revista extends Libro{
    public $tematica;

    public function __construct($titulo, $autor, $anyo, $paginas, $tematica){
        parent::__construct($titulo, $autor, $anyo, $paginas);
        $this->tematica = $tematica;
    }
}
