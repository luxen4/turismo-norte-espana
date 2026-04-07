<?php  
$localidad = 'Ibarrangelu';     
$localidad_minuscula = 'ibarrangelu'; 
$lugar_minuscula = 'cabo-ogono';

$region = 'Bizkaia';    
$region_minuscula = strtolower(str_replace(' ', '-', $region));   

$country = 'España';       
$country_minuscula = strtolower(str_replace(' ', '-', $country)); 
?>

<?php define('TITLE', "Cabo Ogoño en Ibarrangelu – Turismo y Naturaleza en Bizkaia 2025"); ?>
<?php define('DESCRIPTION', "Descubre el Cabo Ogoño en Ibarrangelu: un impresionante acantilado de la Reserva de la Biosfera de Urdaibai, con vistas espectaculares sobre el mar Cantábrico y la playa de Laga, ideal para senderismo y naturaleza."); ?>
<?php define('COLOR_PAGE', "sky"); ?>
<?php define('LUGAR', "Cabo Ogoño"); ?>
<?php define('LUGAR_MINUSCULA', 'cabo-ogono') ?>
<?php define('KEYWORDS_CONTENT', 'Cabo Ogoño, Ibarrangelu, Bizkaia, turismo País Vasco, costa vasca, reserva de Urdaibai, senderismo, acantilados, mirador natural') ?>

<?php require $_SERVER['DOCUMENT_ROOT'] . "/turismo-norte-espana/localidades/carga-variables-generico-lugares-interes.php"; ?>
<?php require PATH_RAIZ  . "/_estructura/semantica/page-playa-generico.php"; ?>
