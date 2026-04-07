<?php  
$localidad = 'Muskiz';     
$localidad_minuscula = 'muskiz'; 
$lugar_minuscula = 'castillo-de-munatones';

$region = 'Bizkaia';  
$region_minuscula = strtolower(str_replace(' ', '-', $region));   

$country = 'España';    
$country_minuscula = strtolower(str_replace(' ', '-', $country)); 
?>

<?php define('TITLE', "Castillo de Munatones – Historia y Patrimonio en Bizkaia 2025"); ?>
<?php define('DESCRIPTION', "Descubre el Castillo de Munatones, un monumento histórico del País Vasco que refleja la tradición medieval y el pasado señorial de Bizkaia. Un lugar emblemático para conocer la historia y el patrimonio cultural de Muskiz."); ?>
<?php define('COLOR_PAGE', "rose"); ?>
<?php define('LUGAR', "Castillo de Munatones"); ?>
<?php define('LUGAR_MINUSCULA', strtolower(str_replace(' ', '-', LUGAR))) ?>
<?php define('KEYWORDS_CONTENT', 'Castillo de Munatones, Bizkaia, patrimonio histórico, torre medieval, historia de Muskiz, monumentos Bizkaia, cultura vasca, arquitectura defensiva') ?>

<?php require $_SERVER['DOCUMENT_ROOT'] . "/turismo-norte-espana/localidades/carga-variables-generico-lugares-interes.php"; ?>
<?php require PATH_RAIZ  . "/_estructura/semantica/page-playa-generico.php"; ?>
