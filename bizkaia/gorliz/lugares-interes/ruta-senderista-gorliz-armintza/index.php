<?php  
$localidad = 'Gorliz';     
$localidad_minuscula = 'gorliz'; 
$lugar_minuscula = 'ruta-senderista-gorliz-armintza';

$region = 'Bizkaia';    
$region_minuscula = strtolower(str_replace(' ', '-', $region));   

$country = 'España';       
$country_minuscula = strtolower(str_replace(' ', '-', $country)); 
?>

<?php define('TITLE', "Ruta Senderista Gorliz – Armintza – Naturaleza y Senderismo en Bizkaia 2025"); ?>
<?php define('DESCRIPTION', "Disfruta de la Ruta Senderista Gorliz – Armintza: un recorrido panorámico por la costa de Bizkaia, ideal para caminatas familiares, observación de aves y paisajes naturales."); ?>
<?php define('COLOR_PAGE', "green"); ?>
<?php define('LUGAR', "Ruta Senderista Gorliz – Armintza"); ?>
<?php define('LUGAR_MINUSCULA', 'ruta-senderista-gorliz-armintza') ?>
<?php define('KEYWORDS_CONTENT', 'Ruta Senderista Gorliz-Armintza, senderismo Bizkaia, naturaleza País Vasco, ruta costera, observación de aves, turismo Gorliz') ?>

<?php require $_SERVER['DOCUMENT_ROOT'] . "/turismo-norte-espana/localidades/carga-variables-generico-lugares-interes.php"; ?>
<?php require PATH_RAIZ  . "/_html/lugares-interes/index-generico3.php"; ?>
