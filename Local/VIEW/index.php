<?php 
include "../CONFIG/db.php";
$listado_productos = $conexion->query("SELECT * FROM products");
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
    <form action="get">
        
    </form>
    <a href="Create.php">REGISTRAR PRODUCTO</a><br><br>
    <table border="1">
        <thead>
            <th>Productos</th>
            <th>Precio</th>
            <th>Estado</th>
            <th>Ver</th>
            <th>Editar</th>
            <th>Elimianr</th>
            <tbody>
                <?php foreach($listado_productos as $product):?>
                    <tr>
                        <td><?=$product['product'] ?></td> 
                        <td><?=$product['price'] ?></td> 
                        <td><?=$product['state'] ?></td> 
                        <td><a href="show.php?product_id=<?=$product['id']?>">VER</a></td> 
                        <td><a href="createUpdate.php?product_id=<?=$product['id']?>">Editar</a></td> </td> 
                        <td><a href="../MODELO/delete.php?product_id=<?=$product['id']?>">VER</a></td> 
                    </tr>
                    <?php endforeach;?>
            </tbody>
        </thead>
    </table>
</body>
</html>