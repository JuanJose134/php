<?php
include "conexion.php";
$sql ="INSERT INTO users VALUES 
(null
    ,'$_POST[first_name]'
    ,'$_POST[middle_name]'
    ,'$_POST[first_lastname]'
    ,'$_POST[second_lastname]'
    ,'$_POST[document]'
    ,'$_POST[password]'
    ,'$_POST[mail]'
    ,'$_POST[phone]'
    ,'$_POST[age]'
    )";
    $conexion->query($sql) or die($conexion);