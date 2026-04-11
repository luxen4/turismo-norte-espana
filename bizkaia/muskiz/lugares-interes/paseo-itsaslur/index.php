<?php  
$localidad = 'Muskiz';     
$localidad_minuscula = 'muskiz'; 
$lugar_minuscula = 'paseo-itsaslur';

$region = 'Bizkaia';    
$region_minuscula = strtolower(str_replace(' ', '-', $region));   

$country = 'España';       
$country_minuscula = strtolower(str_replace(' ', '-', $country)); 
?>

<?php define('TITLE', "Paseo Itsaslur – Turismo y Naturaleza en Bizkaia 2025"); ?>
<?php define('DESCRIPTION', "Disfruta del Paseo Itsaslur en Muskiz: un recorrido peatonal agradable a lo largo de la costa y los entornos naturales, ideal para caminar, observar fauna y flora, y contemplar la naturaleza de Bizkaia."); ?>
<?php define('COLOR_PAGE', "green"); ?>
<?php define('LUGAR', "Paseo Itsaslur"); ?>
<?php define('LUGAR_MINUSCULA', 'paseo-itsaslur') ?>
<?php define('KEYWORDS_CONTENT', 'Paseo Itsaslur, Muskiz, senderismo Bizkaia, naturaleza País Vasco, paseo costero, fauna y flora, turismo sostenible') ?>

<?php require $_SERVER['DOCUMENT_ROOT'] . "/turismo-norte-espana/localidades/carga-variables-generico-lugares-interes.php"; ?>
<?php require PATH_RAIZ  . "/_html/lugares-interes/index-generico3.php"; ?>
