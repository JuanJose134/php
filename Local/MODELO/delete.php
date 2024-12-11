<?php
include "../CONFIG/db.php";
$conexion->query("DELETE FROM products WHERE id = '$_GET[product_id]'");

if($conexion)
{
    header("location:../VIEW/index.php");
}
else
{
    echo "Hubo un error";
}