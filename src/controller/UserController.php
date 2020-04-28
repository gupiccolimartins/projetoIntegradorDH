<?php
require('../model/Conexion.php');

$conexion = new Conexion();
$usuarios = $conexion->getUsers();


require ('../view/User_View.php');

?>