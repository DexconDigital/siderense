$("#ciudad option[text='Ciudad:']").attr("selected", "selected");
$("#zona option[text='Zona:']").attr("selected", "selected");
$("#operacion option[text='Operación:']").attr("selected", "selected");
$("#inmueble option[text='Inmueble:']").attr("selected", "selected");

$(document).ready(function() {
    //guarda el id de los departamentos
    var res = new Array();

    //peticion departamentos
    $.ajax({
        url: "http://www.simi-api.com/ApiSimiweb/response/v2/departamento/",
        type: "GET",
        beforeSend: function(xhr) {
            xhr.setRequestHeader(
                "Authorization",
                "Basic " +
                btoa("Authorization:9Gx1hhqSeQnEOWMF4FJzcrbDo6k1MD7LUGVLimA4-842")
            );
        },
        dataType: "html",
        success: function(data) {
            var datos = data.trim();

            if (datos.localeCompare('"Sin resultados"') == 0) {
                res += "No hay Inmuebles destacados";
            } else {
                var informacion = JSON.parse(data);
                for (var i = 0; i < informacion.length; i++) {
                    res[i] = informacion[i].id;
                }
            }
        }
    });

    //peticion ciudades
    $.ajax({
        url: "http://www.simi-api.com/ApiSimiweb/response/v2/ciudad/idDepartamento/res[0]",
        type: "GET",
        beforeSend: function(xhr) {
            xhr.setRequestHeader(
                "Authorization",
                "Basic " +
                btoa("Authorization:Q94xlnPYlac2ISgyseVDjIZGzxRcvhrtfo9D0pEf-842")
            );
        },
        dataType: "json",
        success: function(data) {

            var resultado = '<option value="0">Seleccione una ciudad</option>';
            var informacion = (data);
            for (var i = 0; i < informacion.length; i++) {
                resultado += '<option value="' +
                    informacion[i].id +
                    '">' +
                    informacion[i].nombre +
                    "</option>";
            }
            $("#ciudad").append(resultado);
        }
    });

    $("#ciudad").change(function() {
        var res_ciudad = $("#ciudad option:selected").val();
        $.ajax({
            url: "http://www.simi-api.com/ApiSimiweb/response/v2/zonas/idCiudad/" +
                res_ciudad +
                "",
            type: "GET",
            beforeSend: function(xhr) {
                xhr.setRequestHeader(
                    "Authorization",
                    "Basic " +
                    btoa("Authorization:Q94xlnPYlac2ISgyseVDjIZGzxRcvhrtfo9D0pEf-842")
                );
            },
            dataType: "json",
            success: function(data) {
                var resultado = '<option value="0">Seleccione una zona</option>';
                var informacion = (data);
                for (var i = 0; i < informacion.length; i++) {
                    resultado += '<option value="' + informacion[i].id + '">' +
                        informacion[i].nombre +
                        "</option>";
                }

                $("#zona").html("");
                $("#zona").html(resultado);
            }
        });
    });

    //get list of properties
    $.ajax({
        url: "http://www.simi-api.com/ApiSimiweb/response/tipoInmuebles/",
        type: "GET",
        beforeSend: function(xhr) {
            xhr.setRequestHeader(
                "Authorization",
                "Basic " +
                btoa("Authorization:Q94xlnPYlac2ISgyseVDjIZGzxRcvhrtfo9D0pEf-842")
            );
        },
        dataType: "json",
        success: function(data) {
            var resultado = '<option value="0">Seleccione un tipo de inmueble</option>';
            var informacion = (data);
            for (var i = 0; i < informacion.length; i++) {
                resultado +=
                    '<option value="' + 
                    informacion[i].idTipoInm + '">'+
                    informacion[i].Nombre +
                    "</option>";
            }
            $("#inmueble").html(resultado);
        }
    });

    //get list of the transactions
    $.ajax({
        url: "http://www.simi-api.com/ApiSimiweb/response/gestion/",
        type: "GET",
        beforeSend: function(xhr) {
            xhr.setRequestHeader(
                "Authorization",
                "Basic " +
                btoa("Authorization:Q94xlnPYlac2ISgyseVDjIZGzxRcvhrtfo9D0pEf-842")
            );
        },
        dataType: "json",
        success: function(data) {
            var resultado = '<option value="0">Seleccione una operación</option>';
            var informacion = (data);
            for (var i = 0; i < informacion.length; i++) {
                resultado +=
                    '<option value="'+
                    informacion[i].idGestion+ '">' +
                    informacion[i].Nombre +
                    "</option>";
            }
            $("#operacion").append(resultado);
        }
    });

    var cuidad, inmueble,operacion, zona;

    $("#search").click(function(){
        zona = $("#zona option:selected").val();
        inmueble = $("#inmueble option:selected").val();
        ciudad = $("#ciudad option:selected").val();
        operacion = $("#operacion option:selected").val();        
        window.location.href = 'inmuebles.php?gs='+operacion+'&&ti='+inmueble+'&&ci='+ciudad+'&&zo='+zona+'';
    });
});