<!DOCTYPE html>
<html lang="es">

<?php $_COOKIE['idioma'] = 'es'; ?>

<?php
// Variables para la página de la Playa de Noja
require $_SERVER['DOCUMENT_ROOT'] . '/turismo-norte-espana/cantabria/playadeberria/fichas/sections/head/variables/web-playa/localizacion-playa.php';
require $_SERVER['DOCUMENT_ROOT'] . '/turismo-norte-espana/bloques/estructura/variables_comunes/defines.php';

$site_verification_content = 'e148bdbc89c019bd06122ab7bd08a8be'; // Cambiar si se necesita una verificación específica para Noja
$description_content = 'Descubre la Playa de Noja, un hermoso arenal cántabro perfecto para disfrutar del mar, el surf y el encanto natural del norte de España.';
$keywords_content = 'Playa de Noja, turismo en Noja, Costa Cantábrica, Cantabria, surf, naturaleza, vacaciones en Cantabria';

require PATH_RAIZ_WEB_PLAYA . "/meta_tags.php";        // Variables de etiquetas meta
require PATH_RAIZ_WEB_PLAYA . "/tweeter.php";          // Variables Twitter
require PATH_RAIZ_WEB_PLAYA . "/pinterest.php";        // Variables Pinterest
require PATH_RAIZ_WEB_PLAYA . "/data-generico.php";    // Variables para el archivo Structured_data_generico.php

// Imagen representativa y URL canónica
require PATH_RAIZ_WEB_PLAYA . "/structure-data-schema-org.php";

require PATH_RAIZ_BLOQUES_ESTRUCTURA . "/head.php"; ?>

<body>
    <?php $page = 'playade' . $nombre_playa_minuscula; ?>
    <?php require "./sections/info.php"; ?>
    <?php require PATH_RAIZ_BLOQUES_ESTRUCTURA . "/body_generico.php"; ?>
</body>

</html>