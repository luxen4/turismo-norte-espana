<!DOCTYPE html>
<html lang="es">

<?php // Variables para la página de la Playa de Somo-Loredo ?>
<?php 
  $region_minuscula = 'cantabria'; 
  $localidad_minuscula = 'playadesomoloredo'; 
  lugar_minuscula = 'playa-de-somo-loredo'; 
?>
<?php require $_SERVER['DOCUMENT_ROOT'] . "/turismo-norte-espana/bloques/estructura/variables_comunes/defines.php"; ?>
<?php require PATH_RAIZ_LOCALIDADES_CARPETA_WEB_PLAYA . "/localizacion-playa.php"; ?>

<?php
// Variables para las etiquetas meta y SEO
$site_verification_content = 'e148bdbc89c019bd06122ab7bd08a8be'; // Cambia si tienes un código específico para Somo-Loredo
$description_content = 'Descubre la Playa de Somo-Loredo, uno de los arenales más grandes de Cantabria, ideal para surf, senderismo costero y disfrutar del paisaje natural.';
$keywords_content = 'Playa de Somo, Playa de Loredo, surf Cantabria, Somo-Loredo, Costa Cantábrica, playas de Cantabria, turismo activo, Somo';

require PATH_RAIZ_WEB_PLAYA . "/grupo1/index.php"; 

require PATH_RAIZ_BLOQUES_ESTRUCTURA . "/head-generico-playa.php"; 
?>

<body>
    <?php 
      $pafge = 'playade' . $nombre_playa_minuscula; 
    ?>
    <?php require PATH_RAIZ_LOCALIDADES_SECTIONS . "/info.php"; ?>    
    <?php require PATH_RAIZ_BLOQUES_ESTRUCTURA . "/body-generico-playa.php"; ?>

    <?php //require PATH_RAIZ_BLOQUES_ESTRUCTURA. "/recarga_pagina_amigable.php"; ?>
</body>

</html>
