$(document).ready(function(){

    //Envío de datos
    $("#btn-enviar").on("click", function(event){
        event.preventDefault();

        //Campos requeridos
        var nombre = $("#nombre").val();
        var email = $("#email").val(); 
        var comentarios = $("#comentarios").val();
        var error = "";

        if(nombre.trim() == ""){
            error = "* Por favor, introduzca su nombre.</br>";
            $("#nombre").css({"border": "1px solid red"});
        }
        else{ $("#nombre").css({"border": ""}); }

        if(email.trim() == ""){
            error += "* Por favor, introduzca su email.</br>";
            $("#email").css({"border": "1px solid red"});
        }
        else{ $("#email").css({"border": ""}); }

        if(comentarios.trim() == ""){
            error += "* Por favor, introduzca sus comentarios.</br>";
            $("#comentarios").css({"border": "1px solid red"});
        }
        else{ $("#comentarios").css({"border": ""}); }

        if(!$("#privacidad").is(":checked")){
            error += "* Por favor, marque la casilla aceptando la política de privacidad.";
            $("#privacidad").css({"border": "1px solid red"});
        }
        else{ $("#privacidad").css({"border": ""}); }

        $("#mensaje").html(error);

        //Datos rellenados
        if(nombre.trim() != "" && email.trim() != "" && comentarios.trim() != "" && $("#privacidad").is(":checked")){
            var datos = $("#form-contacto").serialize();
            var mensaje = "";

            $.ajax({
                type:'POST',
                url:'insert.php',
                data:datos,
                success: function(r){
                    if(r==1){
                        mensaje = "Los datos se han enviado correctamente."
                        $("#modal-mensaje .modal-body").html(mensaje);
                        $("#modal-mensaje").modal("show");

                        setTimeout(function(){
                            $('#modal-mensaje').modal('hide');
                            $("#form-contacto")[0].reset();
                        }, 3500);
                    }
                    else{
                        mensaje = "No se han podido enviar los datos."
                        $("#modal-mensaje .modal-body").html(mensaje);
                        $("#modal-mensaje").modal("show");

                        setTimeout(function(){
                            $('#modal-mensaje').modal('hide');
                        }, 3500);
                    }
                }
                
            });
        }

    });

});
