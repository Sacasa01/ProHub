<?php

require_once("Libro.php");
require_once("Revista.php");

class Libreria
{
    private array $libros = [];
    private array $revistas = [];

    public function crearLibro($titulo, $autor, $anyo, $paginas)
    {
        $this->libros[] = new Libro($titulo, $autor, $anyo, $paginas);
        echo "Libro '$titulo' agregado correctamente.<br>";
    }

    public function crearRevista($titulo, $autor, $anyo, $paginas, $tematica)
    {
        $this->revistas[] = new Revista($titulo, $autor, $anyo, $paginas, $tematica);
        echo "Revista '$titulo' agregada correctamente.<br>";
    }

    public function lecturaLibros()
    {
        if (!$this->libros) {
            echo "No hay libros registrados.<br>";
            return;
        }

        echo "<strong>Listado de Libros:</strong><br>";
        foreach ($this->libros as $index => $libro) {
            echo ($index + 1) . ". Título: " . $libro->getTitulo() .
                ", Autor: " . $libro->getAutor() .
                ", Año: " . $libro->getAnyo() .
                ", Páginas: " . $libro->getPaginas() . "<br>";
        }
    }

    public function lecturaRevistas()
    {
        if (!$this->revistas) {
            echo "No hay revistas registradas.<br>";
            return;
        }

        echo "<strong>Listado de Revistas:</strong><br>";
        foreach ($this->revistas as $index => $revista) {
            echo ($index + 1) . ". Título: " . $revista->getTitulo() .
                ", Autor: " . $revista->getAutor() .
                ", Año: " . $revista->getAnyo() .
                ", Temática: " . $revista->getTematica() . "<br>";
        }
    }

    public function actualizarLibro($index, $titulo, $autor, $anyo, $paginas)
    {
        if (!isset($this->libros[$index])) {
            echo "Libro no encontrado.<br>";
            return;
        }

        $libro = $this->libros[$index];
        $libro->setTitulo($titulo);
        $libro->setAutor($autor);
        $libro->setAnyo($anyo);
        $libro->setPaginas($paginas);

        echo "Libro actualizado correctamente.<br>";
    }

    public function actualizarRevista($index, $titulo, $autor, $anyo, $tematica)
    {
        if (!isset($this->revistas[$index])) {
            echo "Revista no encontrada.<br>";
            return;
        }

        $revista = $this->revistas[$index];
        $revista->setTitulo($titulo);
        $revista->setAutor($autor);
        $revista->setAnyo($anyo);
        $revista->setTematica($tematica);

        echo "Revista actualizada correctamente.<br>";
    }

    public function eliminarLibro($index) {
        if (!isset($this->libros[$index])) {
            echo "Libro no encontrado.<br>";
            return;
        }

        $libroBorrado = $this->libros[$index]->getTitulo();
        unset($this->libros[$index]);
        $this->libros = array_values($this->libros);
        echo "Libro '$libroBorrado' eliminado correctamente.<br>";
    }

    public function eliminarRevista($index) {
        if (!isset($this->revistas[$index])) {
            echo "Revista no encontrada.<br>";
            return;
        }

        $revistaBorrada = $this->revistas[$index]->getTitulo();
        unset($this->revistas[$index]);
        $this->revistas = array_values($this->revistas);
        echo "Revista '$revistaBorrada' eliminada correctamente.<br>";
    }
}
