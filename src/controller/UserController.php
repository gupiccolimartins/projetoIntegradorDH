<?php

echo "Debug: UserController called! </br>";

require_once('model/Conexion.php');
$conn = new Conexion();

// $usuarios = $conn->read("usuarios","primeiro_nome");
 $usuarios = $conn->getUsers();

require('./view/VerUsuarios.php');


?>