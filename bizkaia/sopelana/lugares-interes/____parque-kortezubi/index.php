<?php  
$localidad = 'Sopelana';     
$localidad_minuscula = 'sopelana'; 
$lugar_minuscula = 'parque-kortezubi';

$region = 'Bizkaia';    
$region_minuscula = strtolower(str_replace(' ', '-', $region));   

$country = 'España';       
$country_minuscula = strtolower(str_replace(' ', '-', $country)); 
?>

<?php define('TITLE', "Parque Kortezubi en Sopelana – Naturaleza y Ocio en Bizkaia 2025"); ?>
<?php define('DESCRIPTION', "Descubre el Parque Kortezubi en Sopelana: un espacio verde perfecto para pasear, disfrutar en familia y conectar con la naturaleza en la costa de Bizkaia."); ?>
<?php define('COLOR_PAGE', "amber"); ?>
<?php define('LUGAR', "Parque Kortezubi"); ?>
<?php define('LUGAR_MINUSCULA', strtolower(str_replace(' ', '-', LUGAR))) ?>
<?php define('KEYWORDS_CONTENT', 'Parque Kortezubi, Sopelana, Bizkaia, zonas verdes, turismo País Vasco, costa vasca, ocio familiar, naturaleza, paseos, senderismo') ?>

<?php require $_SERVER['DOCUMENT_ROOT'] . "/turismo-norte-espana/localidades/carga-variables-generico-lugares-interes.php"; ?>
<?php require PATH_RAIZ  . "/_html/lugares-interes/index-generico3.php"; ?>
