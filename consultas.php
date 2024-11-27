<?php  
include "conexion.php";
$consultas = $conexion->query("SELECT * FROM users");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>REGISTRARSE</h3> 
    <table border="2">
            <thead>
            <th>Nombres</th>
            <th>Correos</th>
            <th>Eliminar</th>
            <th>Actualizar</th>
            </thead>
            <tbody>
                <?php while($user = $consultas->fetch_object()):?>
                <tr>
                    <td><?=$user->first_name ?></td>
                    <td><?=$user->mail ?></td>
                    <td><form action="abm.php" method="post">
                        <input type="hidden" value="<?=$user->Id?>" name="id">
                        <button type="submit">Eliminar</button>
                    </form></td>
                    <td><form action="update.php" method="post">
                    <input type="hidden" value="<?=$user->Id?>" name="id">
                    <button type="submite"></button>
                    </form></td>
                </tr>
                <?php endwhile;?>
            </tbody>
    </table>
</body>
</html>
