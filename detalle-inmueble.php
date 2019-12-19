<!DOCTYPE html>
<html lang="es">
<?php
$codigo = $_GET["dt"];
?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Detalle Inmueble</title>
    <meta name="keywords" content="Sidernse, Inmobiliarias Medellin, inmobiliaria siderense" />
    <meta name="description" content="Inmobiliaria Siderense" />
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
    <!-- Font awesome styles -->
    <link href="apartment-font/css/font-awesome.min.css" rel="stylesheet"  type='text/css'>
    <!-- Custom styles -->
    <link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Roboto:400,400italic,300,300italic,500,500italic,700,700italic&amp;subset=latin,latin-ext'>
    <link rel="stylesheet" type="text/css" href="css/plugins.css">
    <link rel="stylesheet" type="text/css" href="css/apartment-layout.css">
    <link id="skin" rel="stylesheet" type="text/css" href="css/apartment-colors-blue.css">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
    <div class="loader-bg"></div>
    <div id="wrapper">

        <!-- Page header -->
        <header>
            <div class="top-bar-wrapper">
                <div class="container top-bar">
                    <div class="row">
                        <div class="col-xs-5 col-sm-12">
                            <div class="top-mail pull-left hidden-xs">
                                <span class="top-icon-circle">
								<i class="fa fa-envelope fa-sm"></i>
							</span>
                                <span class="top-bar-text">siderenselaestrella@une.net.co</span>
                            </div>
                            <div class="top-phone pull-left hidden-xxs">
                                <span class="top-icon-circle">
								<i class="fa fa-phone"></i>
							</span>
                                <span class="top-bar-text"> (4) - 322 00 32</span>
                            </div>
                            <div class="top-localization pull-left hidden-sm hidden-md hidden-xs">
                                <span class="top-icon-circle pull-left">
								<i class="fa fa-map-marker"></i>
							</span>
                                <span class="top-bar-text">Calle 81 sur No 59-115 Local 01 Municipio La Estrella, Antioquia.</span>
                            </div>
                        </div>

                        <div class="col-xs-7 col-sm-4">
                            <!-- Candado
						<div class="top-social-last top-dark pull-right" data-toggle="tooltip" data-placement="bottom" title="Login/Register">
							<a class="top-icon-circle" href="#login-modal" data-toggle="modal">
								<i class="fa fa-lock"></i>
							</a>
						</div>
