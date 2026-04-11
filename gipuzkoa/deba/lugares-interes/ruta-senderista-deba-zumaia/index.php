<?php  
$localidad = 'Deba';     
$localidad_minuscula = 'deba'; 
$lugar_minuscula = 'ruta-senderista-deba-zumaia';

$region = 'Gipuzkoa';  
$region_minuscula = strtolower(str_replace(' ', '-', $region));   

$country = 'España';    
$country_minuscula = strtolower(str_replace(' ', '-', $country)); 
?>

<?php define('TITLE', "Ruta Senderista Deba – Zumaia por el Flysch en 2025"); ?>
<?php define('DESCRIPTION', "La ruta senderista entre Deba y Zumaia recorre el espectacular Geoparque de la Costa Vasca, con impresionantes formaciones de Flysch, acantilados y paisajes naturales únicos, ideal para los amantes del senderismo y la naturaleza."); ?>
<?php define('COLOR_PAGE', "<?= COLOR_PAGE; ?>"); ?>
<?php define('LUGAR', "Ruta Senderista Deba – Zumaia"); ?>
<?php define('LUGAR_MINUSCULA', strtolower(str_replace(' ', '-', LUGAR))) ?>
<?php define('KEYWORDS_CONTENT', 'Ruta senderista Deba Zumaia, Flysch, Geoparque de la Costa Vasca, senderismo, acantilados, mar Cantábrico, naturaleza, Gipuzkoa, trekking, turismo activo') ?>

<?php require $_SERVER['DOCUMENT_ROOT'] . "/turismo-norte-espana/localidades/carga-variables-generico-lugares-interes.php"; ?>
<?php require PATH_RAIZ  . "/_html/lugares-interes/index-generico3.php"; ?> 
