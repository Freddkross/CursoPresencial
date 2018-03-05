<?php
$destino="proyectosains@gmail.com";
$EMAIL = $_POST['Email'];
$Celular = $_POST['Cel'];
$Contenido= 
"Email: ". $EMAIL .
"\nCelular: " . $Celular;

mail($destino,"Solicitud de información Curso Presencial Sains ",$Contenido);
header("Location: index.html");
 
?>