<?php
include "../CONFIG/db.php";
$product = $_POST['product'];
$description = $_POST['descripction'];
$precio = $_POST['precio'];
$conexion->query("INSERT INTO productos VALUES(
null
,'$product'
,'$description'
,'$precio'
,default
)");