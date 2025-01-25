<?php

class versione {
    private $id;
    private $id_documento;
    private $tipo_version; // Ej.: primera edición, segunda edición, etc.
    private $edicion;
    private $editor;
    private $fecha_impresion;

    public function __construct($id, $id_documento, $tipo_version, $edicion, $editor, $fecha_impresion) {
        $this->id = $id;
        $this->id_documento = $id_documento;
        $this->tipo_version = $tipo_version;
        $this->edicion = $edicion;
        $this->editor = $editor;
        $this->fecha_impresion = $fecha_impresion;
    }

    // Métodos getters y setters
    public function getId() {
        return $this->id;
    }

    public function getIdDocumento() {
        return $this->id_documento;
    }

    public function getTipoVersion() {
        return $this->tipo_version;
    }

    public function getEdicion() {
        return $this->edicion;
    }

    public function getEditor() {
        return $this->editor;
    }

    public function getFechaImpresion() {
        return $this->fecha_impresion;
    }
}
