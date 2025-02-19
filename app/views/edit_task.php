<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/taskmvc/assets/css/style.css">   
    <title>Editar Tarea</title>
</head>
<body>
    <h3>Editar Tarea</h3>
    <form action="" method="post">
        <input type="text" name="title" value="<?php echo $data->title; ?>" placeholder="Nombre de la tarea" required>
        <textarea name="description" placeholder="Descripción de la tarea" required><?php echo $data->description; ?></textarea>
        <input type="date" name="creation_date" value="<?php echo $data->creation_date; ?>" placeholder="Fecha" required>
        <input type="submit" value="Guardar">
    </form>
</body>
</html>