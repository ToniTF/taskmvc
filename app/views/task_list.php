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
                <a href="edit/<?=$task->task_id?>">Editar</a>
                <a href="delete/<?=$task->task_id?>" onclick="return confirm('¿Estás seguro de que deseas eliminar esta tarea?');">Eliminar</a>
            
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>