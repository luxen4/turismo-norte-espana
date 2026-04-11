<?php  
$localidad = 'Sopelana';     
$localidad_minuscula = 'sopelana'; 
$lugar_minuscula = 'ruta-senderista-sopelana-plentzia';

$region = 'Bizkaia';    
$region_minuscula = strtolower(str_replace(' ', '-', $region));   

$country = 'España';       
$country_minuscula = strtolower(str_replace(' ', '-', $country)); 
?>

<?php define('TITLE', "Ruta Senderista Sopelana – Plentzia en Bizkaia 2025"); ?>
<?php define('DESCRIPTION', "Explora la ruta senderista de Sopelana a Plentzia: un recorrido costero con vistas al mar Cantábrico, acantilados, playas y naturaleza, ideal para caminatas y turismo activo en Bizkaia."); ?>
<?php define('COLOR_PAGE', "amber"); ?>
<?php define('LUGAR', "Ruta Senderista Sopelana – Plentzia"); ?>
<?php define('LUGAR_MINUSCULA', strtolower(str_replace(' ', '-', LUGAR))) ?>
<?php define('KEYWORDS_CONTENT', 'Ruta senderista Sopelana Plentzia, Bizkaia, senderismo, turismo activo, costa vasca, mar Cantábrico, naturaleza, acantilados, playas, País Vasco') ?>

<?php require $_SERVER['DOCUMENT_ROOT'] . "/turismo-norte-espana/localidades/carga-variables-generico-lugares-interes.php"; ?>
<?php require PATH_RAIZ  . "/_html/lugares-interes/index-generico3.php"; ?>
