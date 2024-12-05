<?php
include "../conexion.php";
$user = $conexion->query("SELECT * FROM users WHERE id=$_REQUEST[user_id] ")->fetch_object();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Document</title>
</head>
<body>
    <h1>Editar Usuario</h1>
    <a href="tabla.php">Regresar</a>

    <form action="../MODELO/update.php" method="post">
        <label for="">Nombres</label>
        <input type="text" name="names" id="name" value="<?=$user->names?>">
        <input type="hidden" name="id" value="<?= $user->id?>">
        
        <label for="">Apellidos</label>
        <input type="text" name="lastnames" id="lastname" value="<?=$user->lastnames?>" >
        
        <label for="">Documento</label>
        <input type="text" name="document" id="document" value="<?=$user->document?>">

        <label for="">Telefono</label>
        <input type="text" name="phone" id="phone" value="<?=$user->phone?>">

        <label for="">Correo</label>
        <input type="email" name="email" id="imail" value="<?=$user->email?>">

        <button type="submit">Actualizar</button>
    </form>
</body>
</html>