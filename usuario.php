<?php

//importar conexion
require 'includes/config/database.php';
$db = conectarDB();
//crar email y password
$email = "correo@correo.com";
$password ="123456";

$passwordHash = password_hash($password, PASSWORD_DEFAULT);

//query para crear usuario
$query = "INSERT INTO usuarios (email, password) VALUES ('$email', '$passwordHash')"; 

//agregar usuario a la base de datos
mysqli_query($db, $query);

?>