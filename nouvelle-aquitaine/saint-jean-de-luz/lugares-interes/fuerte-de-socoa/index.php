<?php  
$localidad = 'Saint-Jean-de-Luz';     
$localidad_minuscula = 'saint-jean-de-luz'; 
$lugar_minuscula = 'fuerte-de-socoa';
$region = 'Nouvelle-Aquitaine';  
$region_minuscula = strtolower(str_replace(' ', '-', $region));   
$country = 'Francia';    
$country_minuscula = strtolower(str_replace(' ', '-', $country)); 
?>

<?php define('TITLE', "Fuerte de Socoa en Saint-Jean-de-Luz – Historia y Cultura del País Vasco Francés 2025"); ?>
<?php define('DESCRIPTION', "Visita el Fuerte de Socoa en Saint-Jean-de-Luz: una fortificación costera histórica con vistas espectaculares a la bahía y legado defensivo del País Vasco Francés."); ?>
<?php define('COLOR_PAGE', "sky"); ?>
<?php define('LUGAR', "Fuerte de Socoa Saint Jean de Luz"); ?>
<?php define('LUGAR_MINUSCULA', strtolower(str_replace(' ', '-', LUGAR))) ?>
<?php define('KEYWORDS_CONTENT', 'Fuerte de Socoa, Saint-Jean-de-Luz, fortificación, historia, patrimonio, costa atlántica, País Vasco Francés') ?>

<?php require $_SERVER['DOCUMENT_ROOT'] . "/turismo-norte-espana/localidades/carga-variables-generico-lugares-interes.php"; ?>
<?php require PATH_RAIZ  . "/_estructura/semantica/page-playa-generico.php"; ?>
