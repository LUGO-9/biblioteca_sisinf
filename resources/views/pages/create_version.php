<?php
require_once 'VersionController.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $controller = new VersionController();
    $controller->create($_POST['id_documento'], $_POST['tipo_version'], $_POST['edicion'], $_POST['editor'], $_POST['fecha_impresion']);
    header('Location: list_version.php');
}
?>

<form method="POST">
    <label>ID Documento:</label>
    <input type="number" name="id_documento" required><br>
    <label>Tipo Versión:</label>
    <input type="text" name="tipo_version" required><br>
    <label>Edición:</label>
    <input type="text" name="edicion" required><br>
    <label>Editor:</label>
    <input type="text" name="editor" required><br>
    <label>Fecha Impresión:</label>
    <input type="date" name="fecha_impresion" required><br>
    <button type="submit">Crear</button>
</form>
