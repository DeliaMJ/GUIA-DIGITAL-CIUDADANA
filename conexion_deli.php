<?php
$conexiondeli = mysqli_connect ("localhost","root","","guiaciudadanavisitantes");
if (!$conexiondeli) {
	die("Error de conexion: " . mysqli_connect_error ());
} else {
 echo "conexion exitosa<br>";
}
?>

