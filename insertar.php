<?php
include "conexion.php";
$sql ="INSERT INTO users VALUES 
(null
    ,'$_POST[first_name]'
    ,'$_POST[second_name]'
    ,'$_POST[first_surname]'
    ,'$_POST[secondlastname]'
    ,'$_POST[Documento]'
    ,'$_POST[password]'
    ,'$_POST[mail]'
    ,'$_POST[phone]'
    ,'$_POST[age]'
    )";
    $conexion->query($sql ) or die($conexion);