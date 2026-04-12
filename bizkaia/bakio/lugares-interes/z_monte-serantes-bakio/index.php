<?php  
$localidad = 'Bakio';     
$localidad_minuscula = 'bakio'; 
$lugar_minuscula = 'monte-serantes';
$region = 'Bizkaia';  
$region_minuscula = strtolower(str_replace(' ', '-', $region));   
$country = 'España';    
$country_minuscula = strtolower(str_replace(' ', '-', $country)); 
?>

<?php define('TITLE', "Monte Serantes en Bakio – Naturaleza, Senderismo y Vistas 2025"); ?>
<?php define('DESCRIPTION', "Explora el Monte Serantes en Bakio, un enclave natural con rutas de senderismo, vistas panorámicas del litoral de Bizkaia y un entorno perfecto para disfrutar de la naturaleza y la historia vasca."); ?>
<?php define('COLOR_PAGE', "green"); ?>
<?php define('LUGAR', "Monte Serantes"); ?>
<?php define('LUGAR_MINUSCULA', strtolower(str_replace(' ', '-', LUGAR))) ?>
<?php define('KEYWORDS_CONTENT', 'Monte Serantes, Bakio, Bizkaia, senderismo Bizkaia, costa vasca, rutas de montaña, naturaleza, panorámicas') ?>

<?php require $_SERVER['DOCUMENT_ROOT'] . "/turismo-norte-espana/_html/lugares-interes/variables-generico.php"; ?>
<?php require PATH_RAIZ  . "/_html/lugares-interes/index-generico3.php"; ?>
