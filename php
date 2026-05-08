<?php
// login.php - ¡NO USAR ESTO EN UN SITIO REAL!
$user = $_POST['username'];
$pass = $_POST['password'];

// Conexión ficticia a base de datos
$query = "SELECT * FROM usuarios WHERE user = '$user' AND pass = '$pass'";

echo "Consulta ejecutada: " . $query;
// Si la consulta devuelve algo, el "hacker" entra.
?>
