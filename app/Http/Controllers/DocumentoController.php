<?php

require_once 'Database.php';
require_once 'Documento.php';

class DocumentoController {
    private $db;

    public function __construct() {
        $this->db = (new Database())->connect();
    }

    public function create($titulo, $autor, $tipo_documento, $fecha_publicacion, $disciplina) {
        $sql = "INSERT INTO Documento (titulo, autor, tipo_documento, fecha_publicacion, disciplina) 
                VALUES (:titulo, :autor, :tipo_documento, :fecha_publicacion, :disciplina)";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([
            'titulo' => $titulo,
            'autor' => $autor,
            'tipo_documento' => $tipo_documento,
            'fecha_publicacion' => $fecha_publicacion,
            'disciplina' => $disciplina,
        ]);
    }

    public function readAll() {
        $sql = "SELECT * FROM Documento";
        $stmt = $this->db->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function update($id, $titulo, $autor, $tipo_documento, $fecha_publicacion, $disciplina) {
        $sql = "UPDATE Documento 
                SET titulo = :titulo, autor = :autor, tipo_documento = :tipo_documento, 
                    fecha_publicacion = :fecha_publicacion, disciplina = :disciplina 
                WHERE id = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([
            'id' => $id,
            'titulo' => $titulo,
            'autor' => $autor,
            'tipo_documento' => $tipo_documento,
            'fecha_publicacion' => $fecha_publicacion,
            'disciplina' => $disciplina,
        ]);
    }

    public function delete($id) {
        $sql = "DELETE FROM Documento WHERE id = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->execute(['id' => $id]);
    }
}
