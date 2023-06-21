<?php

function URL()
{
    $protocol = empty($_SERVER['HTTPS']) ? 'http://' : 'https://';
    $domain   = $_SERVER['HTTP_HOST'];
    $root     = str_replace('/index.php', '', $_SERVER['SCRIPT_NAME']) . "/";
    $url      = $protocol . $domain . $root;
    unset($protocol, $domain, $root);
    return $url;
}

define('URL', URL());

define('BASE_URL', 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER["REQUEST_URI"]);

define('HOST', 'localhost');
define('BD', 'SCA');
define('USER', 'postgres');
define('PASSWORD', '26142326');
define('PORT', '5432');
define('CHARSET', 'utf8mb4');

//--------------Direcciones--------------------

define('call', 'views/public/');
define('img', 'assets/images/');
define('modal', 'views/public/modal/');

//--------------TIEMPO--------------------

$hora = date('h:i A');

$dias = ["Domingo", "Lunes", "Martes", "Miercoles", "Jueves", "Viernes", "Sábado"];

$meses = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"];

$fecha_corta = date('d-m-Y');

$fecha_media = date('d') . " de " . $meses[date('n') - 1] . " del " . date('Y');

$fecha_larga = $dias[date('w')] . " , " . date('d') . " de " . $meses[date('n') - 1] . " del " . date('Y');

$fecha     = $fecha_corta;
$fecha_sql = explode("-", $fecha);
$fecha     = $fecha_sql[0] . "/" . $fecha_sql[1] . "/" . $fecha_sql[2];
