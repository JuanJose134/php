<?php
require_once "../modelo/user.php";
class UserController
{
    public static function index()
    {
        $object = new User();//se instancia la otra clase que se usa aca para ejecutarla en este metodo  con su informacion
        $listUsers =$object->index();//se crea una variable para guardar el resultado de la consulta en la clase user con el metodo index
        //include '../VIEW/index.php';
        //echo $listUsers->Name."<br>".$listUsers->Phone."<br>".$listUsers->Email;
        return $listUsers;

    }
    public static function store1($name,$phone,$email)
    {
        $object = new User();
        $SaveUser =$object->store($name,$phone,$email);
        return $SaveUser; 
    }
    public static function store2()
    {
        /*hya dos formas de poner los metodos post pero es mejor 
        la opcion 2 ya que alli se econtrara todo el proceso y no se usarian los parametros antes
        para crear un usuario y en el otro archivo quedara mas limpio*/
        $name =$_POST['name'];
        $phone =$_POST['phone'];
        $email =$_POST['email'];
        $object = new User();
        $SaveUser =$object->store($name,$phone,$email);
        return $SaveUser; 
    }
}