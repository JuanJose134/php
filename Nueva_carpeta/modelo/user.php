<?php
require_once "../Config/conexion.php";//se usa tambien para heredar la clase y incluir los dos se usan sin uno no funciona el otro
class User extends Db //se usa para heredar una clase que se encuentra en otro archivo diferente
{
    function index() //Consulta todos los Registros de la Base de Datos
    {
        $sql ="SELECT * FROM users";
        $consulta = $this->conexion->query($sql)->fetch_object();
        return $consulta;
        //var_dump($consulta);muestra los valores como estan el en objeto o registro
    }
    function store($name,$phone,$email)
    {
        $sql="INSERT INTO users Values (null,'$name','phone','email')";
        $this->conexion ->query($sql);
        if ($sql)
        {
            echo"registro exitoso";
        }
        else
        {
            echo"Hubo un error en la sentencia o el registro esta duplicado";
        }
    }
    function delete()
    {
        $sql ="";
        $delete = $this->conexion->query($sql);
        return $delete;
    }
    function update()
    {
        $sql ="";
        $update = $this->conexion->query($sql);
        return $update;
    }
    function searByName() //
    {

    }
}
/*$object = new User();
$listUsers =$object ->index();
echo $listUsers->Name.'<br>'.$listUsers->Phone.'<br> '.$listUsers->Email;
$object->store();*/