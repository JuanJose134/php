<?php
include "../CONFIG/db.php";
$conexion->query("UPDATE products SET
product = '$_POST[product]',
description ='$_POST[description]',
price = '$_POST[price]',
state = '$_POST[state]'

WHERE id = '$_POST[id]'
");
if($conexion)
{
    header("location:../VIEW/index.php");
}
else
{
    echo 'Hubo un error';
}