<?php
$conexion3= mysqli_connect ("localhost","root","","guiaciudadanavisitantes");
if (!$conexion3) {
	die("Error de conexion: " . mysqli_connect_error ());
} else {
 echo "conexion exitosa<br>";
}
?>