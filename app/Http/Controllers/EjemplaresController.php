<?php

require_once 'Database.php';

class EjemplaresController {
    private $db;

    public function __construct() {
        $this->db = (new Database())->connect();
    }

    public function create($id_version, $estado, $ubicacion, $fecha_adquisicion) {
        $sql = "INSERT INTO Ejemplares (id_version, estado, ubicacion, fecha_adquisicion)
                VALUES (:id_version, :estado, :ubicacion, :fecha_adquisicion)";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([
            'id_version' => $id_version,
            'estado' => $estado,
            'ubicacion' => $ubicacion,
            'fecha_adquisicion' => $fecha_adquisicion,
        ]);
    }

    public function readAll() {
        $sql = "SELECT * FROM Ejemplares";
        $stmt = $this->db->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function update($id, $id_version, $estado, $ubicacion, $fecha_adquisicion) {
        $sql = "UPDATE Ejemplares 
                SET id_version = :id_version, estado = :estado, 
                    ubicacion = :ubicacion, fecha_adquisicion = :fecha_adquisicion
                WHERE id = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([
            'id' => $id,
            'id_version' => $id_version,
            'estado' => $estado,
            'ubicacion' => $ubicacion,
            'fecha_adquisicion' => $fecha_adquisicion,
        ]);
    }

    public function delete($id) {
        $sql = "DELETE FROM Ejemplares WHERE id = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->execute(['id' => $id]);
    }
}
