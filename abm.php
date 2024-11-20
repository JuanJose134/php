<?php
include "conexion.php";
//$_POST["id"];
$conexion->query("DELETE  from users where Id = $_POST[id]");