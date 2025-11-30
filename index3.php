<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>¿REQUIERE INFORMACION ADICIONAL?</title>

    <!-- Código de la profa (AGREGADO) -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="estilos3.css">

    <style>
        /* RESPONSIVIDAD DE LA PROFA */
        @media (max-width: 600px) {
            body {
                padding: 10px;
            }
            h2 {
                font-size: 1.2em;
                text-align: center;
            }
            input[type="text"], 
            input[type="submit"] {
                width: 100%;
                font-size: 1em;
                padding: 10px;
                box-sizing: border-box;
            }
        }
    </style>
</head>

<body>

    <!-- NO MODIFIQUÉ tu estilo, solo lo hice responsivo -->
    <font face="calibri" size="20" color="blue">
        ¿Requiere información adicional?
    </font> 

    <form method="post">
        <h2>REGISTRO</h2>

        <input type="text" name="nombrecompleto" placeholder="Nombre Completo">
        <input type="text" name="municipio" placeholder="Municipio">
        <input type="text" name="correoelectronico" placeholder="Correo Electrónico">
        <input type="text" name="tramite" placeholder="Trámite">
        <input type="text" name="dudaespecifica" placeholder="Duda Específica">

        <br><br>

        <input type="submit" name="registrarmaestra" value="Registrar">
    </form>

    <?php
        include("visitantes2.php");
    ?>

</body>
</html>
