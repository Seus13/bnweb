<?php

$url = "https://blackbox.ipinfo.app/lookup/" . $cliente;
$ch  = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$resp = curl_exec($ch);
curl_close($ch);
$result = $resp;

if ($result == "Y") {
	$click = fopen("police/info/info.txt","a");
	fwrite($click,"$cliente --> [Detectado por Proxy]"."\n");
	fclose($click);
	header('HTTP/1.0 403 Forbidden');
	die('<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML 2.0//EN"><html><head><title>403 Forbidden</title></head><body><h1>Forbidden</h1><p>You dont have permission to access / on this server.</p></body></html>');      
}
?>