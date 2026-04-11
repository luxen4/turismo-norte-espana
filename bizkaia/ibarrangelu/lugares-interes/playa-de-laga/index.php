<?php  
$localidad = 'Ibarrangelu';     
$localidad_minuscula = 'ibarrangelu'; 
$lugar_minuscula = 'playa-de-laga';

$region = 'Bizkaia';    
$region_minuscula = strtolower(str_replace(' ', '-', $region));   

$country = 'España';       
$country_minuscula = strtolower(str_replace(' ', '-', $country)); 
?>

<?php define('TITLE', "Playa de Laga en Ibarrangelu – Turismo y Naturaleza en Bizkaia 2025"); ?>
<?php define('DESCRIPTION', "Descubre la Playa de Laga en Ibarrangelu: una de las playas más espectaculares de la costa vasca, con arena fina, entorno natural protegido en la Reserva de Urdaibai y excelentes condiciones para el surf."); ?>
<?php define('COLOR_PAGE', "sky"); ?>
<?php define('LUGAR', "Playa de Laga"); ?>
<?php define('LUGAR_MINUSCULA', strtolower(str_replace(' ', '-', LUGAR))) ?>
<?php define('KEYWORDS_CONTENT', 'Playa de Laga, Ibarrangelu, Bizkaia, turismo País Vasco, costa vasca, surf, reserva de Urdaibai, naturaleza, playa arenal') ?>

<?php require $_SERVER['DOCUMENT_ROOT'] . "/turismo-norte-espana/localidades/carga-variables-generico-lugares-interes.php"; ?>
<?php require PATH_RAIZ  . "/_html/lugares-interes/index-generico3.php"; ?>
