<?php
include("conexion3.php");

// Comprobar si se envió el formulario
if (isset($_POST['registrarmaestra']) &&
    !empty(trim($_POST['nombrecompleto'])) &&
    !empty(trim($_POST['municipio'])) &&
    !empty(trim($_POST['correoelectronico'])) &&
        !empty(trim($_POST['tramite'])) &&
    !empty(trim($_POST['dudaespecifica']))) {

    // Limpiar y escapar datos
    $nombrecompleto = mysqli_real_escape_string($conexion3, trim($_POST['nombrecompleto']));
    $municipio = mysqli_real_escape_string($conexion3, trim($_POST['municipio']));
 $correoelectronico = isset($_POST['correoelectronico']) ? mysqli_real_escape_string($conexion3, trim($_POST['correoelectronico'])):"";
     $tramite = mysqli_real_escape_string($conexion3, trim($_POST['tramite']));
    $dudaespecifica = mysqli_real_escape_string($conexion3, trim($_POST['dudaespecifica']));


    // Consulta SQL
    $maestra_consulta = "INSERT INTO visitantes2(nombrecompleto, municipio, correoelectronico, tramite, dudaespecifica)
    VALUES ('$nombrecompleto', '$municipio', '$correoelectronico', '$tramite', '$dudaespecifica')";

    $maestra_resultado = mysqli_query($conexion3, $maestra_consulta);
    if ($maestra_resultado) {
        echo "<h3 style='color:green;'>*  REGISTRADO *</h3>";
    } else {
        echo "<h3 style='color:red;'>Error en la consulta: " . mysqli_error($conexion3) . "</h3>";
    }
} else {
    echo "<h3 style='color:red;'>* IMPORTANTE: DEBE COMPLETAR TODOS LOS DATOS *</h3>";
}
?>