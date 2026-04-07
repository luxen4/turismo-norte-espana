<?php  
$localidad = 'Muskiz';     
$localidad_minuscula = 'muskiz'; 
$lugar_minuscula = 'parque-natural-montes-triano';

$region = 'Bizkaia';    
$region_minuscula = strtolower(str_replace(' ', '-', $region));   

$country = 'España';       
$country_minuscula = strtolower(str_replace(' ', '-', $country)); 
?>

<?php define('TITLE', "Parque Natural de los Montes de Triano – Turismo y Naturaleza en Bizkaia 2025"); ?>
<?php define('DESCRIPTION', "Explora el Parque Natural de los Montes de Triano en Muskiz: un entorno de montaña con senderos, flora y fauna autóctona, ideal para caminatas, observación de aves y disfrutar de la naturaleza de Bizkaia."); ?>
<?php define('COLOR_PAGE', "green"); ?>
<?php define('LUGAR', "Parque Natural de los Montes de Triano"); ?>
<?php define('LUGAR_MINUSCULA', 'parque-natural-montes-triano') ?>
<?php define('KEYWORDS_CONTENT', 'Parque Natural Montes de Triano, Muskiz, senderismo Bizkaia, naturaleza País Vasco, rutas montaña, fauna y flora, turismo sostenible') ?>

<?php require $_SERVER['DOCUMENT_ROOT'] . "/turismo-norte-espana/localidades/carga-variables-generico-lugares-interes.php"; ?>
<?php require PATH_RAIZ  . "/_estructura/semantica/page-playa-generico.php"; ?>
