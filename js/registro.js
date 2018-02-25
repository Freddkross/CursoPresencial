$("#reg1").submit(function(event)){
    event.preventDefault();
    enviar();
}

function enviar(){
    var datos=$("#reg1").serialize();
    $.ajax({
        type: "post",
        url: "php/registro.php",
        data: datos,
        success: function(texto){
            if(texto=="Exito"){
                correcto();
            }else{
                Errorphp();
            }
        }
    })
}
function correcto(){
    $("#correct").removeClass("d-none");
    
}
function Errorphp(){
    $("#error").removeClass("d-none");
    
}