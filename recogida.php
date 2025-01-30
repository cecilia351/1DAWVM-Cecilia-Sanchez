<!DOCTYPE html>
<html lang="es">
        <head>
        <meta charset="UTF-8" />
        <title>Ejemplo de formulario en el que estamos comprobando los cambios, para ello utilizaremos tildes, por ejemplo (Jesús),
            a continuación, vamos a volver actualizar el código para seguir viendo los cambios
        </title>
        </head>
    <body>
        <?php
        if (!isset($_POST["nombre"]) && !isset($_POST["contra"])) 
        {
            echo "<h1>Formulario Vacio</h1>";
            echo "<a href='formsimple.php'>Volver al formulario</a>" ;
        } 
    else 
     { 
    $nombre=$_POST["nombre"];
    $contra=$_POST["contra" ];
        if ($nombre!="Jesus"|| $contra !="123456") {
            echo "No es válido ese usuario y contraseña<br>" ;
            echo "<a href='formsimple.php'>Volver al formulario</a>" ;
        }
        else echo "<h1>Entrada correcta</h1>" ;
     }
 ?>


 </body>
 </html>