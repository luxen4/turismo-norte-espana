<?php  
$localidad_minuscula = strtolower(str_replace(' ', '-', $localidad)); 
$lugar_minuscula = "";
$region = 'Nouvelle-Aquitaine';  $region_minuscula = strtolower(str_replace(' ', '-', $region)); 
$country = 'Francia'; $country_minuscula = strtolower(str_replace(' ', '-', $country));   
?>

<?php
/*
$localidad = 'Saint-Jean-de-Luz';
$localidad_minuscula = strtolower(
    str_replace(
        ['ñ', 'Ñ', ' '], 
        ['n', 'n', '-'], 
        $localidad
    )
);

$region = 'Nouvelle Aquitaine';
$region_minuscula = strtolower(
    str_replace(
        ['ñ', 'Ñ', ' '], 
        ['n', 'n', '-'], 
        $region
    )
);*/

?>