<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Tareas</title>
</head>
<body>
    <h3>Lista de Tareas</h3>
    <ul>
        <?php foreach ($data as $task): ?>
            <li>
                <strong><?php echo $task->title; ?></strong>: <?php echo $task->description; ?>
                <form action="/task/edit/<?php echo $task->id; ?>" method="post" style="display:inline;">
                    <button type="submit">Editar</button>
                </form>
                <form action="/task/delete/<?php echo $task->id; ?>" method="post" style="display:inline;" onsubmit="return confirm('¿Estás seguro de que deseas eliminar esta tarea?');">
                    <button type="submit">Eliminar</button>
                </form>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>