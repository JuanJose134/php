/**Servidor = localhost/archivo
 * Usuario root
 * Pasword:
 * DB = ejemplo
 */
$conexion =new mysqli("localhost","root","","ejemplo") ;
var_dump($conexion);
-----------------
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="get" action="">
       <select name="Value" id="">
        <option value="1">Opcion 1</option>
        <option value="2">Opcion 2</option>
       </select>
       <button type="submite">Enviar</button>
    </form>
    <table border="1">
        <thead>
            <th>Documentos</th>
            <th>Nombres</th>
            <th>Telefono</th>
        </thead>
        <tbody>
            <tr>
                <td>Php</td>
                <td>Juan jose</td>
                <td>3021313212</td>
            </tr>
            <tr>
                <td>html</td>
                <td>daniel</td>
                <td>3384723499</td>
            </tr>
          <?php
          $Inicio = 0;
          while($Inicio < 10)
            {
                $Inicio++;
                ?>
                <tr>
                <td>html</td>
                <td>daniel</td>
                <td>3384723499</td>
            </tr>
            <?php
            }
           ?>
        </tbody>

    </table>
</body>
</html>
