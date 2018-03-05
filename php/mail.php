<?php
$destino="proyectosains@gmail.com";
$EMAIL = "";
$Celular = "";


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

//validacion del campo telefono
if (!ctype_digit($_POST['Cel'])) {
    $error.= "ingresa un numero telefonico";
}else{
    $Telefono=$_POST['Cel'];
    $Telefono=filter_var($Telefono,FILTER_SANITIZE_STRING);
}




$Contenido= 
"Email: ". $EMAIL .
"\nCelular: " . $Celular;



if($error == ''){
    $success= mail($destino,"Solicitud de información Curso Presencial Sains ",$Contenido);
    echo "Sus datos fueron enviados correctamente, nuestros tecnicos se comunicaran en menos de 24hrs";
}else{
    echo $error;
}
 
 
?>