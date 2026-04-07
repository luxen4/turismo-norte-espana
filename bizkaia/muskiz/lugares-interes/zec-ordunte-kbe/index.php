<?php  
$localidad = 'Muskiz';     
$localidad_minuscula = 'muskiz'; 
$lugar_minuscula = 'zec-ordunte-kbe';

$region = 'Bizkaia';    
$region_minuscula = strtolower(str_replace(' ', '-', $region));   

$country = 'España';       
$country_minuscula = strtolower(str_replace(' ', '-', $country)); 
?>

<?php define('TITLE', "ZEC Ordunte KBE – Espacio Natural Protegido en Bizkaia 2025"); ?>
<?php define('DESCRIPTION', "Descubre la ZEC Ordunte KBE en Muskiz: un espacio natural protegido con ecosistemas singulares, rutas de montaña y gran biodiversidad que forman parte de la Red Natura 2000 en Bizkaia."); ?>
<?php define('COLOR_PAGE', "green"); ?>
<?php define('LUGAR', "ZEC Ordunte KBE"); ?>
<?php define('LUGAR_MINUSCULA', 'zec-ordunte-kbe') ?>
<?php define('KEYWORDS_CONTENT', 'ZEC Ordunte KBE, Muskiz, Red Natura 2000 Bizkaia, espacio natural protegido, rutas montaña, biodiversidad Euskadi, turismo sostenible') ?>

<?php require $_SERVER['DOCUMENT_ROOT'] . "/turismo-norte-espana/localidades/carga-variables-generico-lugares-interes.php"; ?>
<?php require PATH_RAIZ  . "/_estructura/semantica/page-playa-generico.php"; ?>
