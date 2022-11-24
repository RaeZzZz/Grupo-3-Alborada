<?php

//Nos conectamos

$conn = mysqli_connect("localhost", "root", "", "formulario");

//Comprobamos la conexión

if($conn === false) {
    die("ERROR: No se pudo conectar". mysqli_connect_error());
}

//Tomamos los valores del form

$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];

$sql = "INSERT INTO `formulario`(`username`, `password`, `email`, `telefono`) VALUES ('$username','$password','$email',$telefono);";

$rs = mysqli_query($conn, $sql);

header('Location: postlogin.html'); 
exit;

?>
