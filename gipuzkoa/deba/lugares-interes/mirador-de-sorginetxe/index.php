<?php  
$localidad = 'Deba';     
$localidad_minuscula = 'deba'; 
$lugar_minuscula = 'mirador-de-sorginetxe';

$region = 'Gipuzkoa';  
$region_minuscula = strtolower(str_replace(' ', '-', $region));   

$country = 'España';    
$country_minuscula = strtolower(str_replace(' ', '-', $country)); 
?>

<?php define('TITLE', "Mirador de Sorginetxe en Deba – Naturaleza y Vistas al Cantábrico 2025"); ?>
<?php define('DESCRIPTION', "El Mirador de Sorginetxe en Deba ofrece panorámicas espectaculares de la costa vasca y sus acantilados, un lugar ideal para el senderismo, la observación de la naturaleza y la fotografía."); ?>
<?php define('COLOR_PAGE', "<?= COLOR_PAGE; ?>"); ?>
<?php define('LUGAR', "Mirador de Sorginetxe"); ?>
<?php define('LUGAR_MINUSCULA', strtolower(str_replace(' ', '-', LUGAR))) ?>
<?php define('KEYWORDS_CONTENT', 'Mirador de Sorginetxe, Deba, Gipuzkoa, costa vasca, acantilados, rutas de senderismo, miradores, naturaleza, mar Cantábrico, fotografía') ?>

<?php require $_SERVER['DOCUMENT_ROOT'] . "/turismo-norte-espana/localidades/carga-variables-generico-lugares-interes.php"; ?>
<?php require PATH_RAIZ  . "/_html/lugares-interes/index-generico3.php"; ?>
