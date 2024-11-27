<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        label,input{
            display:block
        }
    </style>
</head>
<body>
    <h3>Registrar Usuario</h3>
    <a href="index.php">Regresar</a>
    <form action="../crud.php" metho="post">
        <lab>Ingrese su Nombre</lab>
        <input type="text" name="nombre">
        <lab>Ingrese su Documento</lab>
        <input type="number" name="documento">
        <button type="submite">Registrarse</button>
    </form>
</body>
</html>