<?php
error_reporting(0);

$ip_cliente = $_GET["ip"];

if ($ip_cliente == "" || strlen($ip_cliente) < 8) {
	echo "<center style='color: green;'>Para bloquear una IP use el metodo GET con la variable ip<br><br>Ejemplo: ?ip=192.168.1.1</center>";
} else {
	bloquedHT($ip_cliente);
}


function bloquedHT($ip_cliente) {
	$file = fopen('../.htaccess', 'a+');
	$string = strval($file);
	if (!preg_match('/'.$ip_cliente.'/i', $string)):
		$gr = "deny from ".$ip_cliente."\r\n";
		fwrite($file, $gr);
	endif;
	fclose($file);

	echo "<center style='color: red;'><b>IP: </b>".$ip_cliente." <b>Bloqueada</b></center>";
}