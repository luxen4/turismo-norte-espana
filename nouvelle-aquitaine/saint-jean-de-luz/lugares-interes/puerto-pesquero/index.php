<?php  
$localidad = 'Saint-Jean-de-Luz';     
$localidad_minuscula = 'saint-jean-de-luz'; 
$lugar_minuscula = 'puerto-pesquero';
$region = 'Nouvelle-Aquitaine';  
$region_minuscula = strtolower(str_replace(' ', '-', $region));   
$country = 'Francia';    
$country_minuscula = strtolower(str_replace(' ', '-', $country)); 
?>

<?php define('TITLE', "Puerto Pesquero de Saint-Jean-de-Luz – Turismo y Cultura en País Vasco Francés 2025"); ?>
<?php define('DESCRIPTION', "Explora el puerto pesquero de Saint-Jean-de-Luz: tradición marinera, gastronomía local, vistas pintorescas y el encanto auténtico del País Vasco Francés."); ?>
<?php define('COLOR_PAGE', "sky"); ?>
<?php define('LUGAR', "Puerto Pesquero Saint Jean de Luz"); ?>
<?php define('LUGAR_MINUSCULA', strtolower(str_replace(' ', '-', LUGAR))) ?>
<?php define('KEYWORDS_CONTENT', 'Puerto Pesquero, Saint-Jean-de-Luz, pesca, tradición marinera, gastronomía, costa atlántica, País Vasco Francés') ?>

<?php require $_SERVER['DOCUMENT_ROOT'] . "/turismo-norte-espana/_html/lugares-interes/variables-generico.php"; ?>
<?php require PATH_RAIZ  . "/_html/lugares-interes/index-generico3.php"; ?>
