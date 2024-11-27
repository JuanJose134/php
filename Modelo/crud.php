<?php
include "../conexion.php";
$conexion->query("INSERT INTO users VALUES(null,'$_POST[nombre]','$_POST[documento]')");
