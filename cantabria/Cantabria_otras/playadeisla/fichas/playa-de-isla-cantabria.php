<!DOCTYPE html>
<html lang="es">

<?php $_COOKIE['idioma'] = 'es'; ?>

<?php
// Variables para la página de la Playa de Isla
require $_SERVER['DOCUMENT_ROOT'] . '/Blog_Playas2026/cantabria/playadeisla/fichas/sections/head/variables/web-playa/localizacion-playa.php';
require $_SERVER['DOCUMENT_ROOT'] . '/Blog_Playas2026/bloques/estructura/variables_comunes/defines.php';

$site_verification_content = 'e148bdbc89c019bd06122ab7bd08a8be'; // Actualiza si tienes un código específico para Isla
$description_content = 'Descubre la Playa de Isla, una encantadora playa en Cantabria, ideal para disfrutar del mar, el sol y deportes acuáticos en un entorno natural privilegiado.';
$keywords_content = 'Playa de Isla, surf, naturaleza, Costa Cantábrica, turismo en Cantabria, Playa Isla Cantabria';

//echo(PATH_RAIZ_WEB_PLAYA);
require PATH_RAIZ_WEB_PLAYA . "/meta_tags.php";      // Variables de etiquetas meta
require PATH_RAIZ_WEB_PLAYA . "/tweeter.php";        // Variables Twitter
require PATH_RAIZ_WEB_PLAYA . "/pinterest.php";      // Variables Pinterest
require PATH_RAIZ_WEB_PLAYA . "/data-generico.php";  // Variables para el archivo Structured_data_generico.php

// Imagen representativa y URL canónica
require PATH_RAIZ_WEB_PLAYA . "/structure-data-schema-org.php";

require PATH_RAIZ_BLOQUES_ESTRUCTURA . "/head.php"; 
?>

<body>
    <?php $page = 'playade' . $nombre_playa_minuscula; ?>
    <?php require "./sections/info.php"; ?>    
    <?php require PATH_RAIZ_BLOQUES_ESTRUCTURA . "/body_generico.php"; ?>
</body>

</html>