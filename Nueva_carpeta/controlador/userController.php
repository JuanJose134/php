<?php
require_once "../modelo/user.php";
class UserController
{
    function index()
    {
        $object = new Users();
        $listUsers =$object ->index();
        include '../index.php';
        echo $listUsers->Name."<br>".$listUsers->Phone."<br>".$listUsers->Email;
    }
}
$object = new UserController();
$object ->index();