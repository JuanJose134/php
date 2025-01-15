<?php
require_once "../db/conexion.php";
class Users extends Db
{
    function index()
    {
        $sql ="SELECT * FROM users";
        $consulta = $this->conexion->query($sql)->fetch_object();
        return $consulta;
        //var_dump($consulta);muestra los valores 
    }
    function store()
    {
        $sql="INSERT INTO users Values (null,'juan','1029384756','juan@gmail.com')";
        $this->conexion ->query($sql);
        if ($sql)
        {
            echo"registro exitoso";
        }
        else
        {
            echo"Hubo un error en la sentencia";
        }

    }
    function delete()
    {
        
    }
    function update()
    {
        
    }
    function searByName()
    {

    }
}
$object = new Users();
$listUsers =$object ->index();
//$object->store();