-->
                        </div>
                    </div>
                </div>
                <!-- /.top-bar -->
            </div>
            <!-- /.Page top-bar-wrapper -->
            <nav class="navbar main-menu-cont">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar icon-bar1"></span>
						<span class="icon-bar icon-bar2"></span>
						<span class="icon-bar icon-bar3"></span>
					</button>
                        <a href="index.html" title="" class="navbar-brand">
						<img src="images/logoazul.png" alt="Siderense" />
					</a>
                    </div>
                    <div id="navbar" class="navbar-collapse collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li class="dropdown">
                                <a href="index.html" class="dropdown-toggle" role="button" aria-haspopup="true" aria-expanded="false">Inicio</a>
                            </li>
                            <li class="dropdown">
                                <a href="sobrenosotros.html" class="dropdown-toggle" role="button" aria-haspopup="true" aria-expanded="false">Quienes Somos</a>
                                <ul class="dropdown-menu">
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="servicios.html" class="dropdown-toggle" role="button" aria-haspopup="true" aria-expanded="false">Servicios</a>
                            </li>
                            <li class="dropdown">
                                <a href="inmuebles.php" class="dropdown-toggle" role="button" aria-haspopup="true" aria-expanded="false">Inmuebles</a>
                            </li>
                            <li class="dropdown">
                                <a href="clientes.html" class="dropdown-toggle" role="button" aria-haspopup="true" aria-expanded="false">Clientes</a>
                            </li>
                            <li class="dropdown">
                                <a href="contactenos.html" class="dropdown-toggle" role="button" aria-haspopup="true" aria-expanded="false">Contáctenos</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- /.mani-menu-cont -->
        </header>

        <section class="short-image no-padding agency">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-lg-12 short-image-title">
                    <h1 class="second-color">Detalle de inmueble</h1>
                    <div class="short-title-separator"></div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-light section-top-shadow no-bottom-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-8 col-sm-7 col-xs-12">
                    <div class="row">
                        <div class="col-xs-12 col-sm-7 col-md-7 col-lg-7">
                            <div class="details-image pull-left hidden-xs">
                                <i class="fa fa-home"></i>
                            </div>
                            <div class="details-title pull-left">
                                <h5 class="subtitle-margin" id="gestion-c"></h5>
                                <h3 id="ubicacion-c"></h3>
                            </div>
                            <div class="clearfix"></div>
                            <div class="title-separator-primary"></div>
                            <div class="details-desc">
                                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                    <!-- Indicators -->
                                    <ol class="carousel-indicators">

                                    </ol>

                                    <!-- Wrapper for slides -->
                                    <div class="carousel-inner">

                                    </div>

                                    <!-- Left and right controls -->
                                    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                                        <span class="glyphicon glyphicon-chevron-left"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="right carousel-control" href="#myCarousel" data-slide="next">
                                        <span class="glyphicon glyphicon-chevron-right"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4 col-md-4 margin-top-112">
                            <div class="details-parameters-price" id="precio"></div>
                            <div class="details-parameters">
                                <div class="details-parameters-cont">
                                    <div class="details-parameters-name"><span class="fa fa-building"></span> Codigo Inmueble</div>
                                    <div class="details-parameters-val" id="codigo"></div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="details-parameters-cont">
                                    <div class="details-parameters-name"><span class="fa fa-arrows-h"></span> Área</div>
                                    <div class="details-parameters-val" id="area"></div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="details-parameters-cont">
                                    <div class="details-parameters-name"><span class="fa fa-bed"></span> Alcobas</div>
                                    <div class="details-parameters-val" id="alcobas"></div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="details-parameters-cont">
                                    <div class="details-parameters-name">&#x1f6c0; Baños</div>
                                    <div class="details-parameters-val" id="banios"></div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="details-parameters-cont">
                                    <div class="details-parameters-name"><span class="fa fa-map-marker"></span> Departamento</div>
                                    <div class="details-parameters-val" id="dpto"></div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="details-parameters-cont">
                                    <div class="details-parameters-name"><span class="fa fa-map-marker"></span> Ciudad</div>
                                    <div class="details-parameters-val" id="ciudad-c"></div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="details-parameters-cont">
                                    <div class="details-parameters-name"><span class="fa fa-map-marker"></span> Barrio</div>
                                    <div class="details-parameters-val" id="barrio"></div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="details-parameters-cont">
                                    <div class="details-parameters-name"><span class="fa fa-map-marker"></span> Zona</div>
                                    <div class="details-parameters-val" id="zona"></div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="details-parameters-cont">
                                    <div class="details-parameters-name"><span class="fa fa-location-arrow"></span> Estrato</div>
                                    <div class="details-parameters-val" id="estrato"></div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="details-parameters-cont">
                                    <div class="details-parameters-name"><span class="fa fa-money"></span> Administración</div>
                                    <div class="details-parameters-val" id="administracion"></div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="details-parameters-cont">
                                    <div class="details-parameters-name"><span class="fa fa-money"></span> Venta</div>
                                    <div class="details-parameters-val" id="venta"></div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row margin-top-45">
                        <div class="container margin-bottom-15">
                                <div class="details-title pull-left">
                                    <h5 class="subtitle-margin"></h5>
                                    <h3>Detalles<span class="special-color">.</span></h3>
                                </div>
                                <div class="clearfix"></div>  
                                <div class="title-separator-primary col-xs-12 col-sm-7 col-md-7 col-lg-7"></div>                                                      
                        </div>
                        <div class="col-xs-6 col-sm-6">
                            <ul class="details-ticks" id="details-1">

                            </ul>
                        </div>
                        <div class="col-xs-6 col-sm-6">
                            <ul class="details-ticks" id="details-2">

                            </ul>

                        </div>
                        </div>
                    </div>
                    <div class="container">
                    <div class="row margin-top-45" jstcache="0">
                        <div class="col-lg-11 col-md-11 col-sm-11 col-xs-11 margin-bottom-30 apartment-tabs margin-top-30" jstcache="0">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="active">
                                    <a href="#tab-map" aria-controls="tab-map" role="tab" data-toggle="tab">
                                    <span>Mapa</span>
                                    <div class="button-triangle2"></div>
                                </a>
                                </li>
                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content" jstcache="0">
                                <div role="tabpanel" class="tab-pane active" id="tab-map">
                                    <div id="map"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

        <footer class="large-cont">
            <div class="container">
                <div class="row">

                    <div class="col-xs-12 col-sm-6 col-lg-4">
                        <h4 class="second-color">Contáctenos<span class="special-color">.</span></h4>
                        <div class="footer-title-separator"></div>
                        <p class="footer-p">Gracias por su interés en SIDERENSE, le agradecemos diligenciar el formulario de contactos, si requiere información más detallada acerca de nuestra Compañía, no dude en ponerse en contacto con nosotros, uno de nuestros Ejecutivos
                            le atenderá a la brevedad.</p>
                        <address>
						<span><i class="fa fa-map-marker"></i>Calle 81 sur No 59-115 Local 01 Municipio La Estrella, Antioquia.</span>
						<div class="footer-separator"></div>
						<span><i class="fa fa-envelope fa-sm"></i><a href="#">siderenselaestrella@une.net.co</a></span>
						<div class="footer-separator"></div>
						<span><i class="fa fa-phone"></i>(4)-322 00 32</span>
					</address>
                        <div class="clear"></div>
                    </div>

                    <div class="col-xs-12 col-sm-6 col-lg-4">
                        <h4 class="second-color">Accesos Rápidos<span class="special-color">.</span></h4>
                        <div class="footer-title-separator"></div>
                        <ul class="footer-ul">
                            <li><span class="custom-ul-bullet"></span><a href="index.html">Inicio</a></li>
                            <li><span class="custom-ul-bullet"></span><a href="sobrenosotros.html">Quienes somos</a></li>
                            <li><span class="custom-ul-bullet"></span><a href="servicios.html">Servicios</a></li>
                            <li><span class="custom-ul-bullet"></span><a href="inmuebles.php">Inmuebles </a></li>
                            <li><span class="custom-ul-bullet"></span><a href="clientes.html">Clientes</a></li>
                            <li><span class="custom-ul-bullet"></span><a href="contactenos.html">Contactenos</a></li>
                        </ul>
                    </div>

                    <div class="col-xs-12 col-sm-6 col-lg-4">
                        <h4 class="second-color">Boletin<span class="special-color">.</span></h4>
                        <div class="footer-title-separator"></div>
                        <p class="footer-p">Suscríbase a nuestras publicaciones frecuentes y esté al tanto de las novedades en el sector inmobiliario.</p>
                        <div class="form-inline footer-newsletter">
                            <input type="email" class="form-control" id="email" placeholder="Ingrese su Email">
                            <button id="send_email" type="submit" class="btn"><i class="fa fa-lg fa-paper-plane"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <footer class="small-cont">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-md-6 small-cont">
                        <img src="images/logoblanco.png" alt="" class="img-responsive footer-logo" />
                    </div>
                    <div class="col-xs-12 col-md-6 footer-copyrights">
                        &copy; Copyright 2018 <a href="http://www.dexcondigital.com/" target="blank">Dexcon Digital</a>. Todos los derechos reservados
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <!-- Move to top button -->

    <div class="move-top">
        <div class="big-triangle-second-color"></div>
        <div class="big-icon-second-color"><i class="jfont fa-lg">&#xe803;</i></div>
    </div>
    
    <!-- Login modal -->
    
    <!-- Forgotten password modal -->
    
    <!-- jQuery  -->
    <script type="text/javascript" src="js/jQuery/jquery.min.js"></script>
    <script type="text/javascript" src="js/jQuery/jquery-ui.min.js"></script>
    <script type="text/javascript" src="js/search-property.js"></script>
    
    <!-- Bootstrap-->
    <script type="text/javascript" src="bootstrap/bootstrap.min.js"></script>
    
    <!-- Google Maps -->
    <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDQt6lKotsu8gJXXqObXEkiNvN42jGrNCI&amp;sensor=false&amp;libraries=places"></script>
    
    <!-- plugins script -->
    <script type="text/javascript" src="js/plugins.js"></script>
    <script type="text/javascript" src="mail/validate.js"></script>
    
    <?php echo "<script> var x ='" . $codigo . "';</script>"; ?>
    <script>
        var latitud = 0;
        var longitud = 0;
        $.ajax({
            url: "http://www.simi-api.com/ApiSimiweb/response/v2/inmueble/codInmueble/"+x+"",
            async: true,
            type: "GET",
            dataType: "json",
            beforeSend: function(xhr) {
                xhr.setRequestHeader(
                    "Authorization",
                    "Basic " +
                    btoa("Authorization:Q94xlnPYlac2ISgyseVDjIZGzxRcvhrtfo9D0pEf-842")
                );
            },
            success: function(data) {
                var j = 1;
                var carrousel1  = '<li data-target="#myCarousel" data-slide-to="0" class="active"></li>';
                var carrousel2  = '';
                if(data.fotos== undefined){
                        carrousel1 += '<li data-target="#myCarousel" data-slide-to="0"></li>';
                        carrousel2 += '<div class="item active">'+
                                    '<img src="images/no_image.png" style="width: 100%;">'+
                                    '</div>';
                                    carrousel1 += '<li data-target="#myCarousel" data-slide-to="1"></li>';
                        carrousel2 += '<div class="item ">'+
                                    '<img src="images/no_image.png" style="width: 100%;">'+
                                    '</div>';
                    }else{
                carrousel2 += '<div class="item active">'+
                                    '<img src="' + data.fotos[0].foto + '">'+
                                    '</div>';

                for(var y = 1; y < Object.keys(data.fotos).length-1; y++){
                    if(data.fotos[y].foto != undefined){
                    carrousel1 += '<li data-target="#myCarousel" data-slide-to="'+j+'"></li>';
                    carrousel2 += '<div class="item">'+
                                    '<img src="' + data.fotos[y].foto + '">'+
                                    '</div>';
                    j++;
                    }
                }
            }
                $("#precio").append("$"+data.precio);
                $("#ciudad-c").append(data.ciudad);
                $("#dpto").append(data.depto);
                $("#barrio").append(data.barrio);
                $("#zona").append(data.zona);
                $("#ubicacion-c").append(data.depto+", "+data.barrio +", "+data.ciudad +'<span class="special-color">.</span>');
                $("#alcobas").append(data.alcobas);
                $("#banios").append(data.banos);
                $("#area").append(data.AreaConstruida +" mts<sup>2</sup>");
                $("#gestion").append(data.Gestion);
                $("#gestion-c").append(data.Tipo_Inmueble+" en "+data.Gestion);
                $("#tipo").append(data.Tipo_Inmueble);
                $("#codigo").append(data.idInm);
                $("#estrato").append(data.Estrato);
                $("#administracion").append(data.Administracion);
                $("#venta").append(data.ValorVenta);
                $("#").append();
                $(".descripcion").text(data.descripcionlarga);
                //add data to html
                $(".carousel-indicators").html(carrousel1);
                $(".carousel-inner").html(carrousel2);

                $('#mycarousel').carousel(); //<li><i class="jfont"></i>Air conditioning</li>
                var res = '';
                                if((data.caracteristicasExternas != undefined) ){
                                    for(var x = 0; x < Object.keys(data.caracteristicasExternas).length; x++){
                                            res+= '<li><i class="jfont"></i>'+data.caracteristicasExternas[x].Descripcion+'</li>';
                                    }
                                }
                                if(Object.keys(data.caracteristicasExternas).length == 0){
                                    res+= '<li><i class="jfont"></i>Garaje: '+data.garaje+'</li>';
                                }
                var res1 = '';
                                if(data.caracteristicasInternas != undefined || Object.keys(data.caracteristicasInternas).length > 0){
                                    for(var x = 0; x < Object.keys(data.caracteristicasInternas).length; x++){
                                            res1+= '<li><i class="jfont"></i>'+data.caracteristicasInternas[x].Descripcion+'</li>';
                                            break;
                                        }
                                }   
                $("#details-1").append(res);
                $("#details-2").append(res1);
                
                latitud = data.latitud;
                longitud = data.longitud;
                
                initMap(latitud,longitud);
            },
            error: function(data) {
                console.log("Fail")
            }
        });
        
        function initMap(latitud,longitud) {
            var uluru = {lat: parseFloat(latitud), lng:parseFloat(longitud)};
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 17,
                center: uluru
            });
            var marker = new google.maps.Marker({
                position: uluru,
                map: map
            });
        }
        
    </script>

    <!-- template scripts -->
    <script type="text/javascript" src="js/apartment.js"></script>

</body>

<!-- Mirrored from apartment-html.chart.civ.pl/agency-details-right-sidebar.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 21 Dec 2017 04:40:10 GMT -->

</html>