<?php  
$localidad = 'Castro-Urdiales';     
$localidad_minuscula = 'castro-urdiales'; 
$lugar_minuscula = 'playa-de-brazomar';

$region = 'Cantabria';  
$region_minuscula = strtolower(str_replace(' ', '-', $region));   

$country = 'España';    
$country_minuscula = strtolower(str_replace(' ', '-', $country)); 
?>

<?php define('TITLE', "Playa de Brazomar en Castro-Urdiales – Turismo y Naturaleza en Cantabria 2025"); ?>
<?php define('DESCRIPTION', "Descubre la Playa de Brazomar en Castro-Urdiales, Cantabria: una de las playas más populares y céntricas de la villa, ideal para familias y con todos los servicios necesarios."); ?>
<?php define('COLOR_PAGE', "sky"); ?>
<?php define('LUGAR', "Playa de Brazomar"); ?>
<?php define('LUGAR_MINUSCULA', strtolower(str_replace(' ', '-', LUGAR))) ?>
<?php define('KEYWORDS_CONTENT', 'Playa de Brazomar, Castro-Urdiales, playas Cantabria, playa urbana Castro Urdiales, turismo en Cantabria, playa familiar, servicios playa Brazomar') ?>

<?php require $_SERVER['DOCUMENT_ROOT'] . "/turismo-norte-espana/localidades/carga-variables-generico-lugares-interes.php"; ?>
<?php require PATH_RAIZ  . "/_estructura/semantica/page-playa-generico.php"; ?>
