<!DOCTYPE html>
<html lang="es">

<?php $_COOKIE['idioma'] = 'es'; ?>

<?php
// Variables para la página de la Playa de Laredo
require $_SERVER['DOCUMENT_ROOT'] . '/Blog_Playas2026/cantabria/playadelaredo/fichas/sections/head/variables/web-playa/localizacion-playa.php';
require $_SERVER['DOCUMENT_ROOT'] . '/Blog_Playas2026/bloques/estructura/variables_comunes/defines.php';

$site_verification_content = 'e148bdbc89c019bd06122ab7bd08a8be'; // Cambia si tienes un código específico para Laredo
$description_content = 'Descubre la Playa de Laredo, una de las playas más famosas de Cantabria, ideal para paseos, deportes acuáticos y disfrutar del mar.';
$keywords_content = 'Playa de Laredo, surf, naturaleza, Costa Cantábrica, turismo en Cantabria, Laredo';

// Carga variables meta, Twitter, Pinterest, y datos estructurados específicos para Laredo
require PATH_RAIZ_WEB_PLAYA. "/meta_tags.php";
require PATH_RAIZ_WEB_PLAYA. "/tweeter.php";
require PATH_RAIZ_WEB_PLAYA. "/pinterest.php";
require PATH_RAIZ_WEB_PLAYA. "/data-generico.php";

// Imagen representativa y URL canónica para Laredo
require PATH_RAIZ_WEB_PLAYA. "/structure-data-schema-org.php";

// Estructura común del head
require PATH_RAIZ_BLOQUES_ESTRUCTURA. "/head.php";
?>

<body>
    <?php 
    $nombre_playa_minuscula = 'laredo';  // Asumiendo que esta variable no estaba declarada antes
    $page = 'playade'.$nombre_playa_minuscula;
    ?>
    
    <?php require "./sections/info.php"; ?>    
    <?php require PATH_RAIZ_BLOQUES_ESTRUCTURA. "/body_generico.php"; ?>
</body>

</html>