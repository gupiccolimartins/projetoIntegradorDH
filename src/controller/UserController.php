<?php

echo "UserController called! </br>";

require_once('model/Conexion.php');
$conn= new Conexion();

$usuarios = $conn->read();
$usuarios = $conn->getUsers();



require_once('view/VerUsuarios.php');

?>