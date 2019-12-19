$("#form-submit").click(
    function() {

        var email = $("#email").val();
        var nombre = $("#nombre").val();
        var telefono = $("#telefono").val();
        var asunto = $("#asunto").val();
        var mensaje = $("#mensaje").val();
        $.ajax({
            url: "mail/contactanos.php",
            type: "POST",
            data: {
                email: email,
                nombre: nombre,
                telefono: telefono,
                asunto: asunto,
                mensaje: mensaje
            },
            dataType: "html",
            success: function(data) {
                if (data == 1) {
                    modal = '<div class="modal fade" tabindex="-1" role="dialog" id="modalemail">' +
                        '<div class="modal-dialog" role="document">' +
                        '<div class="modal-content">' +
                        '<div class="modal-header">' +
                        '<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>' +
                        '<h4 class="modal-title">Sucripcion a newsletter</h4>' +
                        '</div>' +
                        '<div class="modal-body">' +
                        '<p>Querido cliente, nos comunicaremos a ' + email + ' para dar pronta respuesta a su inquietud </p>' +
                        '</div>' +
                        '<div class="modal-footer">' +
                        '<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>' +
                        '</div>' +
                        '</div><!-- /.modal-content -->' +
                        '</div><!-- /.modal-dialog -->' +
                        '</div><!-- /.modal -->';
                    $("#email").val("");
                    $("#nombre").val("");
                    $("#telefono").val("");
                    $("#asunto").val("");
                    $("#mensaje").val("");
                    $("body").append(modal);
                    $('#modalemail').modal();
                }
            }
        });
    });