<?php
include "../CONFIG/db.php";
$product = $conexion->query("SELECT * FROM products WHERE id = '$_GET[product_id]'")->fetch_object();
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
    <h2>Actualizar</h2>
    <form action="../MODELO/update.php" method="post">
        <input type="hidden" name="id" value="<?=$product->id?>"><br>
        <label for="">Nombre del Producto</label><br>
        <input type="text" name ="product" value="<?=$product->product?>"><br>
        <label for="">Descripcion del producto</label><br>
        <input type="text" name ="description" value="<?=$product->description?>"><br>
        <label for="">Precio del Producto</label><br>
        <input type="text" name ="price" value="<?=$product->price?>"><br>
        <label for="">El estado del producto es :</label>
        <input type="text" name ="state" value="<?=$product->state?>"><br>
        <button type="submit">Update</button>
    </form>
</body>
</html>