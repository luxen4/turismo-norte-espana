<?php  
$localidad = 'Capbreton';     
$localidad_minuscula = 'capbreton'; 
$lugar_minuscula = 'piste-cyclable-velodyssee';
$region = 'Nouvelle-Aquitaine';  
$region_minuscula = strtolower(str_replace(' ', '-', $region));   
$country = 'Francia';    
$country_minuscula = strtolower(str_replace(' ', '-', $country)); 
?>

<?php define('TITLE', "Piste Cyclable Vélodyssée en Capbreton – Ruta en Bicicleta por la Costa Atlántica 2025"); ?>
<?php define('DESCRIPTION', "Descubre la pista ciclista Vélodyssée en Capbreton: kilómetros de carriles bici seguros, naturaleza atlántica y una experiencia perfecta para ciclistas y familias."); ?>
<?php define('COLOR_PAGE', "<?= COLOR_PAGE; ?>"); ?>
<?php define('LUGAR', "Piste Cyclable Vélodyssée"); ?>
<?php define('LUGAR_MINUSCULA', strtolower(str_replace(' ', '-', LUGAR))) ?>
<?php define('KEYWORDS_CONTENT', 'Vélodyssée, Capbreton, ciclismo, ruta ciclista, Landas, carril bici, turismo activo, costa atlántica') ?>

<?php require $_SERVER['DOCUMENT_ROOT'] . "/turismo-norte-espana/localidades/carga-variables-generico-lugares-interes.php"; ?>
<?php require PATH_RAIZ  . "/_html/lugares-interes/index-generico3.php"; ?>