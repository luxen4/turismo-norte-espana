<?php  
$localidad = 'Hendaia';     
$localidad_minuscula = 'hendaia'; 
$lugar_minuscula = 'corniche-basque';
$region = 'Nouvelle-Aquitaine';  
$region_minuscula = strtolower(str_replace(' ', '-', $region));   
$country = 'Francia';    
$country_minuscula = strtolower(str_replace(' ', '-', $country)); 
?>

<?php define('TITLE', "Corniche Basque – Paseos Panorámicos y Naturaleza en Hendaya 2025"); ?>
<?php define('DESCRIPTION', "Disfruta de la Corniche Basque en Hendaya: rutas panorámicas a pie o en bicicleta, impresionantes vistas del litoral atlántico y conexión con la naturaleza."); ?>
<?php define('COLOR_PAGE', "green"); ?>
<?php define('LUGAR', "Corniche Basque"); ?>
<?php define('LUGAR_MINUSCULA', strtolower(str_replace(' ', '-', LUGAR))) ?>
<?php define('KEYWORDS_CONTENT', 'Corniche Basque, Hendaya, turismo, paseos panorámicos, naturaleza, costa atlántica, senderismo, bicicleta') ?>

<?php require $_SERVER['DOCUMENT_ROOT'] . "/turismo-norte-espana/_html/lugares-interes/variables-generico.php"; ?>
<?php require PATH_RAIZ  . "/_html/lugares-interes/index-generico3.php"; ?>
