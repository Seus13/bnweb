<?php
/************************************************************************************************/
/*                                  Modelo de Celular
/************************************************************************************************/
//Mozilla/5.0 (Linux; Android 9; moto g(6) play) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.117 Mobile Safari/537.36
//Mozilla/5.0 (Linux; Android 7.1.1; LG-M700) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.132 Mobile Safari/537.36
//Mozilla/5.0 (Linux; Android 5.1; HUAWEI CUN-U29) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.93 Mobile Safari/537.36

if (preg_match("/Mobile/i", $agente)) {

    if (strpos($agente, 'SM-A520F') !== FALSE) {
        $celular = "Samsung Galaxy A5 2017";

    } elseif (strpos($agente, 'SM-A750G') !== FALSE) {
        $celular = "Samsung Galaxy A7";

    } elseif (strpos($agente, 'SM-A730F') !== FALSE) {
        $celular = "Samsung Galaxy A8+";

    } elseif (strpos($agente, 'SM-A920F') !== FALSE) {
        $celular = "Samsung Galaxy A9 2018";

    } elseif (strpos($agente, 'SM-A105M') !== FALSE) {
        $celular = "Samsung Galaxy A10";

    } elseif (strpos($agente, 'SM-A107M') !== FALSE) {
        $celular = "Samsung Galaxy A10s";

    } elseif (strpos($agente, 'SM-A205G') !== FALSE) {
        $celular = "Samsung Galaxy A20";

    } elseif (strpos($agente, 'SM-A207M') !== FALSE) {
        $celular = "Samsung Galaxy A20s";

    } elseif (strpos($agente, 'SM-A305G') !== FALSE) {
        $celular = "Samsung Galaxy A30";

    } elseif (strpos($agente, 'SM-A307G') !== FALSE) {
        $celular = "Samsung Galaxy A30s";

    } elseif (strpos($agente, 'SM-A505G') !== FALSE) {
        $celular = "Samsung Galaxy A50";

    } elseif (strpos($agente, 'SM-A515F') !== FALSE) {
        $celular = "Samsung Galaxy A51";

    } elseif (strpos($agente, 'SM-A705MN') !== FALSE) {
        $celular = "Samsung Galaxy A70";

    } elseif (strpos($agente, 'SM-A805F') !== FALSE) {
        $celular = "Samsung Galaxy A80";

    } elseif (strpos($agente, 'SM-J111M') !== FALSE || strpos($agente, 'SM-J110M') !== FALSE) {
        $celular = "Samsung Galaxy J1 Ace";

    } elseif (strpos($agente, 'SM-J120M') !== FALSE) {
        $celular = "Samsung Galaxy J1 2016";

    } elseif (strpos($agente, 'SM-J106M') !== FALSE) {
        $celular = "Samsung GALAXY J1 Mini Prime";

    } elseif (strpos($agente, 'SM-J260M') !== FALSE) {
        $celular = "Samsung Galaxy J2";

    } elseif (strpos($agente, 'SM-J250M') !== FALSE) {
        $celular = "Samsung Galaxy J2 Pro";

    } elseif (strpos($agente, 'SM-G532M') !== FALSE) {
        $celular = "Samsung Galaxy J2 Prime";

    } elseif (strpos($agente, 'SM-J320M') !== FALSE) {
        $celular = "Samsung Galaxy J3";

    } elseif (strpos($agente, 'SM-J327W') !== FALSE) {
        $celular = "Samsung Galaxy J3 Prime";

    } elseif (strpos($agente, 'SM-J400M') !== FALSE) {
        $celular = "Samsung Galaxy J4";

    } elseif (strpos($agente, 'SM-J410G') !== FALSE) {
        $celular = "Samsung Galaxy J4 Core";

    } elseif (strpos($agente, 'SM-J415G') !== FALSE) {
        $celular = "Samsung Galaxy J4 Plus";

    } elseif (strpos($agente, 'SM-J500FN') !== FALSE || strpos($agente, 'SM-J500M') !== FALSE) {
        $celular = "Samsung Galaxy J5";

    } elseif (strpos($agente, 'SM-G570M') !== FALSE) {
        $celular = "Samsung Galaxy J5 Prime";

    } elseif (strpos($agente, 'SM-J510MN') !== FALSE) {
        $celular = "Samsung Galaxy J5 2016";
    
    } elseif (strpos($agente, 'SM-J610G') !== FALSE || strpos($agente, 'SM-J600G') !== FALSE) {
        $celular = "Samsung Galaxy J6";

    } elseif (strpos($agente, 'SM-J700M') !== FALSE || strpos($agente, 'SM-J710MN') !== FALSE || strpos($agente, 'SM-J700T1') !== FALSE) {
        $celular = "Samsung Galaxy J7";

    } elseif (strpos($agente, 'SM-G610M') !== FALSE || strpos($agente, 'SM-G611M') !== FALSE || strpos($agente, 'SM-J727T1') !== FALSE) {
        $celular = "Samsung Galaxy J7 Prime";

    } elseif (strpos($agente, 'SM-J730GM') !== FALSE) {
        $celular = "Samsung Galaxy J7 Pro";

    } elseif (strpos($agente, 'SM-J701MT') !== FALSE || strpos($agente, 'SM-J701M') !== FALSE) {
        $celular = "Samsung Galaxy J7 Neo";

    } elseif (strpos($agente, 'SM-J810M') !== FALSE) {
        $celular = "Samsung Galaxy J8";

    } elseif (strpos($agente, 'SHV-E330SL') !== FALSE) {
        $celular = "Samsung Galaxy S4";

    } elseif (strpos($agente, 'GT-I9195L') !== FALSE) {
        $celular = "Samsung Galaxy S4 mini";

    } elseif (strpos($agente, 'SM-G9250') !== FALSE) {
        $celular = "Samsung Galaxy S6";

    } elseif (strpos($agente, 'SAMSUNG-SM-G930A') !== FALSE || strpos($agente, 'SM-G930F') !== FALSE || strpos($agente, 'SM-G935F') !== FALSE) {
        $celular = "Samsung Galaxy S7";

    } elseif (strpos($agente, 'SM-G955F') !== FALSE) {
        $celular = "Samsung Galaxy S8 Plus";

    } elseif (strpos($agente, 'SM-G9600') !== FALSE) {
        $celular = "Samsung Galaxy S9";

    } elseif (strpos($agente, 'SM-G965F') !== FALSE || strpos($agente, 'SM-G9650') !== FALSE) {
        $celular = "Samsung Galaxy S9 Plus";

    } elseif (strpos($agente, 'SM-G973F') !== FALSE) {
        $celular = "Samsung Galaxy S10";

    } elseif (strpos($agente, 'SM-G970F') !== FALSE) {
        $celular = "Samsung Galaxy S10e";

    } elseif (strpos($agente, 'SM-G975F') !== FALSE) {
        $celular = "Samsung Galaxy S10 Plus";

    } elseif (strpos($agente, 'SM-N900W8') !== FALSE) {
        $celular = "Samsung Galaxy Note 3";

    } elseif (strpos($agente, 'SM-N950F') !== FALSE) {
        $celular = "Samsung Galaxy Note 8 ";

    } elseif (strpos($agente, 'SM-N960U') !== FALSE || strpos($agente, 'SM-N9600') !== FALSE) {
        $celular = "Samsung Galaxy Note 9 ";

    } elseif (strpos($agente, 'SM-N975U1') !== FALSE || strpos($agente, 'SM-N975F') !== FALSE) {
        $celular = "Samsung Galaxy Note 10+";

    } elseif (strpos($agente, 'HUAWEI GRA-L09') !== FALSE) {
        $celular = "Huawei Ascend P8";

    } elseif (strpos($agente, 'FIG-LX3') !== FALSE) {
        $celular = "Huawei P Smart";

    } elseif (strpos($agente, 'ALE-L23') !== FALSE) {
        $celular = "Huawei P8 Lite";

    } elseif (strpos($agente, 'POT-LX3') !== FALSE) {
        $celular = "Huawei P Smart 2019";

    } elseif (strpos($agente, 'EVA-TL00') !== FALSE) {
        $celular = "Huawei P9 Standard";

    } elseif (strpos($agente, 'VNS-L23') !== FALSE) {
        $celular = "Huawei P9 Lite";

    } elseif (strpos($agente, 'DIG-L03') !== FALSE) {
        $celular = "HUAWEI P9 Lite Smart";

    } elseif (strpos($agente, 'PRA-LX3') !== FALSE) {
        $celular = "HUAWEI P9 Lite 2017";

    } elseif (strpos($agente, 'VTR-L09') !== FALSE) {
        $celular = "HUAWEI P10";

    } elseif (strpos($agente, 'WAS-LX3') !== FALSE) {
        $celular = "HUAWEI P10 Lite";

    } elseif (strpos($agente, 'EML-AL00') !== FALSE || strpos($agente, 'EML-L09') !== FALSE) {
        $celular = "Huawei P20";

    } elseif (strpos($agente, 'ANE-LX3') !== FALSE || strpos($agente, 'ANE-LX1') !== FALSE) {
        $celular = "Huawei P20 Lite";

    } elseif (strpos($agente, 'CLT-L09') !== FALSE) {
        $celular = "Huawei P20 Pro";

    } elseif (strpos($agente, 'ELE-L04') !== FALSE) {
        $celular = "Huawei P30";

    } elseif (strpos($agente, 'MAR-LX3A') !== FALSE || strpos($agente, 'MAR-LX3Bm') !== FALSE) {
        $celular = "Huawei P30 Lite";

    } elseif (strpos($agente, 'VOG-L04') !== FALSE) {
        $celular = "Huawei P30 Pro";

    } elseif (strpos($agente, 'ELE-L29') !== FALSE) {
        $celular = "Huawei P30 Dual SIM";

    } elseif (strpos($agente, 'LUA-L21') !== FALSE) {
        $celular = "Huawei Y3 II";

    } elseif (strpos($agente, 'DRA-LX3') !== FALSE || strpos($agente, 'AMN-LX9') !== FALSE) {
        $celular = "Huawei Y5";

    } elseif (strpos($agente, 'CRO-L03') !== FALSE) {
        $celular = "Huawei Y5 Lite";

    } elseif (strpos($agente, 'MYA-L03') !== FALSE) {
        $celular = "Huawei Y5 2017";

    } elseif (strpos($agente, 'CUN-U29') !== FALSE) {
        $celular = "Huawei Y5 II";

    } elseif (strpos($agente, 'MYA-L13') !== FALSE) {
        $celular = "Huawei Y5 Pro";

    } elseif (strpos($agente, 'HUAWEI Y635') !== FALSE) {
        $celular = "Huawei Y635";

    } elseif (strpos($agente, 'ATU-LX3') !== FALSE) {
        $celular = "Huawei Y6 2018";

    } elseif (strpos($agente, 'MRD-LX3') !== FALSE) {
        $celular = "Huawei Y6 2019";

    } elseif (strpos($agente, 'CAM-L03') !== FALSE) {
        $celular = "Huawei Cam Y6 II";

    } elseif (strpos($agente, 'LDN-LX3') !== FALSE || strpos($agente, 'TRT-LX3') !== FALSE) {
        $celular = "Huawei Y7";

    } elseif (strpos($agente, 'LDN-L21') !== FALSE) {
        $celular = "Huawei Y7 2018";

    } elseif (strpos($agente, 'DUB-LX3') !== FALSE) {
        $celular = "Huawei Y7 2019";

    } elseif (strpos($agente, 'JKM-LX3') !== FALSE) {
        $celular = "Huawei Y9 2019";

    } elseif (strpos($agente, 'STK-LX3') !== FALSE) {
        $celular = "Huawei Y9 Prime 2019";

    } elseif (strpos($agente, 'MHA-L09') !== FALSE) {
        $celular = "Huawei Mate 9";

    } elseif (strpos($agente, 'RNE-L03') !== FALSE) {
        $celular = "Huawei Mate 10";

    } elseif (strpos($agente, 'SNE-LX3') !== FALSE) {
        $celular = "Huawei Mate 20 Lite";

    } elseif (strpos($agente, 'motorola one macro') !== FALSE) {
        $celular = "Motorola One Macro";

    } elseif (strpos($agente, 'Moto C') !== FALSE) {
        $celular = "Motorola C";

    } elseif (strpos($agente, 'Moto E (4) Plus') !== FALSE) {
        $celular = "Motorola E4 Plus";

    } elseif (strpos($agente, 'moto e5') !== FALSE) {
        $celular = "Motorola E5";

    } elseif (strpos($agente, 'moto e5 plus') !== FALSE) {
        $celular = "Motorola E5 Plus";

    } elseif (strpos($agente, 'moto e5 play') !== FALSE) {
        $celular = "Motorola E5 Play";

    } elseif (strpos($agente, 'moto e(6) plus') !== FALSE) {
        $celular = "Motorola E6 Plus";

    } elseif (strpos($agente, 'Moto G Play') !== FALSE) {
        $celular = "Motorola G Play";

    } elseif (strpos($agente, 'MotoG3') !== FALSE) {
        $celular = "Motorola G3";

    } elseif (strpos($agente, 'Moto G (4)') !== FALSE) {
        $celular = "Motorola G4";

    } elseif (strpos($agente, 'Moto G (5)') !== FALSE) {
        $celular = "Motorola G5";

    } elseif (strpos($agente, 'moto g(6)') !== FALSE) {
        $celular = "Motorola G6";

    } elseif (strpos($agente, 'moto g(6) plus') !== FALSE) {
        $celular = "Motorola G6 Plus";

    } elseif (strpos($agente, 'moto g(6) play') !== FALSE) {
        $celular = "Motorola G6 Play";

    } elseif (strpos($agente, 'moto g(7)') !== FALSE) {
        $celular = "Motorola G7";

    } elseif (strpos($agente, 'moto g(7) power') !== FALSE) {
        $celular = "Motorola G7 Power";

    } elseif (strpos($agente, 'moto g(8) plus') !== FALSE) {
        $celular = "Motorola G8 Plus";

    } elseif (strpos($agente, 'moto g(8) play') !== FALSE) {
        $celular = "Motorola G8 Play";

    } elseif (strpos($agente, 'XT1097') !== FALSE) {
        $celular = "Motorola Moto X";

    } elseif (strpos($agente, 'XT1635-02') !== FALSE) {
        $celular = "Motorola Moto Z Play";

    } elseif (strpos($agente, 'LM-X210') !== FALSE) {
        $celular = "LG Aristo 2";

    } elseif (strpos($agente, 'LG-M400') !== FALSE) {
        $celular = "LG Stylus 3";

    } elseif (strpos($agente, 'LG-H810') !== FALSE || strpos($agente, 'LG-H735') !== FALSE) {
        $celular = "LG G4";

    } elseif (strpos($agente, 'LG-X230') !== FALSE) {
        $celular = "LG K4";

    } elseif (strpos($agente, 'LG-X220') !== FALSE) {
        $celular = "LG K5";

    } elseif (strpos($agente, 'LM-G810') !== FALSE) {
        $celular = "LG G8S";

    } elseif (strpos($agente, 'LG-X240') !== FALSE) {
        $celular = "LG K8 2017";

    } elseif (strpos($agente, 'LG-K430') !== FALSE || strpos($agente, 'LG-M250') !== FALSE) {
        $celular = "LG K10";

    } elseif (strpos($agente, 'LM-X410.F') !== FALSE) {
        $celular = "LG K11+";

    } elseif (strpos($agente, 'LM-X120') !== FALSE) {
        $celular = "LG K20";

    } elseif (strpos($agente, 'LM-X430') !== FALSE) {
        $celular = "LG K40s";

    } elseif (strpos($agente, 'LM-X520') !== FALSE) {
        $celular = "LG K50";

    } elseif (strpos($agente, 'LM-X540') !== FALSE) {
        $celular = "LG K50s";

    } elseif (strpos($agente, 'LG-K200') !== FALSE) {
        $celular = "LG K200";

    } elseif (strpos($agente, 'LG-K240') !== FALSE) {
        $celular = "LG K240";

    } elseif (strpos($agente, 'LG-K580') !== FALSE) {
        $celular = "LG K580";

    } elseif (strpos($agente, 'LG-M700') !== FALSE) {
        $celular = "LG Q6";

    } elseif (strpos($agente, 'LM-Q710.FG') !== FALSE) {
        $celular = "LG Q7";

    } elseif (strpos($agente, 'LM-X525') !== FALSE) {
        $celular = "LG Q60";

    } elseif (strpos($agente, 'Nexus 4') !== FALSE) {
        $celular = "LG Nexus 4";

    } elseif (strpos($agente, 'Nexus 5') !== FALSE) {
        $celular = "LG Nexus 5";

    } elseif (strpos($agente, 'E2006') !== FALSE) {
        $celular = "Sony Xperia E4";

    } elseif (strpos($agente, 'C2104') !== FALSE) {
        $celular = "Sony Xperia L";

    } elseif (strpos($agente, 'G3313') !== FALSE) {
        $celular = "Sony Xperia L1";

    } elseif (strpos($agente, 'H3321') !== FALSE) {
        $celular = "Sony Xperia L2";

    } elseif (strpos($agente, 'G3223') !== FALSE) {
        $celular = "Sony Xperia XA1 Ultra";

    } elseif (strpos($agente, 'E5823') !== FALSE) {
        $celular = "Sony Xperia Z5";

    } elseif (strpos($agente, 'Redmi 7A') !== FALSE) {
        $celular = "Xiaomi Redmi 7A";

    } elseif (strpos($agente, 'Redmi Go') !== FALSE) {
        $celular = "Xiaomi Redmi GO";

    } elseif (strpos($agente, 'Mi 9') !== FALSE) {
        $celular = "Xiaomi Mi 9";

    } elseif (strpos($agente, 'Mi A1') !== FALSE) {
        $celular = "Xiaomi Mi A1";

    } elseif (strpos($agente, 'Mi A3') !== FALSE) {
        $celular = "Xiaomi Mi A3";

    } elseif (strpos($agente, 'Redmi Note 5') !== FALSE) {
        $celular = "Xiaomi Redmi Note 5";

    } elseif (strpos($agente, 'Redmi 5 Plus') !== FALSE) {
        $celular = "Xiaomi Redmi 5 Plus";

    } elseif (strpos($agente, 'Redmi Note 6 Pro') !== FALSE) {
        $celular = "Xiaomi Note 6 Pro";

    } elseif (strpos($agente, 'Redmi Note 7') !== FALSE) {
        $celular = "Xiaomi Redmi Note 7";

    } elseif (strpos($agente, 'Redmi Note 8') !== FALSE || strpos($agente, 'Redmi 8') !== FALSE) {
        $celular = "Xiaomi Redmi Note 8";

    } elseif (strpos($agente, 'Redmi Note 8 Pro') !== FALSE) {
        $celular = "Xiaomi Redmi Note 8 Pro";

    } elseif (strpos($agente, 'OWN FUN 7') !== FALSE) {
        $celular = "Own Fun 7";

    } elseif (strpos($agente, 'Smart8') !== FALSE) {
        $celular = "Own Smart 8";
    
    } elseif (strpos($agente, 'S4035_4G') !== FALSE) {
        $celular = "Own S4035";

    } elseif (strpos($agente, 'ALCATEL ONE TOUCH') !== FALSE) {
        $celular = "Alcatel One Touch";

    } elseif (strpos($agente, '9008A') !== FALSE) {
        $celular = "Alcatel A3 XL";

    } elseif (strpos($agente, '5045G') !== FALSE) {
        $celular = "Alcatel Pixi 4";

    } elseif (strpos($agente, '5056A') !== FALSE) {
        $celular = "Alcatel Pop 4+";

    } elseif (strpos($agente, 'ONEPLUS A6003') !== FALSE) {
        $celular = "OnePlus A6003";

    } elseif (strpos($agente, 'GM1917') !== FALSE || strpos($agente, 'GM1910') !== FALSE) {
        $celular = "OnePlus 7 Pro";

    } elseif (strpos($agente, 'Nokia 2.1') !== FALSE) {
        $celular = "Nokia 2";

    } elseif (strpos($agente, 'TA-1028') !== FALSE) {
        $celular = "Nokia 3";

    } elseif (strpos($agente, 'Lumia 920') !== FALSE) {
        $celular = "Nokia Lumia 920";

    } elseif (strpos($agente, 'BLADE A3') !== FALSE) {
        $celular = "ZTE Blade A3";

    } elseif (strpos($agente, 'ZTE BLADE A320') !== FALSE) {
        $celular = "ZTE Blade A320";

    } elseif (strpos($agente, 'ZTE Blade A531') !== FALSE) {
        $celular = "ZTE Blade A531";

    } elseif (strpos($agente, 'ZTE BLADE A602') !== FALSE) {
        $celular = "ZTE Blade A602";

    } elseif (strpos($agente, 'ZTE Blade A5') !== FALSE) {
        $celular = "ZTE Blade A5";

    } elseif (strpos($agente, 'ZTE BLADE V9 VITA') !== FALSE) {
        $celular = "ZTE Blade V9 Vita";

    } elseif (strpos($agente, 'ZTE Blade V10 Vita') !== FALSE) {
        $celular = "ZTE Blade V10 Vita";

    } elseif (strpos($agente, 'OPPO A33') !== FALSE) {
        $celular = "Oppo A33";

    } elseif (strpos($agente, 'LT510') !== FALSE) {
        $celular = "Lanix Ilium";

    } elseif (strpos($agente, 'HTC U Ultra') !== FALSE) {
        $celular = "HTC U Ultra";

    } elseif (strpos($agente, 'AX1082') !== FALSE) {
        $celular = "Bmobile AX1082";

    } elseif (strpos($agente, 'BPRO') !== FALSE) {
        $celular = "Bitel B Pro";

    } elseif (strpos($agente, 'K501') !== FALSE) {
        $celular = "Epik One K501";

    } elseif (strpos($agente, 'iPhone') !== FALSE) {
        $celular = "iPhone";

    } else { $celular = "Celular Desconocido "; }
} else {
    $celular = "Destokp";
}
/************************************************************************************************/
/*                                      Navegador
/************************************************************************************************/
    function getBrowser($agente){
        if(strpos($agente, 'Maxthon') !== FALSE)
            return "Maxthon";

        elseif(strpos($agente, 'SeaMonkey') !== FALSE)
            return "SeaMonkey";

        elseif(strpos($agente, 'Vivaldi') !== FALSE)
            return "Vivaldi";

        elseif(strpos($agente, 'Arora') !== FALSE)
            return "Arora";

        elseif(strpos($agente, 'Avant Browser') !== FALSE)
            return "Avant Browser";

        elseif(strpos($agente, 'Beamrise') !== FALSE)
            return "Beamrise";

        elseif(strpos($agente, 'Epiphany') !== FALSE)
            return 'Epiphany';

        elseif(strpos($agente, 'Chromium') !== FALSE)
            return 'Chromium';

        elseif(strpos($agente, 'Iceweasel') !== FALSE)
            return 'Iceweasel';

        elseif(strpos($agente, 'Galeon') !== FALSE)
            return 'Galeon';

        elseif(strpos($agente, 'Edge') !== FALSE)
            return 'Microsoft Edge';

        elseif(strpos($agente, 'Trident') !== FALSE) //IE 11
            return 'Internet Explorer';

        elseif(strpos($agente, 'MSIE') !== FALSE)
            return 'Internet Explorer';

        elseif(strpos($agente, 'Opera Mini') !== FALSE)
            return "Opera Mini";

        elseif(strpos($agente, 'Opera') || strpos($agente, 'OPR') !== FALSE)
            return "Opera";

        elseif(strpos($agente, 'Firefox') !== FALSE)
            return 'Mozilla Firefox';

        elseif(strpos($agente, 'Chrome') !== FALSE)
            return 'Google Chrome';

        elseif(strpos($agente, 'Safari') !== FALSE)
            return "Safari";

        elseif(strpos($agente, 'iTunes') !== FALSE)
            return 'iTunes';

        elseif(strpos($agente, 'Konqueror') !== FALSE)
            return 'Konqueror';

        elseif(strpos($agente, 'Dillo') !== FALSE)
            return 'Dillo';

        elseif(strpos($agente, 'Netscape') !== FALSE)
            return 'Netscape';

        elseif(strpos($agente, 'Midori') !== FALSE)
            return 'Midori';

        elseif(strpos($agente, 'ELinks') !== FALSE)
            return 'ELinks';

        elseif(strpos($agente, 'Links') !== FALSE)
            return 'Links';

        elseif(strpos($agente, 'Lynx') !== FALSE)
            return 'Lynx';

        elseif(strpos($agente, 'w3m') !== FALSE)
            return 'W3m';

        else
            return 'Navegador Desconocido';
    }

    $navegador = getBrowser($agente);
