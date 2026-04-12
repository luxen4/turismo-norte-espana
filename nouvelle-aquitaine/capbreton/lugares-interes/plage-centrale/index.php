<?php  
$localidad = 'Capbreton';     
$localidad_minuscula = 'capbreton'; 
$lugar_minuscula = 'plage-centrale-capbreton';
$region = 'Nouvelle-Aquitaine';  
$region_minuscula = strtolower(str_replace(' ', '-', $region));   
$country = 'Francia';    
$country_minuscula = strtolower(str_replace(' ', '-', $country)); 
?>

<?php define('TITLE', "Plage Centrale en Capbreton – Playa Urbana y Centro del Surf en la Costa Vasca Francesa 2025"); ?>
<?php define('DESCRIPTION', "Descubre la Plage Centrale de Capbreton: arena fina, ambiente animado, surf y actividades frente al mar en el corazón de la ciudad."); ?>
<?php define('COLOR_PAGE', "sky"); ?>
<?php define('LUGAR', "Plage Centrale"); ?>
<?php define('LUGAR_MINUSCULA', strtolower(str_replace(' ', '-', LUGAR))) ?>
<?php define('KEYWORDS_CONTENT', 'Plage Centrale, Capbreton, playa urbana, surf, actividades, costa atlántica, País Vasco Francés') ?>

<?php require $_SERVER['DOCUMENT_ROOT'] . "/turismo-norte-espana/_html/lugares-interes/variables-generico.php"; ?>
<?php require PATH_RAIZ  . "/_html/lugares-interes/index-generico3.php"; ?>
