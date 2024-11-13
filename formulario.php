<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>REGISTRARSE</h1>
    <form action="insertar.php" method="post">
        <label for="">Ingrese el primer Nombre</label><br>
        <input type="text" name="first_name" require><br>

        <label for="">Ingrese el segundo Nombre</label><br>
        <input type="text" name="second_name" require><br>

        <label for="">Ingrese el primer Apellido</label><br>
        <input type="text" name="first_surname" require><br>

        <label for="">Ingrese el segundo Apellido</label><br>
        <input type="text" name="secondlastname" require><br>

        <label for="">Ingrese el Documento</label><br>
        <input type="number" name="Documento" require><br>

        <label for="">Ingrese su password</label><br>
        <input type="PASSWORD" name="password" require><br>

        <label for="">Ingrese su correo Electronico </label><br>
        <input type="email" name="mail" require><br>

        <label for="">Ingrese su numero de Telefono</label><br>
        <input type="number" name="phone"><br>

        <label for="">Ingrese la edad que tiene</label><br>
        <input type="number" name="age" min="1" max="70"><br>

        <button type="submit">REGISTRAR</button>
    </form>
</body>
</html>
