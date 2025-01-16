<?php
class Db
{
    protected $conexion;
    function __construct()
    {
        $this -> conexion = new mysqli('localhost','root','','programacion_php');
        //var_dump($this ->conexion);
        //return $this->conexion; es ves de hacer un retur  se puede crear la variable $this y ya usarla luego sin usar un return
    }
}
$objetc = new Db();
