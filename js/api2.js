$.ajax({
    url: 'http://www.simi-api.com/ApiSimiweb/response/v21/filtroInmueble/limite/0/total/100/',
    type: 'GET',
    cache: true,
    beforeSend: function(xhr) {
        xhr.setRequestHeader(
            'Authorization',
            'Basic ' + btoa('Authorization:Q94xlnPYlac2ISgyseVDjIZGzxRcvhrtfo9D0pEf-842'));
    },
    'dataType': "json",
    success: function(data) {
        //one slide
        if (data == "Sin resultados") {
            $("#result").append("<h1>NO HAY INMUEBLES</h1>");
            return;

        } else {
            if(data.totalInmuebles >=1){
            var res = '<div class="slide-desc-text">' +
                '<div class="estate-type">' + data[0].Tipo_Inmueble + '</div>' +
                '<div class="transaction-type">' + data[0].Gestion + '</div>' +
                '<h4>' + 'Ciudad: ' + data[0].Ciudad + '</h4>' +
                '<h4>' + 'Barrio: ' + data[0].Barrio + '</h4>' +
                '<div class="clearfix"></div>' +
                '<p>' + data[0].descripcionlarga +
                '</p>' +
                '</div>' +
                '<div class="slide-desc-params">' +
                '<div class="slide-desc-area">' +
                '<img src="images/area-icon.png" alt="">' + data[0].AreaConstruida + 'm<sup>2</sup>' +
                '</div>' +
                '<div class="slide-desc-rooms">' +
                '<img src="images/rooms-icon.png" alt="">' + data[0].Alcobas +
                '</div>' +
                '<div class="slide-desc-baths">' +
                '<img src="images/bathrooms-icon.png" alt="">' + data[0].banios +
                '</div>' +
                '<div class="slide-desc-parking">' +
                '<img src="images/parking-icon.png" alt="">' + data[0].garaje +
                '</div>' +
                '</div>' +
                '<div class="slide-desc-price">$' + data[0].Canon + '</div>' +
                '<div class="clearfix"></div>';

            $(".slide-desc-1 .pull-right").append(res);
        }
            //two slide
if(data.totalInmuebles >=2 ){
            var res1 = '<div class="slide-desc-text">' +
                '<div class="estate-type">' + data[1].Tipo_Inmueble + '</div>' +
                '<div class="transaction-type">' + data[1].Gestion + '</div>' +
                '<h4>' + 'Ciudad: ' + data[1].Ciudad + '</h4>' +
                '<h4>' + 'Barrio: ' + data[1].Barrio + '</h4>' +
                '<div class="clearfix"></div>' +
                '<p>' + data[1].descripcionlarga +
                '</p>' +
                '</div>' +
                '<div class="slide-desc-params">' +
                '<div class="slide-desc-area">' +
                '<img src="images/area-icon.png" alt="">' + data[1].AreaConstruida + 'm<sup>2</sup>' +
                '</div>' +
                '<div class="slide-desc-rooms">' +
                '<img src="images/rooms-icon.png" alt="">' + data[1].Alcobas +
                '</div>' +
                '<div class="slide-desc-baths">' +
                '<img src="images/bathrooms-icon.png" alt="">' + data[1].banios +
                '</div>' +
                '<div class="slide-desc-parking">' +
                '<img src="images/parking-icon.png" alt="">' + data[1].garaje +
                '</div>' +
                '</div>' +
                '<div class="slide-desc-price">$' + data[1].Canon + '</div>' +
                '<div class="clearfix"></div>';

    
            $(".slide-desc-2 .pull-left").append(res1);
}
    //three slide
        if(data.totalInmuebles >=3 ){
            var res2 = '<div class="slide-desc-text">' +
                '<div class="estate-type">' + data[2].Tipo_Inmueble + '</div>' +
                '<div class="transaction-type">' + data[0].Gestion + '</div>' +
                '<h4>' + 'Ciudad: ' + data[2].Ciudad + '</h4>' +
                '<h4>' + 'Barrio: ' + data[2].Barrio + '</h4>' +
                '<div class="clearfix"></div>' +
                '<p>' + data[2].descripcionlarga +
                '</p>' +
                '</div>' +
                '<div class="slide-desc-params">' +
                '<div class="slide-desc-area">' +
                '<img src="images/area-icon.png" alt="">' + data[2].AreaConstruida + 'm<sup>2</sup>' +
                '</div>' +
                '<div class="slide-desc-rooms">' +
                '<img src="images/rooms-icon.png" alt="">' + data[2].Alcobas +
                '</div>' +
                '<div class="slide-desc-baths">' +
                '<img src="images/bathrooms-icon.png" alt="">' + data[2].banios +
                '</div>' +
                '<div class="slide-desc-parking">' +
                '<img src="images/parking-icon.png" alt="">' + data[2].garaje +
                '</div>' +
                '</div>' +
                '<div class="slide-desc-price">$' + data[2].Canon + '</div>' +
                '<div class="clearfix"></div>';


            $(".slide-desc-3 .center-block").append(res2);
            }
        }
    }

});