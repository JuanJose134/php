<?php
include "conexion.php";
$select_users = $conexion ->query("SELECT * FROM users");
echo "<table border ='2'>";
echo "<thead>";
echo "<th>Primer nombre</th> ";
echo "<th>Documento</th> ";
echo "</thead>";
echo "<tbody>";
while($user = $select_users->fetch_object())
{
    echo "<tr>";
    echo "<td>".$user->first_name."</td>";
    echo "<td>".$user->document."</td>";
    echo "</tr>";
}
echo "</tbody>";
echo "</table>";
