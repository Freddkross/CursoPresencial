$("#reg").submit(function(event){
    event.preventDefault(); //alamcena los datos sin  refresacar el sitio
    enviar();
});

function enviar(){
    var datos=$("#reg").serialize();
    $.ajax({
        type: "post",
        url: "php/registro.php",
        data: datos,
        success: function(texto){
            if(texto=="Exito"){
                correcto();
            }else{
                Errorphp(texto);
            }
        }
    })
}
function correcto(){
    $("#msjcorrect").removeClass("d-none");
    $("#msjerror").addClass("d-none");
}
function Errorphp(texto){
    $("#msjerror").removeClass("d-none");
    $("#msjerror").html(texto);
}