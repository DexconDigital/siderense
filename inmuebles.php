<!DOCTYPE html>
<html lang="es">
<?php

$gs = 0;
$ti = 0;
$ci = 0;
$zo = 0;

if (isset($_GET["gs"]) && isset($_GET["ti"]) && isset($_GET["ci"]) && isset($_GET["zo"])) {
    $gs = $_GET["gs"];
    $ti = $_GET["ti"];
    $ci = $_GET["ci"];
    $zo = $_GET["zo"];
}
?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Inmuebles</title>
    <meta name="keywords" content="Sidernse, Inmobiliarias Medellin, inmobiliaria siderense" />
    <meta name="description" content="Inmobiliaria Siderense" />
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
    <!-- Font awesome styles -->
    <link rel="stylesheet" href="apartment-font/css/font-awesome.min.css">
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
                        <h1 class="second-color">Inmuebles</h1>
                        <div class="short-title-separator"></div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-light section-top-shadow no-bottom-padding">
            <div class="container" style="width:80%">
                <div class="row">
                    <div class="col-xs-12 col-md-12">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="details-title pull-left">
                                    <h3 class="title-negative-margin">Busqueda de inmuebles<span class="special-color">.</span></h3>
                                </div>
                                <div class="clearfix"></div>
                                <div class="title-separator-primary"></div>

                                <div class="row margin-top-60">
                                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 panel panel-primary">
                                        <div class="panel-heading panel-inmuebles">
                                            <div class="col-xs-12 col-sm-12">
                                                <label for="operacion">Operación</label>
                                                <select name="" class="form-control" id="operacion">
                                                </select>
                                            </div>
                                            <div class="col-xs-12 col-sm-12">
                                                <label for="inmueble">Tipo Inmueble</label>
                                                <select name="" class="form-control" id="inmueble">
                                                </select>
                                            </div>
                                            <div class="col-xs-12 col-sm-12">
                                                <label for="ciudad">Ciudad</label>
                                                <select name="" class="form-control" id="ciudad">
                                                </select>
                                            </div>
                                            <div class="col-xs-12 col-sm-12">
                                                <label for="zona">Zona</label>
                                                <select name="" class="form-control" id="zona">
                                                <option value="0">Seleccione una zona</option>
                                                </select>
                                            </div>
                                            <div class="col-xs-12 col-sm-12">
                                                <button id="search" class="button-primary pull-right">
                                                    <span>buscar</span>
                                                    <div class="button-triangle"></div>
                                                    <div class="button-triangle2"></div>
                                                    <div class="button-icon"><i class="fa fa-search"></i></div>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-8 col-lg-8" id="result">
                                            <div class="grid-offer" id="property" >
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <br>

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
    <<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDQt6lKotsu8gJXXqObXEkiNvN42jGrNCI&amp;sensor=false&amp;libraries=places"></script>
    
    <!-- plugins script -->
    <script type="text/javascript" src="js/plugins.js"></script>
    <script type="text/javascript" src="mail/validate.js"></script>
    
    <?php echo '<script>var gs = ' . $gs . '</script>'; ?> 
    <?php echo '<script>var ti = ' . $ti . '</script>'; ?> 
    <?php echo '<script>var ci = ' . $ci . '</script>'; ?> 
    <?php echo '<script>var zo = ' . $zo . '</script>'; ?>
    <script>
        if(gs ==0 && ci==0 && ti!=0 && zo==0){
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
                     console.log(data)
            var res = "";

            if (data == "Sin resultados") {
                res += '<h1 style="color:white"> No hay Inmuebles destacados </h1>';
                $(".featured-offers-container").append(res);
                return;

            } else {
                for (var i = 0; i < data.totalInmuebles ;i++) {
                        res += '<div class="col-xs-12 col-md-4">' +
                            '<div class="grid-offer" style="height: 405px;margin-bottom: 60px;">' +
                            '<div class="grid-offer-front">' +
                            '<div class="grid-offer-photo">' +
                            '<a href="detalle-inmueble.php?dt='+ data[i].Codigo_Inmueble+'">';
                        if (data[i].foto1.localeCompare("") != 0) {
                            res += '<img src="' + data[i].foto1 + '" alt="" height="270px">';
                        } else {
                            res += '<img src="images/grid-offer5.jpg" alt="" height="270px">';
                        }
                        res += '</a><div class="type-container">' +
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
                }
            }
            $("#result").html(res);

        }
            });
        }else{
            $.ajax({
                url: 'http://www.simi-api.com/ApiSimiweb/response/v21/filtroInmueble/limite/0/total/100/departamento/0/ciudad/'+ci+'/zona/'+zo+'/barrio/0/tipoInm/'+ti+'/tipOper/'+gs+'/areamin/0/areamax/0/valmin/0/valmax/0/campo/0/order/0/banios/0/alcobas/0/garajes/0',
                type: 'GET',
                cache: true,
                beforeSend: function(xhr) {
                    xhr.setRequestHeader(
                        'Authorization',
                        'Basic ' + btoa('Authorization:Q94xlnPYlac2ISgyseVDjIZGzxRcvhrtfo9D0pEf-842'));
                },
                'dataType': "json",
                success: function(data) {
                    var res = "";

                    if (data == "Sin resultados") {
                        $("#result").html('<h1> No hay Inmuebles registrados</h1>');
                        return;

                    } else {
                        for (var i = 0; i < data.totalInmuebles ;i++) {
                        res += '<div class="col-xs-12 col-md-4">' +
                            '<div class="grid-offer" style="height: 405px;margin-bottom: 60px;">' +
                            '<div class="grid-offer-front">' +
                            '<div class="grid-offer-photo">' +
                            '<a href="detalle-inmueble.php?dt='+ data[i].Codigo_Inmueble+'">';
                        if (data[i].foto1.localeCompare("") != 0) {
                            res += '<img src="' + data[i].foto1 + '" alt="" height="270px">';
                        } else {
                            res += '<img src="images/grid-offer5.jpg" alt="" height="270px">';
                        }
                        res += '</a><div class="type-container">' +
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
                }
                    }
                    $("#property").append(res);

                }

            });
        }            
    </script>

    <!-- template scripts -->
    <script type="text/javascript" src="js/apartment.js"></script>

</body>

<!-- Mirrored from apartment-html.chart.civ.pl/agency-details-right-sidebar.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 21 Dec 2017 04:40:10 GMT -->

</html>