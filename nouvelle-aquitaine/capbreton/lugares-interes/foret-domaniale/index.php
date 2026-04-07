<?php  
$localidad = 'Capbreton';     
$localidad_minuscula = 'capbreton'; 
$lugar_minuscula = 'foret-domaniale-de-capbreton';
$region = 'Nouvelle-Aquitaine';  
$region_minuscula = strtolower(str_replace(' ', '-', $region));   
$country = 'Francia';    
$country_minuscula = strtolower(str_replace(' ', '-', $country)); 
?>

<?php define('TITLE', "Forêt Domaniale de Capbreton – Naturaleza y Senderismo en la Costa Atlántica 2025"); ?>
<?php define('DESCRIPTION', "Explora la Forêt Domaniale de Capbreton: senderos para caminar, zonas de picnic y naturaleza atlántica ideal para familias y amantes del aire libre."); ?>
<?php define('COLOR_PAGE', "green"); ?>
<?php define('LUGAR', "Forêt Domaniale de Capbreton"); ?>
<?php define('LUGAR_MINUSCULA', strtolower(str_replace(' ', '-', LUGAR))) ?>
<?php define('KEYWORDS_CONTENT', 'Forêt Domaniale, Capbreton, senderismo, naturaleza, picnic, turismo activo, costa atlántica, bosques') ?>

<?php require $_SERVER['DOCUMENT_ROOT'] . "/turismo-norte-espana/localidades/carga-variables-generico-lugares-interes.php"; ?>
<?php require PATH_RAIZ  . "/_estructura/semantica/page-playa-generico.php"; ?>
