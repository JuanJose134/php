<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Document</title>
</head>
<body>

    <h1>Registrar Usuario</h1>

    <a href="tabla.php">Lista de usuarios</a>
    <form action="../MODELO/insertar.php" method="post">

        <label for="">Nombres</label>
        <input type="text" name="names">

        <label for="">Apellidos</label>
        <input type="text" name="lastnames">

        <label for="document">Documento</label>
        <input type="text" name="document">

        <label for="phone">Telefono</label>
        <input type="text" name="phone" >

        <label for="email">Email</label>
        <input type="email" name="email" >

        <button type="submit">Registrar</button>

    </form>

</body>
</html>