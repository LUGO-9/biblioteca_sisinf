<?php
require_once 'VersionController.php';
$controller = new VersionController();
$versiones = $controller->readAll();
?>

<table border="1">
    <tr>
        <th>ID</th>
        <th>ID Documento</th>
        <th>Tipo Versión</th>
        <th>Edición</th>
        <th>Editor</th>
        <th>Fecha Impresión</th>
        <th>Acciones</th>
    </tr>
    <?php foreach ($versiones as $version): ?>
    <tr>
        <td><?= $version['id'] ?></td>
        <td><?= $version['id_documento'] ?></td>
        <td><?= $version['tipo_version'] ?></td>
        <td><?= $version['edicion'] ?></td>
        <td><?= $version['editor'] ?></td>
        <td><?= $version['fecha_impresion'] ?></td>
        <td>
            <a href="edit_version.php?id=<?= $version['id'] ?>">Editar</a>
            <a href="delete_version.php?id=<?= $version['id'] ?>">Eliminar</a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>
