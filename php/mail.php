<?php
$destino="freddkross@gmail.com";
$EMAIL = $_POST['Email'];
$Celular = $_POST['Cel'];
$Contenido= 
"Email: ". $EMAIL .
"\nCelular: " . $Celular;

mail($destino,"Solicitud de información Curso Presencial Sains ",$Contenido);
echo '<script> alert ("Felicidades!, en breve nos comunicaremos contigo..."); history.back (-1);</script>';
header("Location: index.html");
 
?>