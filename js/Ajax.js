var mensaje = $("#mensaje");
mensaje.hide();
$("#registro").on("submit", function(e){
    //Evitamos que se envíe por defecto
    e.preventDefault();
    var formData = new FormData(document.getElementById("registro"));
    $.ajax({
        url: "../Controlador/RegistroUsu.php",
        type: "POST",
        dataType: "HTML",
        data: formData,
        cache: false,
        contentType: false,
        processData: false
        }).done(function(echo){
        mensaje.html(echo);
        mensaje.slideDown(500);
    });
});

var mensajeEli = $("#mensajeEli");
    mensajeEli.hide();
    $("#Eliminacion").on("submit", function(e){
    //Evitamos que se envíe por defecto
    e.preventDefault();
    var formData = new FormData(document.getElementById("Eliminacion"));
    alert("Seguro que desea continuar");
    $.ajax({
        url: "../Controlador/Actualizar_Eliminar_Datos.php",
        type: "POST",
        dataType: "HTML",
        data: formData,
        cache: false,
        contentType: false,
        processData: false
        }).done(function(echo){
          mensajeEli.html(echo);
          mensajeEli.slideDown(500);
    });
});
