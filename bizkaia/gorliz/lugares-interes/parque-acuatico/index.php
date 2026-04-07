<?php  
$localidad = 'Gorliz';     
$localidad_minuscula = 'gorliz'; 
$lugar_minuscula = 'parque-acuatico';

$region = 'Bizkaia';    
$region_minuscula = strtolower(str_replace(' ', '-', $region));   

$country = 'España';       
$country_minuscula = strtolower(str_replace(' ', '-', $country)); 
?>

<?php define('TITLE', "Parque Acuático de Gorliz – Diversión y Aventura en Bizkaia 2025"); ?>
<?php define('DESCRIPTION', "Vive la experiencia del Parque Acuático de Gorliz: atracciones de agua, toboganes y actividades familiares en un entorno natural de la costa de Bizkaia."); ?>
<?php define('COLOR_PAGE', "blue"); ?>
<?php define('LUGAR', "Parque Acuático de Gorliz"); ?>
<?php define('LUGAR_MINUSCULA', 'parque-acuatico') ?>
<?php define('KEYWORDS_CONTENT', 'Parque Acuático de Gorliz, parque acuático Bizkaia, ocio familiar, toboganes acuáticos, turismo Gorliz, actividades acuáticas País Vasco') ?>

<?php require $_SERVER['DOCUMENT_ROOT'] . "/turismo-norte-espana/localidades/carga-variables-generico-lugares-interes.php"; ?>
<?php require PATH_RAIZ  . "/_estructura/semantica/page-playa-generico.php"; ?>
