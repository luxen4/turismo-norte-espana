<?php  
$localidad = 'Capbreton';     
$localidad_minuscula = 'capbreton'; 
$lugar_minuscula = 'puerto-pesquero';
$region = 'Nouvelle-Aquitaine';  
$region_minuscula = strtolower(str_replace(' ', '-', $region));   
$country = 'Francia';    
$country_minuscula = strtolower(str_replace(' ', '-', $country)); 
?>

<?php define('TITLE', "Puerto Pesquero de Capbreton – Embarcaciones, Gastronomía y Encanto Atlántico 2025"); ?>
<?php define('DESCRIPTION', "Visita el Puerto Pesquero de Capbreton: un lugar emblemático para el comercio marítimo, paseos frente al mar, restaurantes de pescado fresco y ambiente auténtico de la costa atlántica."); ?>
<?php define('COLOR_PAGE', "sky"); ?>
<?php define('LUGAR', "Puerto Pesquero Capbreton"); ?>
<?php define('LUGAR_MINUSCULA', strtolower(str_replace(' ', '-', LUGAR))) ?>
<?php define('KEYWORDS_CONTENT', 'Puerto Pesquero, Capbreton, puerto, gastronomía, turismo, costa atlántica, Landas') ?>

<?php require $_SERVER['DOCUMENT_ROOT'] . "/turismo-norte-espana/localidades/carga-variables-generico-lugares-interes.php"; ?>
<?php require PATH_RAIZ  . "/_html/lugares-interes/index-generico3.php"; ?>
