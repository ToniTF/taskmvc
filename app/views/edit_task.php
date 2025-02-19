<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Tarea</title>
</head>
<body>
    <h3>Editar Tarea</h3>
    <form action="/task/edit/<?php echo $data['task']->id; ?>" method="post">
        <input type="text" name="title" value="<?php echo $data['task']->title; ?>" placeholder="Nombre de la tarea" required>
        <textarea name="description" placeholder="Descripción de la tarea" required><?php echo $data['task']->description; ?></textarea>
        <input type="submit" value="Guardar">
    </form>
</body>
</html>