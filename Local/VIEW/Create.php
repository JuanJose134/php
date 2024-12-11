<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Formulario de Registro</h5>
    <form action="../MODELO/save.php" method="post">
        <label for="">Nombre del producto</label><br>
        <input type="text" name="product"><br>
        <label for="">Descripcion del producto</label><br>
        <input type="text" name="descripction"><br>
        <label for="">Precio del producto</label><br>
        <input type="text" name="precio"><br>
        <button type="submit">Guardar</button>
    </form> 
</body>
</html>