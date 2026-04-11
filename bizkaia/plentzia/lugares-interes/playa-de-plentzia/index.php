<?php  
$localidad = 'Plentzia';     $localidad_minuscula = 'plentzia'; $lugar_minuscula='playa-de-plentzia';
$region = 'Bizkaia';         $region_minuscula = strtolower(str_replace(' ', '-', $region));   
$country = 'España';         $country_minuscula = strtolower(str_replace(' ', '-', $country)); 
?>

<?php define('TITLE', "Playa de Plentzia – Turismo y Naturaleza en Bizkaia 2025"); ?>
<?php define('DESCRIPTION', "Descubre la Playa de Plentzia, una de las más populares de Bizkaia: arena fina, aguas tranquilas ideales para familias, deportes acuáticos y un paseo marítimo lleno de vida.");?>
<?php define('COLOR_PAGE', "<?= COLOR_PAGE; ?>"); ?>
<?php define('LUGAR', "Playa de Plentzia"); ?>
<?php define('LUGAR_MINUSCULA', strtolower(str_replace(' ', '-', LUGAR))) ?>
<?php define('KEYWORDS_CONTENT', 'Playa de Plentzia, Bizkaia, playas País Vasco, turismo Bizkaia, costa vasca, surf en Bizkaia, naturaleza, playa de arena fina') ?>

<?php require $_SERVER['DOCUMENT_ROOT'] . "/turismo-norte-espana/localidades/carga-variables-generico-lugares-interes.php"; ?>
<?php require PATH_RAIZ  . "/_html/lugares-interes/index-generico3.php"; ?>
