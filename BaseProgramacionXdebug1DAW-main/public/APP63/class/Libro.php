<?php

class Libro
{
    private $titulo;
    private $autor;
    private $anyo;
    private $paginas;

    public function __construct($titulo, $autor, $anyo, $paginas)
    {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->anyo = $anyo;
        $this->paginas = $paginas;
    }

    public function getTitulo()
    {
        return $this->titulo;
    }

    public function getAutor()
    {
        return $this->autor;
    }

    public function getAnyo()
    {
        return $this->anyo;
    }

    public function getPaginas()
    {
        return $this->paginas;
    }

    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;
    }

    public function setAutor($autor)
    {
        $this->autor = $autor;
    }

    public function setAnyo($anyo)
    {
        $this->anyo = $anyo;
    }

    public function setPaginas($paginas)
    {
        $this->paginas = $paginas;
    }
    public function toArray(): array
    {
        return [
            "titulo" => $this->titulo,
            "autor" => $this->autor,
            "anyo" => $this->anyo,
            "paginas" => $this->paginas
        ];
    }
    public static function fromArray(array $data): Libro
    {
        return new Libro($data["titulo"], $data["autor"], $data["anyo"], $data["paginas"]);
    }
}
