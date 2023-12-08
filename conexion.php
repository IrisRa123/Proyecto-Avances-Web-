<?php
$SERVER = "localhost";
$user = "root";
$pass = "";
$db = "proyecto";
$conexion = new mysqli($SERVER, $user, $pass, $db);

if ($conexion->connect_errno) {
    die("Conexion Fallida" . $conexion->connect_errno);
}

// Recibir los datos del formulario
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$email = $_POST['email'];
$password = $_POST['password']; // El nombre del campo es 'password', no 'pass'
$ubicacion = $_POST['ubicacion'];

$sql = "INSERT INTO cuenta_usuario (nombre, apellido, email, pass, ubicacion) VALUES ('$nombre',
'$apellido', '$email', '$password', '$ubicacion')";

if ($conexion->query($sql) === TRUE) {
    echo "Datos almacenados correctamente";
} else {
    echo "Error: " . $sql . "<br>" . $conexion->error;
}

$conexion->close();
?>
