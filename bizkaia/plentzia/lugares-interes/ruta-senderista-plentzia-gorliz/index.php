<?php  
$localidad = 'Plentzia';     
$localidad_minuscula = 'plentzia'; 
$lugar_minuscula = 'ruta-senderista-plentzia-gorliz';

$region = 'Bizkaia';    
$region_minuscula = strtolower(str_replace(' ', '-', $region));   

$country = 'España';       
$country_minuscula = strtolower(str_replace(' ', '-', $country)); 
?>

<?php define('TITLE', "Ruta Senderista Plentzia – Gorliz en Bizkaia 2025"); ?>
<?php define('DESCRIPTION', "Descubre la ruta senderista de Plentzia a Gorliz: un paseo costero con vistas al mar Cantábrico, playas, acantilados y naturaleza, perfecto para senderismo y turismo activo en Bizkaia."); ?>
<?php define('COLOR_PAGE', "amber"); ?>
<?php define('LUGAR', "Ruta Senderista Plentzia – Gorliz"); ?>
<?php define('LUGAR_MINUSCULA', strtolower(str_replace(' ', '-', LUGAR))) ?>
<?php define('KEYWORDS_CONTENT', 'Ruta senderista Plentzia Gorliz, Bizkaia, senderismo, turismo activo, costa vasca, mar Cantábrico, naturaleza, acantilados, playas, País Vasco') ?>

<?php require $_SERVER['DOCUMENT_ROOT'] . "/turismo-norte-espana/localidades/carga-variables-generico-lugares-interes.php"; ?>
<?php require PATH_RAIZ  . "/_html/lugares-interes/index-generico3.php"; ?>
