<?php
require_once '../modelo/user.php';
$ListUser = UserController::index();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Document</title>
</head>
<body>
    <h3>HOLA MUNDO</h3>
    <p><?=$ListUser->Name?></p>
</body>
</html>