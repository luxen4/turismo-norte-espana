<?php  
$localidad = 'Saint Jean de Luz';     $localidad_minuscula = strtolower(str_replace(' ', '-', $localidad)); $localidad_minuscula = $localidad_minuscula; 
$region = 'Nouvelle Aquitaine';  $region_minuscula = strtolower(str_replace(' ', '-', $region));   
$country = 'Francia';    $country_minuscula = strtolower(str_replace(' ', '-', $country));   
$lugar_minuscula="";
?>
<?php require "./data/data-localidad.php"; ?>
<?php require $_SERVER['DOCUMENT_ROOT'] . "/turismo-norte-espana/_html/localidades/index-generico.php"; ?>