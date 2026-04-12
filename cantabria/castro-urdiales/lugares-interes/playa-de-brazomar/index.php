<?php  
$localidad = 'Castro-Urdiales';     
$localidad_minuscula = 'castro-urdiales'; 
$lugar_interes = 'playa-de-brazomar';

$region = 'Cantabria';  
$region_minuscula = strtolower(str_replace(' ', '-', $region));   

$country = 'España';    
$country_minuscula = strtolower(str_replace(' ', '-', $country)); 
?>

<?php require $_SERVER['DOCUMENT_ROOT'] . "/turismo-norte-espana/_html/lugares-interes/variables-generico.php"; ?>
<?php require PATH_RAIZ  . "/_html/lugares-interes/index-generico3.php"; ?>
