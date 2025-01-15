<?php
include "db/conexion.php";
$this->$conexion->query("SELECT * FROM users");
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
    <h1>Lista de usuarios</h1>

    <a href="form-registro.php">Registrar Usuario</a>
    
    <table border="1" >
        <thead>
            <th>Nombres</th>
            <th>Telefono</th>
            <th>email</th> 
        </thead>
        <tbody>
            <?php  foreach($consulta as $user):  ?>
                <tr>
                    <td> <?=$user->names;?> </td>
                    <td> <?=$user->phone;?> </td>
                    <td> <?=$user->email;?> </td>
                </tr>
            <?php  endforeach; ?>
        </tbody>
    </table>
</body>
</html>