<?php  
$localidad = 'Muskiz';     
$localidad_minuscula = 'muskiz'; 
$lugar_minuscula = 'ruta-senderista-muskiz-punta-lucero';

$region = 'Bizkaia';    
$region_minuscula = strtolower(str_replace(' ', '-', $region));   

$country = 'España';       
$country_minuscula = strtolower(str_replace(' ', '-', $country)); 
?>

<?php define('TITLE', "Ruta Senderista Muskiz - Punta Lucero – Turismo y Naturaleza en Bizkaia 2025"); ?>
<?php define('DESCRIPTION', "Descubre la ruta senderista que recorre los acantilados de Muskiz hasta Punta Lucero: un paseo espectacular con vistas al Cantábrico, naturaleza protegida y paisajes de la costa vasca."); ?>
<?php define('COLOR_PAGE', "sky"); ?>
<?php define('LUGAR', "Ruta Senderista Muskiz - Punta Lucero"); ?>
<?php define('LUGAR_MINUSCULA', 'ruta-senderista-punta-lucero') ?>
<?php define('KEYWORDS_CONTENT', 'Ruta Punta Lucero, senderismo Muskiz, acantilados Bizkaia, costa vasca, turismo País Vasco, naturaleza, caminatas, vistas al Cantábrico') ?>

<?php require $_SERVER['DOCUMENT_ROOT'] . "/turismo-norte-espana/localidades/carga-variables-generico-lugares-interes.php"; ?>
<?php require PATH_RAIZ  . "/_estructura/semantica/page-playa-generico.php"; ?>
