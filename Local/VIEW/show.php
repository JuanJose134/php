<?php
include "../CONFIG/db.php";
$datos = $conexion->query("SELECT * FROM products WHERE id = '$_GET[product_id]'")->fetch_object();
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
    <a href="index.php">VOLVER</a>

    <h1>La informacion del producto es :</h4>
    <label for="">NOMBRE PRODUCTO</label>
    <h2><?=$datos->product?></h2>
    <label for="">DESCRIPCION PRODUCTO</label>
    <h2<?=$datos->description?></h2>
    <label for="">PRECIO DEL PRODUCTO</label>
    <h2><?=$datos->price?></h2>
    <label for="">ESTADO DEL PRODUCTO</label>
    <h2><?=$datos->state?></h2>
</body>
</html>