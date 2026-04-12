<?php  
$localidad = 'Hendaia';     
$localidad_minuscula = 'hendaia'; 
$lugar_minuscula = 'castillo-abbadia';
$region = 'Nouvelle-Aquitaine';  
$region_minuscula = strtolower(str_replace(' ', '-', $region));   
$country = 'Francia';    
$country_minuscula = strtolower(str_replace(' ', '-', $country)); 
?>

<?php define('TITLE', "Castillo de Abbadia – Historia y Vistas Espectaculares en Hendaya 2025"); ?>
<?php define('DESCRIPTION', "Visita el Castillo de Abbadia en Hendaya: arquitectura neogótica, historia fascinante y vistas panorámicas sobre el mar y la costa atlántica."); ?>
<?php define('COLOR_PAGE', "gray"); ?>
<?php define('LUGAR', "Castillo Abbadia"); ?>
<?php define('LUGAR_MINUSCULA', strtolower(str_replace(' ', '-', LUGAR))) ?>
<?php define('KEYWORDS_CONTENT', 'Castillo de Abbadia, Hendaya, turismo, arquitectura, historia, costa atlántica, País Vasco Francés') ?>

<?php require $_SERVER['DOCUMENT_ROOT'] . "/turismo-norte-espana/_html/lugares-interes/variables-generico.php"; ?>
<?php require PATH_RAIZ  . "/_html/lugares-interes/index-generico3.php"; ?>
