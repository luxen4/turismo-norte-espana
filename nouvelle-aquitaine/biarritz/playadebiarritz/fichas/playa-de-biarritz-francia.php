<!DOCTYPE html>
<html lang="fr">

<?php $_COOKIE['idioma'] = 'fr'; ?>

<?php
// Variables para la página de la Playa de Biarritz
require $_SERVER['DOCUMENT_ROOT'] . '/Blog_Playas2026/francia/playadebiarritz/fichas/sections/head/variables/web-playa/localizacion-playa.php';
require $_SERVER['DOCUMENT_ROOT'] . '/Blog_Playas2026/bloques/estructura/variables_comunes/defines.php';

$site_verification_content = 'CAMBIAR_ESTO_SI_ES_NECESARIO'; // Cambiar si se necesita una verificación específica para Biarritz
$description_content = 'Découvrez la plage de Biarritz, une destination emblématique de la côte basque, idéale pour le surf, la détente et la beauté naturelle du sud-ouest de la France.';
$keywords_content = 'Plage de Biarritz, tourisme à Biarritz, côte basque, surf, vacances en France, océan Atlantique, nature';

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