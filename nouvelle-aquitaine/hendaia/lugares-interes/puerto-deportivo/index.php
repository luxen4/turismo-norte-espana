<?php  
$localidad = 'Hendaia';     
$localidad_minuscula = 'hendaia'; 
$lugar_minuscula = 'puerto-deportivo';
$region = 'Nouvelle-Aquitaine';  
$region_minuscula = strtolower(str_replace(' ', '-', $region));   
$country = 'Francia';    
$country_minuscula = strtolower(str_replace(' ', '-', $country)); 
?>

<?php define('TITLE', "Puerto Deportivo de Hendaya – Actividades Náuticas y Ocio 2025"); ?>
<?php define('DESCRIPTION', "Descubre el Puerto Deportivo de Hendaya: deportes acuáticos, paseos en barco, restaurantes y ocio frente al mar en la costa atlántica."); ?>
<?php define('COLOR_PAGE', "blue"); ?>
<?php define('LUGAR', "Puerto Deportivo de Hendaya"); ?>
<?php define('LUGAR_MINUSCULA', strtolower(str_replace(' ', '-', LUGAR))) ?>
<?php define('KEYWORDS_CONTENT', 'Puerto Deportivo Hendaya, Hendaya, turismo, deportes acuáticos, ocio, costa atlántica, País Vasco Francés') ?>

<?php require $_SERVER['DOCUMENT_ROOT'] . "/turismo-norte-espana/localidades/carga-variables-generico-lugares-interes.php"; ?>
<?php require PATH_RAIZ  . "/_estructura/semantica/page-playa-generico.php"; ?>
