<?php
$error='';
$destino="proyectosains@gmail.com";
$Nombre = '';
$EMAIL = '';
$Telefono = '';
$Edad = $_POST['Edad'];
$Escuela_Procedencia = $_POST['Esc'];
$Primer_intento_test = $_POST['Test_1'];
$Carrera = $_POST['Carrera'];
$Carrera_interes = $_POST['carr1'];
$UniR = $_POST['UniR'];
$Uni =$_POST['Uni'];

//validacion del campo nombre

if(empty($_POST['Name'])){
    $error="Escribe un nombre <br>";
}else{
    $Nombre =$_POST['Name'];
    $Nombre=filter_var($Nombre,FILTER_SANITIZE_STRING); //Elimina etiquetas maliciosas y solo deja los Strings
}
//validacion del Email
if(empty($_POST['Email'])){ // verifica que el campo email no este vacio
    $error.="Escribe  tu correo electronico <br>";
}else{
    $EMAIL=$_POST['Email'];
    if(!filter_var($EMAIL,FILTER_VALIDATE_EMAIL)){ //verifica que sea un campo email
        $error.="Ingresa un correo valido porfavor <br>";
    }else{
        $EMAIL=filter_var($EMAIL,FILTER_SANITIZE_STRING); //Elimina etiquetas maliciosas y solo deja strings      
    }
    
}
//validacion del campo telefono Pendiente...
if(!is_numeric($:POST['Tel'])){
    $error.= "ingresa un numero telefonico"
    
}else{
    $Telefono=$_POST['Tel'];
    $Telefono=filter_var($Telefono,FILTER_SANITIZE_STRING);
}






$Contenido= 
"Nombre: " . $Nombre .
"\nEmail: ". $EMAIL .
"\nTelefono: " . $Telefono . 
"\nEdad: " . $Edad .
"\nEscuela de procedencia: " . $Escuela_Procedencia .
"\nA intentado mas de una vez hacer el Examen de ingreso a la universidad: " . $Primer_intento_test .
"\nYa sabe cual carrera estudiar: " . $Carrera .
"\nSu carrera de interes es: " . $Carrera_interes .
"\nYa sabe cual universidad estudiara: " . $UniR .
"\nNombre de la universidad: " . $Uni;

mail($destino,"Registro Curso Presencial Sains ",$Contenido);
header("Location: index.html");
 
?>