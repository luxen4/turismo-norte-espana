<?php  
$localidad = 'Biarritz';     
$localidad_minuscula = 'biarritz'; 
$lugar_minuscula = 'rocher-de-la-vierge';
$region = 'Nouvelle-Aquitaine';  
$region_minuscula = strtolower(str_replace(' ', '-', $region));   
$country = 'Francia';    
$country_minuscula = strtolower(str_replace(' ', '-', $country)); 
?>

<?php define('TITLE', "Rocher de la Vierge en Biarritz – Icono y Mirador de la Costa Vasca Francesa 2025"); ?>
<?php define('DESCRIPTION', "Descubre el Rocher de la Vierge en Biarritz: un emblemático islote rocoso unido por pasarela con vistas panorámicas al océano y la historia de la ciudad."); ?>
<?php define('COLOR_PAGE', "sky"); ?>
<?php define('LUGAR', "Rocher de la Vierge Biarritz"); ?>
<?php define('LUGAR_MINUSCULA', strtolower(str_replace(' ', '-', LUGAR))) ?>
<?php define('KEYWORDS_CONTENT', 'Rocher de la Vierge, Biarritz, mirador, historia, patrimonio, costa atlántica, País Vasco Francés') ?>

<?php require $_SERVER['DOCUMENT_ROOT'] . "/turismo-norte-espana/_html/lugares-interes/variables-generico.php"; ?>
<?php require PATH_RAIZ  . "/_html/lugares-interes/index-generico3.php"; ?>
