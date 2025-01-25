<?php

class ejemplare {
    private $id;
    private $id_version;
    private $estado; // Ej.: disponible, prestado, dañado
    private $ubicacion; // Ej.: estantería 1, sala de lectura, etc.
    private $fecha_adquisicion;

    public function __construct($id, $id_version, $estado, $ubicacion, $fecha_adquisicion) {
        $this->id = $id;
        $this->id_version = $id_version;
        $this->estado = $estado;
        $this->ubicacion = $ubicacion;
        $this->fecha_adquisicion = $fecha_adquisicion;
    }

    // Métodos getters y setters
    public function getId() {
        return $this->id;
    }

    public function getIdVersion() {
        return $this->id_version;
    }

    public function getEstado() {
        return $this->estado;
    }

    public function getUbicacion() {
        return $this->ubicacion;
    }

    public function getFechaAdquisicion() {
        return $this->fecha_adquisicion;
    }
}
