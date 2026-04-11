<?php  
$localidad = 'Sopelana';     
$localidad_minuscula = 'sopelana'; 
$lugar_minuscula = 'playa-de-arrietara';

$region = 'Bizkaia';    
$region_minuscula = strtolower(str_replace(' ', '-', $region));   

$country = 'España';       
$country_minuscula = strtolower(str_replace(' ', '-', $country)); 
?>

<?php define('TITLE', "Playa de Arrietara en Sopelana – Surf y Naturaleza en Bizkaia 2025"); ?>
<?php define('DESCRIPTION', "Descubre la Playa de Arrietara en Sopelana: arenal ideal para surfistas y familias, con olas consistentes, entorno natural protegido y vistas al mar Cantábrico."); ?>
<?php define('COLOR_PAGE', "amber"); ?>
<?php define('LUGAR', "Playa de Arrietara"); ?>
<?php define('LUGAR_MINUSCULA', strtolower(str_replace(' ', '-', LUGAR))) ?>
<?php define('KEYWORDS_CONTENT', 'Playa de Arrietara, Sopelana, Bizkaia, surf, turismo País Vasco, costa vasca, playa familiar, olas, mar Cantábrico, naturaleza') ?>

<?php require $_SERVER['DOCUMENT_ROOT'] . "/turismo-norte-espana/localidades/carga-variables-generico-lugares-interes.php"; ?>
<?php require PATH_RAIZ  . "/_html/lugares-interes/index-generico3.php"; ?>
