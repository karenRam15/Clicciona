function abrir_modal(id_modal){
    $(id_modal).modal('show');
}

function cerrar_modal(id_modal){
    $(id_modal).modal('hide');
}
function cerrar_sesion(){
    $.ajax({
        url: 'php/logout.php',
        type: 'POST',
    })
    .done(function(r) {
        if (r==1) {
            window.location ="index.php";
        }else{
            console.log("Error al cerrar sesion.");
        }
    });
}