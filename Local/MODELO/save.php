<?php
include "../CONFIG/db.php";
$product = $_POST['product'];
$description = $_POST['descripction'];
$precio = $_POST['precio'];
$conexion->query("INSERT INTO products VALUES(
null
,'$product'
,'$description'
,'$precio'
,null
)");
if($insert)
{
    header("location:../VIEW/index.php");
}
else
{
    echo 'Hubo un error';
}