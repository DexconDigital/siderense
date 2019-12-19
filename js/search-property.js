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
        url: "http://www.simi-api.com/ApiSimiweb/response/v2/ciudad/idDepartamento/"+res[0]+"",
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
                    informacion[i].idTipoInm + '">' +
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
                    '<option value="' +
                    informacion[i].idGestion + '">' +
                    informacion[i].Nombre +
                    "</option>";
            }
            $("#operacion").append(resultado);
        }
    });

    var cuidad, inmueble, operacion, zona;

    $("#search").click(function() {
        zona = $("#zona option:selected").val();
        inmueble = $("#inmueble option:selected").val();
        ciudad = $("#ciudad option:selected").val();
        operacion = $("#operacion option:selected").val();
        $.ajax({
            url: "http://www.simi-api.com/ApiSimiweb/response/v21/filtroInmueble/limite/0/total/100/departamento/0/ciudad/" + ciudad + "/zona/" + zona + "/barrio/0/tipoInm/" + inmueble + "/tipOper/" + operacion + "/areamin/0/areamax/0/valmin/0/valmax/0/campo/0/order/0/banios/0/alcobas/0/garajes/0",
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
                var resultado = '';
                var cont = 0;
                if (data == "Sin resultados") {
                    $("#result").html("<h1>No hay resultados según los filtros</h1>");
                    return;
                }
                for (var i = 0; i < data.totalInmuebles; i++) {
                    if (data[i].Alcobas > 0 && data[i].banios > 0) {
                        resultado += '<div class="col-xs-12 col-md-4">' +
                            '<div class="grid-offer" style="height: 405px;">' +
                            '<div class="grid-offer-front">' +
                            '<div class="grid-offer-photo">'+
                            '<a href="detalle-inmueble.php?dt='+ data[i].Codigo_Inmueble+'">';
                        if (data[i].foto1.localeCompare("") != 0) {
                            resultado += '<img src="' + data[i].foto1 + '" alt="" height="220px">';
                        } else {
                            resultado += '<img src="images/grid-offer5.jpg" alt="" height="220px">';
                        }
                        resultado += '</a><div class="type-container">' +
                            '<div class="estate-type">' + data[i].Tipo_Inmueble + '</div>' +
                            '<div class="transaction-type">' + data[i].Gestion + '</div>' +
                            '</div>' +
                            '</div>' +
                            '<div class="grid-offer-text">' +
                            '<i class="fa fa-map-marker grid-offer-localization"></i>' +
                            '<div class="grid-offer-h4">' +
                            '<h4 class="grid-offer-title">' + 'Ciudad: ' + data[i].Ciudad + '</h4>' +
                            '<h4 class="grid-offer-title">' + 'Barrio: ' + data[i].Barrio + '</h4>' +
                            '</div>' +
                            '<div class="clearfix"></div>' +
                            '<div class="clearfix"></div>' +
                            '</div>' +
                            '<div class="price-grid-cont">' +
                            '<div class="grid-price-label pull-left">Precio:</div>' +
                            '<div class="grid-price pull-right">$' + data[i].Canon +
                            '</div>' +
                            '<div class="clearfix"></div>' +
                            '</div>' +
                            '<div class="grid-offer-params">' +
                            '<div class="grid-area">' +
                            '<img src="images/area-icon.png" alt="">' + data[i].AreaConstruida + 'm<sup>2</sup>' +
                            '</div>' +
                            '<div class="grid-rooms">' +
                            '<img src="images/rooms-icon.png" alt="">' + data[i].Alcobas +
                            '</div>' +
                            '<div class="grid-baths">' +
                            ' <img src="images/bathrooms-icon.png" alt="">' + data[i].banios +
                            '</div>' +
                            ' </div>' +
                            '</div>' +
                            ' </div>' +
                            ' </div>';
                            cont++;
                    }
                }
                if (cont == 0) {
                    $("#result").html("<h1>No hay resultados según los filtros</h1>");
                    return;
                }

                $("#result").html("");
                $("#result").append(resultado);
            }
        });
    });
});