<?php
$error='';
$destino="freddkross@gmail.com"; //"proyectosains@gmail.com"
$Nombre = '';
$EMAIL = '';
$Telefono = '';
$Edad = '';
$Escuela_Procedencia ='';
$Primer_intento_test = $_POST['Test_1'];
$Carrera = $_POST['Carrera'];
$Carrera_interes = $_POST['carr1'];
$UniR = $_POST['UniR'];
$Uni =$_POST['Uni'];

//validacion del campo nombre

if(empty($_POST['Nombre'])){
    $error="Escribe un nombre <br>";
}else{
    $Nombre =$_POST['Nombre'];
    $Nombre=filter_var($Nombre,FILTER_SANITIZE_STRING); //Elimina etiquetas maliciosas y solo deja los Strings
}
//validacion del Email
if(empty($_POST['email'])){ // verifica que el campo email no este vacio
    $error.="Escribe  tu correo electronico <br>";
}else{
    $EMAIL=$_POST['email'];
    if(!filter_var($EMAIL,FILTER_VALIDATE_EMAIL)){ //verifica que sea un campo email
        $error.="Ingresa un correo valido porfavor <br>";
    }else{
        $EMAIL=filter_var($EMAIL,FILTER_SANITIZE_STRING); //Elimina etiquetas maliciosas y solo deja strings      
    }
    
}
//validacion del campo telefono
if (!ctype_digit($_POST['Tel'])) {
    $error.= "ingresa un numero telefonico";
}else{
    $Telefono=$_POST['Tel'];
    $Telefono=filter_var($Telefono,FILTER_SANITIZE_STRING);
}

//validacion de campo Edad
if (!ctype_digit($_POST['Edad'])) {
    $error.= "ingresa tu Edad de forma numerica <br>";
}else{
    $Edad=$_POST['Edad'];
    $Edad=filter_var($Edad,FILTER_SANITIZE_STRING);
}

//validacion del campo ESC Pro
if(empty($_POST['Esc'])){
    $error.="Escribe tu escuela de procedencia por favor  <br>";
}else{
    $Escuela_Procedencia = $_POST['Esc'];
    $Escuela_Procedencia=filter_var($Escuela_Procedencia,FILTER_SANITIZE_STRING); //Elimina etiquetas maliciosas y solo deja los Strings
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



//Enviar correo
if($error == ''){
    $success= mail($destino,"Registro Curso Presencial Sains ",$Contenido);
    echo "Sus datos fueron enviados correctamente, nuestros tecnicos se comunicaran en menos de 24hrs";
}else{
    echo $error;
}
 
?>