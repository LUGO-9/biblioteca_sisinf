<?php

class documento {
    private $id;
    private $titulo;
    private $autor;
    private $tipo_documento; // Ej.: libro, tesis,proyecto etc.
    private $fecha_publicacion;
    private $disciplina;

    public function __construct($id, $titulo, $autor, $tipo_documento, $fecha_publicacion, $disciplina) {
        $this->id = $id;
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->tipo_documento = $tipo_documento;
        $this->fecha_publicacion = $fecha_publicacion;
        $this->disciplina = $disciplina;
    }

    // Métodos getters y setters
    public function getId() {
        return $this->id;
    }

    public function getTitulo() {
        return $this->titulo;
    }

    public function getAutor() {
        return $this->autor;
    }

    public function getTipoDocumento() {
        return $this->tipo_documento;
    }

    public function getFechaPublicacion() {
        return $this->fecha_publicacion;
    }

    public function getDisciplina() {
        return $this->disciplina;
    }
}
