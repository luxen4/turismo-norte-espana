<?php  
$localidad = 'Saint-Jean-de-Luz';     
$localidad_minuscula = 'saint-jean-de-luz'; 
$lugar_minuscula = 'la-grande-plage';
$region = 'Nouvelle-Aquitaine';  
$region_minuscula = strtolower(str_replace(' ', '-', $region));   
$country = 'Francia';    
$country_minuscula = strtolower(str_replace(' ', '-', $country)); 
?>

<?php define('TITLE', "La Grande Plage en Saint-Jean-de-Luz – Turismo y Naturaleza en País Vasco Francés 2025"); ?>
<?php define('DESCRIPTION', "Descubre la Grande Plage en Saint-Jean-de-Luz: playa emblemática con arena dorada, ambiente familiar, deportes acuáticos y encanto del País Vasco Francés."); ?>
<?php define('COLOR_PAGE', "sky"); ?>
<?php define('LUGAR', "La Grande Plage Saint Jean de Luz"); ?>
<?php define('LUGAR_MINUSCULA', strtolower(str_replace(' ', '-', LUGAR))) ?>
<?php define('KEYWORDS_CONTENT', 'La Grande Plage, Saint-Jean-de-Luz, playas País Vasco Francés, turismo, surf, costa atlántica, naturaleza') ?>

<?php require $_SERVER['DOCUMENT_ROOT'] . "/turismo-norte-espana/_html/lugares-interes/variables-generico.php"; ?>
<?php require PATH_RAIZ  . "/_html/lugares-interes/index-generico3.php"; ?>