<?php  
$localidad = 'Deba';     
$localidad_minuscula = 'deba'; 
$lugar_minuscula='ermita-de-san-telmo';

$region = 'Gipuzkoa';  
$region_minuscula = strtolower(str_replace(' ', '-', $region));   

$country = 'España';    
$country_minuscula = strtolower(str_replace(' ', '-', $country)); 
?>

<?php define('TITLE', "Ermita de San Telmo en Deba – Patrimonio y Vistas al Cantábrico 2025"); ?>
<?php define('DESCRIPTION', "Descubre la Ermita de San Telmo en Deba, un lugar emblemático en lo alto de los acantilados con vistas espectaculares al mar Cantábrico y gran valor histórico y cultural."); ?>
<?php define('COLOR_PAGE', "emerald"); ?>
<?php define('LUGAR', "Ermita de San Telmo"); ?>
<?php define('LUGAR_MINUSCULA', strtolower(str_replace(' ', '-', LUGAR))) ?>
<?php define('KEYWORDS_CONTENT', 'Ermita de San Telmo, Deba, Gipuzkoa, costa vasca, miradores, rutas de senderismo, turismo cultural, iglesia en acantilado, mar Cantábrico') ?>

<?php require $_SERVER['DOCUMENT_ROOT'] . "/turismo-norte-espana/localidades/carga-variables-generico-lugares-interes.php"; ?>
<?php require PATH_RAIZ  . "/_estructura/semantica/page-playa-generico.php"; ?>
