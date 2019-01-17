<?php

// Credenciais base de datos
$servername = "localhost";
$username = "alan";
$password = "Turing.2019";
$database ="ENIGMA";

//crear conexiones MySQL
$conn = mysqli_connect($servername, $username, $password, $database);

//Comprobar conexion, se falla mostrar erro
if (!$conn) {
die('<p>Fallou a conexion coa base de datos: </p>' . mysqli_connect_error());
}
echo '<p>Conexión ok!<p>';

?>