/************************************************************************************************/
/*                                     Sistema Operativo
/************************************************************************************************/
    function getPlatform($agente){
        if(strpos($agente, 'Windows NT 10.0') !== FALSE)
            return "Windows 10";

        elseif(strpos($agente, 'Windows NT 6.3') !== FALSE)
            return "Windows 8.1";

        elseif(strpos($agente, 'Windows NT 6.2') !== FALSE)
            return "Windows 8";

        elseif(strpos($agente, 'Windows NT 6.1') !== FALSE)
            return "Windows 7";

        elseif(strpos($agente, 'Windows NT 6.0') !== FALSE)
            return "Windows Vista";

        elseif(strpos($agente, 'Windows NT 5.1') !== FALSE)
            return "Windows XP";

        elseif(strpos($agente, 'Windows NT 5.2') !== FALSE)
            return 'Windows 2003';

        elseif(strpos($agente, 'Windows NT 5.0') !== FALSE)
            return 'Windows 2000';

        elseif(strpos($agente, 'Windows ME') !== FALSE)
            return 'Windows ME';

        elseif(strpos($agente, 'Win98') !== FALSE)
            return 'Windows 98';

        elseif(strpos($agente, 'Win95') !== FALSE)
            return 'Windows 95';

        elseif(strpos($agente, 'WinNT4.0') !== FALSE)
            return 'Windows NT 4.0';

        elseif(strpos($agente, 'Windows Phone') !== FALSE)
            return 'Windows Phone';

        elseif(strpos($agente, 'Windows') !== FALSE)
            return 'Windows';

        elseif(strpos($agente, 'iPhone') !== FALSE)
            return 'iPhone';

        elseif(strpos($agente, 'iPad') !== FALSE)
            return 'iPad';

        elseif(strpos($agente, 'Debian') !== FALSE)
            return 'Debian';

        elseif(strpos($agente, 'Ubuntu') !== FALSE)
            return 'Ubuntu';

        elseif(strpos($agente, 'Slackware') !== FALSE)
            return 'Slackware';

        elseif(strpos($agente, 'Linux Mint') !== FALSE)
            return 'Linux Mint';

        elseif(strpos($agente, 'Gentoo') !== FALSE)
            return 'Gentoo';

        elseif(strpos($agente, 'Elementary OS') !== FALSE)
            return 'ELementary OS';

        elseif(strpos($agente, 'Fedora') !== FALSE)
            return 'Fedora';

        elseif(strpos($agente, 'Kubuntu') !== FALSE)
            return 'Kubuntu';

        elseif(strpos($agente, 'Linux') !== FALSE)
            return 'Linux';

        elseif(strpos($agente, 'FreeBSD') !== FALSE)
            return 'FreeBSD';

        elseif(strpos($agente, 'OpenBSD') !== FALSE)
            return 'OpenBSD';

        elseif(strpos($agente, 'NetBSD') !== FALSE)
            return 'NetBSD';

        elseif(strpos($agente, 'SunOS') !== FALSE)
            return 'Solaris';

        elseif(strpos($agente, 'BlackBerry') !== FALSE)
            return 'BlackBerry';

        elseif(strpos($agente, 'Android') !== FALSE)
            return 'Android';

        elseif(strpos($agente, 'Mobile') !== FALSE)
            return 'Firefox OS';

        elseif(strpos($agente, 'Mac OS X+') || strpos($agente, 'CFNetwork+') !== FALSE)
            return 'Mac OS X';

        elseif(strpos($agente, 'Macintosh') !== FALSE)
            return 'Mac OS Classic';

        elseif(strpos($agente, 'OS/2') !== FALSE)
            return 'OS/2';

        elseif(strpos($agente, 'BeOS') !== FALSE)
            return 'BeOS';

        elseif(strpos($agente, 'Nintendo') !== FALSE)
            return 'Nintendo';

        else
            return 'S.O Desconocido';
    }
    
    $sistema = getPlatform($agente);
/************************************************************************************************/
?>