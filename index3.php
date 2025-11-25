<!DOCTYPE html>
<html>
<head>
<title>¿REQUIERE INFORMACION ADICINAL?</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="estilos3.css">
</head>
<body>
   
    <font face="calibri" size=20 color=blue>
        ¿Requiere informacion adicional?
    </font> 
    <form method="post">  
        <h2>REGISTRO</h2>

        <input type="text" name="nombrecompleto" placeholder="Nombre Completo">
        <input type="text" name="municipio" placeholder="Municipio">
        <input type="text" name="correoelectronico" placeholder="Correo Electronico">
        <input type="text" name="tramite" placeholder="Tramite">
        <input type="text" name="dudaespecifica" placeholder="Duda Especifica">

        
        <input type="submit" name="registrarmaestra">
    </form>
    
    <?php
        include("visitantes2.php");
    ?>
</body>
</html>