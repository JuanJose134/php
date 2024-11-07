<?php
/**Servidor = localhost
 * Usuario root
 * Pasword:
 * Nombre de la base de datos= ejemplo
 */
$conexion =new mysqli("localhost","root","","ejemplo") ;
//var_dump($conexion);
$consulta1 = $conexion->query(" SELECT * FROM usuarios ");
$consulta2 = $conexion->query(" SELECT * FROM usuarios WHERE Documento = 3029819302 ");
//->fetch_object() especifica que el valor consultado si o si debe existir en la base de datos y se usa cuando registra y muestra esa informacion
//->num_rows Se usa para consultar y registrar una informacion pero no mostrarla en pantalla y muestra una alerta y retorna ala pagina anterior
if($consulta2->num_rows > 0)
{
    echo'Existe';
}
else
{
    echo'No existe';
}
$insert = $conexion->query("INSERT INTO usuarios VALUES(null,3029819302,'Alexander',3057019283)");
//var_dump($insert);
$registro =$consulta1->fetch_object();
//var_dump($registro);
echo $registro->Documento."<br>";
echo $registro->Nombres."<br>";
echo $registro->Telefono."<br>";
$total = 0;
/*while($total > )
{

}*/
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
