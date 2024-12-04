<?php
include "../conexion.php";
$conexion->query("UPDATE users SET 
names = '$_POST[names]',
lastnames = '$_POST[lastnames]',
phone = '$_POST[phone]',
email = '$_POST[email]'

WHERE id = '$_POST[id]'
");
if($insert){
    header("location:../VIEW/tabla.php");
}