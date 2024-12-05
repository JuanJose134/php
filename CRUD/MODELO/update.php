<?php
include "../conexion.php";
$conexion->query("UPDATE users SET 
names = '$_POST[names]',
lastnames = '$_POST[lastnames]',
phone = '$_POST[phone]',
email = '$_POST[email]'

WHERE id = '$_POST[id]'
");
if($conexion){
    header("location:../VIEW/tabla.php");
}
else
{
    echo"hubo un error";
}