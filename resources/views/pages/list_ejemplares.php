<?php
require_once 'EjemplaresController.php';
$controller = new EjemplaresController();
$ejemplares = $controller->readAll();
?>

<table border="1">
    <tr>
        <th>ID</th>
        <th>ID Versión</th>
        <th>Estado</th>
        <th>Ubicación</th>
        <th>Fecha Adquisición</th>
        <th>Acciones</th>
    </tr>
    <?php foreach ($ejemplares as $ejemplar): ?>
    <tr>
        <td><?= $ejemplar['id'] ?></td>
        <td><?= $ejemplar['id_version'] ?></td>
        <td><?= $ejemplar['estado'] ?></td>
        <td><?= $ejemplar['ubicacion'] ?></td>
        <td><?= $ejemplar['fecha_adquisicion'] ?></td>
        <td>
            <a href="edit_ejemplar.php?id=<?= $ejemplar['id'] ?>">Editar</a>
            <a href="delete_ejemplar.php?id=<?= $ejemplar['id'] ?>">Eliminar</a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>
