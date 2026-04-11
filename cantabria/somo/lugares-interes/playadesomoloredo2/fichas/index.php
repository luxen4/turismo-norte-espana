<!DOCTYPE html>
<html lang="es">

<?php // Variables para la página de la Playa de Somo-Loredo ?>
<?php 
$rutas=""; $localidad="Somo"; $region="Cantabria"; $country="España";
  $region_minuscula = 'cantabria'; 
  $localidad_minuscula = 'playadesomoloredo'; 
  $lugar_minuscula = 'playa-de-somo-loredo'; $nombre_playa_minuscula = $lugar_minuscula;
?>
<?php require $_SERVER['DOCUMENT_ROOT'] . "/turismo-norte-espana/bloques/estructura/variables_comunes/defines.php"; ?>
<?php require PATH_RAIZ . "/cantabria/somo/lugares-interes/playadesomoloredo2/fichas/sections/head/variables/web-playa/localizacion-playa.php"; ?>


<?php
// Variables para las etiquetas meta y SEO
$site_verification_content = 'e148bdbc89c019bd06122ab7bd08a8be'; // Cambia si tienes un código específico para Somo-Loredo
$description_content = 'Descubre la Playa de Somo-Loredo, uno de los arenales más grandes de Cantabria, ideal para surf, senderismo costero y disfrutar del paisaje natural.';
$keywords_content = 'Playa de Somo, Playa de Loredo, surf Cantabria, Somo-Loredo, Costa Cantábrica, playas de Cantabria, turismo activo, Somo';

?>

<?php define('DESCRIPTION', $description_content); ?>
<?php define('KEYWORDS_CONTENT', $keywords_content); ?>
<?php define('TITLE', 'Playa de Somo'); ?>


<?php require PATH_RAIZ . "/cantabria/somo/lugares-interes/playadesomoloredo2/fichas/sections/head/variables/web-playa/grupo1/index.php"; ?>


<?php require PATH_RAIZ_HTML . "/head/head-generico.php"; ?>

<body>
    <?php 
      $pafge = 'playade' . $nombre_playa_minuscula; 
    ?>
    <?php //require PATH_RAIZ. "/cantabria/somo/lugares-interes/playadesomoloredo2/fichas/index.php"; ?>    
    <?php require PATH_RAIZ . "/bloques/estructura/paginas-playa/body/body-generico-playa.php"; ?>


    <?php require PATH_RAIZ_BLOQUES_ESTRUCTURA. "/recarga_pagina_amigable.php"; ?>
</body>

</html>
