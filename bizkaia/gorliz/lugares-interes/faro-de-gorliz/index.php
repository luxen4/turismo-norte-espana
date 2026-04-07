<?php  
$localidad = 'Gorliz';     
$localidad_minuscula = 'gorliz'; 
$lugar_minuscula = 'faro-de-gorliz';

$region = 'Bizkaia';    
$region_minuscula = strtolower(str_replace(' ', '-', $region));   

$country = 'España';       
$country_minuscula = strtolower(str_replace(' ', '-', $country)); 
?>

<?php define('TITLE', "Faro de Gorliz – Turismo y Naturaleza en Bizkaia 2025"); ?>
<?php define('DESCRIPTION', "Descubre el Faro de Gorliz: un emblemático faro junto a la costa vizcaína, con rutas de senderismo, vistas panorámicas y entorno natural protegido."); ?>
<?php define('COLOR_PAGE', "sky"); ?>
<?php define('LUGAR', "Faro de Gorliz"); ?>
<?php define('LUGAR_MINUSCULA', strtolower(str_replace(' ', '-', LUGAR))) ?>
<?php define('KEYWORDS_CONTENT', 'Faro de Gorliz, Gorliz, Bizkaia, turismo País Vasco, costa vasca, naturaleza, faros, senderismo, paisaje costero') ?>

<?php require $_SERVER['DOCUMENT_ROOT'] . "/turismo-norte-espana/localidades/carga-variables-generico-lugares-interes.php"; ?>
<?php require PATH_RAIZ  . "/_estructura/semantica/page-playa-generico.php"; ?>

<?php /* https://www.farosdisanti.com/gorliz Para copiar*/ ?>