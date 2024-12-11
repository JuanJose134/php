<?php
include "../CONFIG/conexion.php";
$dato = $conexion->query("SELECT * FROM products WHERE id = $_POST[id]");
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
    <form action="">
        <input type="hidden" name="id" value="<?=$dato->id ?>">
        <input type="text">
        <input type="text">
        <input type="text">
        <input type="text">
    </form>
</body>
</html>