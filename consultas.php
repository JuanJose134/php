<?php
include "conexion.php";
$select_users = $conexion ->query("SELECT * FROM users");
var_dump($select_users);