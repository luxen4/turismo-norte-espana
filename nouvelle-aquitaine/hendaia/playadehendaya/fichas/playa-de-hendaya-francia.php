<!DOCTYPE html>
<html lang="es">

<?php $_COOKIE['idioma'] = 'es'; ?>

<?php
// Variables para la página de la Playa de Hendaya
require $_SERVER['DOCUMENT_ROOT'] . '/turismo-norte-espana/francia/playadehendaya/fichas/sections/head/variables/web-playa/localizacion-playa.php';
require $_SERVER['DOCUMENT_ROOT'] . '/turismo-norte-espana/bloques/estructura/variables_comunes/defines.php';

$site_verification_content = 'e148bdbc89c019bd06122ab7bd08a8be'; // Cambiar si se necesita una verificación específica para Hendaya
$description_content = 'Descubre la Playa de Hendaya, una extensa y hermosa playa francesa ideal para el surf, el relax y el disfrute del mar en el País Vasco.';
$keywords_content = 'Playa de Hendaya, turismo en Hendaya, costa vasca, surf en Hendaya, Francia, vacaciones en Hendaya, playa de Francia';

require PATH_RAIZ_WEB_PLAYA . "/meta_tags.php";        // Variables de etiquetas meta
require PATH_RAIZ_WEB_PLAYA . "/tweeter.php";          // Variables Twitter
require PATH_RAIZ_WEB_PLAYA . "/pinterest.php";        // Variables Pinterest
require PATH_RAIZ_WEB_PLAYA . "/data-generico.php";    // Variables para el archivo Structured_data_generico.php

// Imagen representativa y URL canónica
require PATH_RAIZ_WEB_PLAYA . "/structure-data-schema-org.php";

require PATH_RAIZ_BLOQUES_ESTRUCTURA . "/head.php"; ?>

<body>
    <?php $page = 'playadehendaya'; ?>
    <?php require "./sections/info.php"; ?>
    <?php require PATH_RAIZ_BLOQUES_ESTRUCTURA . "/body_generico.php"; ?>
</body>

</html>