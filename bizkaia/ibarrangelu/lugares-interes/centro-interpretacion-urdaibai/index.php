<?php  
$localidad = 'Ibarrangelu';     
$localidad_minuscula = 'ibarrangelu'; 
$lugar_minuscula = 'centro-interpretacion-urdaibai';

$region = 'Bizkaia';    
$region_minuscula = strtolower(str_replace(' ', '-', $region));   

$country = 'España';       
$country_minuscula = strtolower(str_replace(' ', '-', $country)); 
?>

<?php define('TITLE', "Centro de Interpretación de Urdaibai en Ibarrangelu – Naturaleza y Aves en Bizkaia 2025"); ?>
<?php define('DESCRIPTION', "Visita el Centro de Interpretación de Urdaibai en Ibarrangelu: un espacio único para conocer la Reserva de la Biosfera, la observación de aves migratorias y la riqueza natural del País Vasco."); ?>
<?php define('COLOR_PAGE', "green"); ?>
<?php define('LUGAR', "Centro de Interpretación de Urdaibai"); ?>
<?php define('LUGAR_MINUSCULA', 'centro-interpretacion-urdaibai') ?>
<?php define('KEYWORDS_CONTENT', 'Centro de Interpretación de Urdaibai, Bird Center, Ibarrangelu, Bizkaia, turismo naturaleza, observación de aves, reserva de la biosfera, País Vasco, ecoturismo') ?>

<?php require $_SERVER['DOCUMENT_ROOT'] . "/turismo-norte-espana/localidades/carga-variables-generico-lugares-interes.php"; ?>
<?php require PATH_RAIZ  . "/_estructura/semantica/page-playa-generico.php"; ?>
