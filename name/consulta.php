<?php
error_reporting(0);

switch ($data['dato_0']) {

	case "DNI": // DNI

		$comodin = substr($data['dato_2'], 0, 1);

		if ($comodin == "9") {
			$consulta = file_get_contents("https://api.perudevs.com/api/v1/dni/simple?document=".$data['dato_2']."&key=cGVydWRldnMucHJvZHVjdGlvbi5maXRjb2RlcnMuNjJmYTllZDU4ZGI5OTcxZGFkYmY2ZTVj");

			$data = $consulta;
			$info = json_decode($data);
			$nombres = $info->resultado->nombres;
			$ap_paterno = $info->resultado->apellido_paterno;
			$ap_materno = $info->resultado->apellido_materno;
			$nombre_completo = ucwords(strtolower($info->resultado->nombre_completo));
			$nameFomateado = ucwords(strtolower($nombres));
		} else {
			$token = 'apis-token-2041.JtDPlJHWeHqCmQdNCFTfiSji1vVAqE4X';

			$curl = curl_init();

			curl_setopt_array($curl, array(
			CURLOPT_URL => 'https://api.apis.net.pe/v1/dni?numero='.$data['dato_2'],
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_ENCODING => '',
			CURLOPT_MAXREDIRS => 2,
			CURLOPT_TIMEOUT => 0,
			CURLOPT_FOLLOWLOCATION => true,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => 'GET',
			CURLOPT_HTTPHEADER => array(
				'Referer: https://apis.net.pe/consulta-dni-api',
				'Authorization: Bearer '.$token
			),
			));

			$response = curl_exec($curl);

			curl_close($curl);
			$persona = json_decode($response);
			//var_dump($persona);
			$error = $persona->error;

			$nombres = $persona->nombres;
			$ap_paterno = $persona->apellidoPaterno;
			$ap_materno = $persona->apellidoMaterno;
			$nombre_completo = ucwords(strtolower($nombres." ".$ap_paterno." ".$ap_materno));
			$nameFomateado = ucwords(strtolower($nombres));
		}

	break;

	case "RUC": // RUC

		$token = 'apis-token-2041.JtDPlJHWeHqCmQdNCFTfiSji1vVAqE4X';

		$curl = curl_init();

		curl_setopt_array($curl, array(
		CURLOPT_URL => 'https://api.apis.net.pe/v1/ruc?numero='.$data['dato_2'],
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_ENCODING => '',
		CURLOPT_MAXREDIRS => 10,
		CURLOPT_TIMEOUT => 0,
		CURLOPT_FOLLOWLOCATION => true,
		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		CURLOPT_CUSTOMREQUEST => 'GET',
		CURLOPT_HTTPHEADER => array(
			'Referer: http://apis.net.pe/api-ruc',
			'Authorization: Bearer '.$token
		),
		));

		$response = curl_exec($curl);

		curl_close($curl);
		$empresa = json_decode($response);
		//var_dump($empresa);

		$nombre = $empresa->nombre;
		$error = $empresa->error;
		$nameFomateado = ucwords(strtolower($nombre));

	break;

	case "Cambio": // Tipo de Cambio

		date_default_timezone_set("America/Lima");
		$fecha_actual = date("Y-m-d");

		$token = 'apis-token-1.aTSI1U7KEuT-6bbbCguH-4Y8TI6KS73N';
		$fecha = $fecha_actual;

		$curl = curl_init();

		curl_setopt_array($curl, array(
		CURLOPT_URL => 'https://api.apis.net.pe/v1/tipo-cambio-sunat?fecha=' . $fecha,
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_ENCODING => '',
		CURLOPT_MAXREDIRS => 2,
		CURLOPT_TIMEOUT => 0,
		CURLOPT_FOLLOWLOCATION => true,
		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		CURLOPT_CUSTOMREQUEST => 'GET',
		CURLOPT_HTTPHEADER => array(
			'Referer: https://apis.net.pe/tipo-de-cambio-sunat-api',
			'Authorization: Bearer '.$token
		),
		));

		$response = curl_exec($curl);

		curl_close($curl);
		$tipoCambioSunat = json_decode($response);
		//var_dump($tipoCambioSunat);

		$compra = $tipoCambioSunat->compra;
		$venta = $tipoCambioSunat->venta;

	break;

	default:
    break;
}
?>