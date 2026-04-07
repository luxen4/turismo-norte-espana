<?php  
$localidad = 'Plentzia';     
$localidad_minuscula = 'plentzia'; 
$lugar_minuscula = 'puerto-deportivo-plentzia';

$region = 'Bizkaia';    
$region_minuscula = strtolower(str_replace(' ', '-', $region));   

$country = 'España';       
$country_minuscula = strtolower(str_replace(' ', '-', $country)); 
?>

<?php define('TITLE', "Puerto Deportivo de Plentzia – Navegación y Ocio en Bizkaia 2025"); ?>
<?php define('DESCRIPTION', "Descubre el Puerto Deportivo de Plentzia en Bizkaia: lugar ideal para paseos, actividades náuticas, restauración y ocio junto al mar."); ?>
<?php define('COLOR_PAGE', "blue"); ?>
<?php define('LUGAR', "Puerto Deportivo de Plentzia"); ?>
<?php define('LUGAR_MINUSCULA', strtolower(str_replace(' ', '-', LUGAR))) ?>
<?php define('KEYWORDS_CONTENT', 'Puerto Deportivo de Plentzia, Plentzia, Bizkaia, turismo País Vasco, navegación, puerto, paseo marítimo, actividades náuticas, restauración') ?>

<?php require $_SERVER['DOCUMENT_ROOT'] . "/turismo-norte-espana/localidades/carga-variables-generico-lugares-interes.php"; ?>
<?php require PATH_RAIZ  . "/_estructura/semantica/page-playa-generico.php"; ?>
