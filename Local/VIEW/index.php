<?php include "../CONFIG/conexion.php"
$consultas = $conexin ->query("SELECT * FROM products");
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
    <a href="Create.php">REGISTRAR PRODUCTO</a><br>
    <table border="1">
        <thead>
            <th>Productos</th>
            <th>Precio</th>
            <th>Estado</th>
            <th>Ver</th>
            <th>Editar</th>
            <th>Elimianr</th>
            <tbody>
                <?php while($user = $consultas->fecth_object()):  ?>
                    <tr>
                        <td><?=$user-> ?></td> 
                        <td><?=$user-> ?></td> 
                        <td><?=$user-> ?></td> 
                        <td><?=$user-> ?></td> 
                        <td><?=$user-> ?></td> 
                        <td><?=$user-> ?></td> 
                        <td><?=$user-> ?></td> 
                    </tr>
            </tbody>
        </thead>
    </table>
</body>
</html>