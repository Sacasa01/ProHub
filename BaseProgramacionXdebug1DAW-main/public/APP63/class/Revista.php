<?php
// require_once 'publicacion.php';
require_once 'Libro.php';

class Revista extends Libro
{
    public $tematica;

    public function __construct($titulo, $autor, $anyo, $paginas, $tematica)
    {
        parent::__construct($titulo, $autor, $anyo, $paginas);
        $this->tematica = $tematica;
    }

    public function getTematica()
    {
        return $this->tematica;
    }

    public function setTematica($tematica)
    {
        $this->tematica = $tematica;
    }

    public function toArray(): array
    {
        return [
            "tematica" => $this->tematica,
        ];
    }

    public static function fromArray(array $data): Revista
    {
        return new Revista($data["titulo"], $data["autor"], $data["anyo"], $data["paginas"], $data["tematica"]);
    }
}
