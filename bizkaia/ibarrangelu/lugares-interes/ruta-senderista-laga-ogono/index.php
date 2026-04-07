<?php  
$localidad = 'Ibarrangelu';     
$localidad_minuscula = 'ibarrangelu'; 
$lugar_minuscula = 'ruta-senderista-laga-ogono';

$region = 'Bizkaia';    
$region_minuscula = strtolower(str_replace(' ', '-', $region));   

$country = 'España';       
$country_minuscula = strtolower(str_replace(' ', '-', $country)); 
?>

<?php define('TITLE', "Ruta Senderista Laga - Ogoño en Ibarrangelu – Turismo y Naturaleza en Bizkaia 2025"); ?>
<?php define('DESCRIPTION', "Descubre la ruta senderista que une la Playa de Laga con el Cabo Ogoño en Ibarrangelu: un recorrido espectacular dentro de la Reserva de Urdaibai, con vistas al Cantábrico, acantilados y naturaleza en estado puro."); ?>
<?php define('COLOR_PAGE', "sky"); ?>
<?php define('LUGAR', "Ruta Senderista Laga - Ogoño"); ?>
<?php define('LUGAR_MINUSCULA', 'ruta-senderista-laga-ogono') ?>
<?php define('KEYWORDS_CONTENT', 'Ruta Laga Ogoño, senderismo Ibarrangelu, Cabo Ogoño, Playa de Laga, Bizkaia, turismo País Vasco, costa vasca, reserva de Urdaibai, naturaleza, rutas de montaña') ?>

<?php require $_SERVER['DOCUMENT_ROOT'] . "/turismo-norte-espana/localidades/carga-variables-generico-lugares-interes.php"; ?>
<?php require PATH_RAIZ  . "/_estructura/semantica/page-playa-generico.php"; ?>  
