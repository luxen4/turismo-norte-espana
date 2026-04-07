<?php  
$localidad = 'Muskiz';     
$localidad_minuscula = 'muskiz'; 
$lugar_minuscula = 'playa-de-la-arena';

$region = 'Bizkaia';    
$region_minuscula = strtolower(str_replace(' ', '-', $region));   

$country = 'España';       
$country_minuscula = strtolower(str_replace(' ', '-', $country)); 
?>

<?php define('TITLE', "Playa de la Arena en Muskiz – Surf y Naturaleza en Bizkaia 2025"); ?>
<?php define('DESCRIPTION', "Descubre la Playa de la Arena en Muskiz: uno de los arenales más extensos de Bizkaia, con ambiente familiar, ideales olas para surfistas y un entorno natural protegido junto al río Barbadun."); ?>
<?php define('COLOR_PAGE', "amber"); ?>
<?php define('LUGAR', "Playa de la Arena"); ?>
<?php define('LUGAR_MINUSCULA', strtolower(str_replace(' ', '-', LUGAR))) ?>
<?php define('KEYWORDS_CONTENT', 'Playa de la Arena, Muskiz, Bizkaia, surf, turismo País Vasco, costa vasca, playa familiar, Barbadun, mar Cantábrico, naturaleza') ?>

<?php require $_SERVER['DOCUMENT_ROOT'] . "/turismo-norte-espana/localidades/carga-variables-generico-lugares-interes.php"; ?>
<?php require PATH_RAIZ  . "/_estructura/semantica/page-playa-generico.php"; ?>
