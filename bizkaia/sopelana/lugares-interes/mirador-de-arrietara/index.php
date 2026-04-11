<?php  
$localidad = 'Sopelana';     
$localidad_minuscula = 'sopelana'; 
$lugar_minuscula = 'mirador-de-arrietara';

$region = 'Bizkaia';    
$region_minuscula = strtolower(str_replace(' ', '-', $region));   

$country = 'España';       
$country_minuscula = strtolower(str_replace(' ', '-', $country)); 
?>

<?php define('TITLE', "Mirador de Arrietara en Sopelana – Vistas y Naturaleza en Bizkaia 2025"); ?>
<?php define('DESCRIPTION', "Disfruta del Mirador de Arrietara en Sopelana: panorámicas impresionantes del mar Cantábrico, la Playa de Arrietara y la costa de Bizkaia, ideal para senderismo y fotografía de naturaleza."); ?>
<?php define('COLOR_PAGE', "amber"); ?>
<?php define('LUGAR', "Mirador de Arrietara"); ?>
<?php define('LUGAR_MINUSCULA', strtolower(str_replace(' ', '-', LUGAR))) ?>
<?php define('KEYWORDS_CONTENT', 'Mirador de Arrietara, Sopelana, Bizkaia, vistas panorámicas, turismo País Vasco, costa vasca, senderismo, naturaleza, fotografía, playa de Arrietara') ?>

<?php require $_SERVER['DOCUMENT_ROOT'] . "/turismo-norte-espana/localidades/carga-variables-generico-lugares-interes.php"; ?>
<?php require PATH_RAIZ  . "/_html/lugares-interes/index-generico3.php"; ?>