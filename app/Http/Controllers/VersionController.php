<?php

require_once 'Database.php';

class VersionController {
    private $db;

    public function __construct() {
        $this->db = (new Database())->connect();
    }

    public function create($id_documento, $tipo_version, $edicion, $editor, $fecha_impresion) {
        $sql = "INSERT INTO Version (id_documento, tipo_version, edicion, editor, fecha_impresion)
                VALUES (:id_documento, :tipo_version, :edicion, :editor, :fecha_impresion)";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([
            'id_documento' => $id_documento,
            'tipo_version' => $tipo_version,
            'edicion' => $edicion,
            'editor' => $editor,
            'fecha_impresion' => $fecha_impresion,
        ]);
    }

    public function readAll() {
        $sql = "SELECT * FROM Version";
        $stmt = $this->db->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function update($id, $id_documento, $tipo_version, $edicion, $editor, $fecha_impresion) {
        $sql = "UPDATE Version 
                SET id_documento = :id_documento, tipo_version = :tipo_version, 
                    edicion = :edicion, editor = :editor, fecha_impresion = :fecha_impresion
                WHERE id = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([
            'id' => $id,
            'id_documento' => $id_documento,
            'tipo_version' => $tipo_version,
            'edicion' => $edicion,
            'editor' => $editor,
            'fecha_impresion' => $fecha_impresion,
        ]);
    }

    public function delete($id) {
        $sql = "DELETE FROM Version WHERE id = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->execute(['id' => $id]);
    }
}
