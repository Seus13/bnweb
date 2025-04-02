<?php

$cliente = IPget();

function IPget() {
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

$eyez = parse_ini_file("guardian/config.ini", true);


$antibots_iprange = $eyez['antibots_iprange']; //  Antibots IP blocker
if ($antibots_iprange == 'on') {
    require_once 'guardian/protect/ip.php';
}


$anti_hn = $eyez['anti_hn']; //  Host Name blocker
if ($anti_hn == 'on') {
    require_once 'guardian/protect/hn.php';
}


$anti_proxy = $eyez['anti_proxy']; // Proxy/VPN blocker
if ($anti_proxy == 'on') {
    require_once 'guardian/protect/proxy.php';
}


$anti_isp = $eyez['anti_isp']; // ISP blocker
if ($anti_isp == 'on') {
    require_once 'guardian/protect/isp.php';
}


// $anti_ua = $eyez['anti_ua']; //  User-Agent Blocker
// if ($anti_ua == 'on') {
//     require_once 'guardian/blockUA/ua.php';
// }


// $anti_fingerprints = $eyez['anti_fingerprints']; // Fingerprints blocker
// if ($anti_fingerprints == 'on') {
//     require_once 'guardian/fp/fingprin.php';
// }
?>