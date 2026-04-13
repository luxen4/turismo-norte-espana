<!DOCTYPE html>
<html lang="es">

<?php
$localidad = 'San Juan de Luz';
$region = 'Pirineos Atlánticos';
$site_verification_content = 'tu_codigo_de_verificacion_aqui'; // Asegúrate de que este código es correcto para San Juan de Luz si se utiliza para verificación
$description_content = 'Explora la Playa de San Juan de Luz, un hermoso arenal en la costa vasca francesa, ideal para disfrutar del surf, paseos marítimos y la rica gastronomía local.';
$keywords_content = 'Playa de San Juan de Luz, surf, naturaleza, paseo marítimo, Costa Vasca, turismo en Pirineos Atlánticos, San Juan de Luz';

$graph_Meta_Tags_property_title = 'Playa de San Juan de Luz - Información y Turismo';
$graph_Meta_Tags_property_description = 'Explora la Playa de San Juan de Luz, un hermoso arenal en la costa vasca francesa, ideal para disfrutar del surf, paseos marítimos y la rica gastronomía local.';
$graph_Meta_Tags_property_image = '<?= PATH_DOMINIO_RAIZ; ?>/francia/playa-de-saint-jean-de-luz/playa-de-saint-jean-de-luz.jpg';
$graph_Meta_Tags_property_url = '<?= PATH_DOMINIO_RAIZ; ?>/francia/playadesanjuandeluz/fichas/playa-de-saint-jean-de-luz.php';
$graph_Meta_Tags_property_type = 'website';

$twiterCards_card = 'summary_large_image';
$twiterCards_site = '@laya_garcia'; // Actualiza si es necesario
$twiterCards_title = 'Playa de San Juan de Luz - Información y Turismo';
$twiterCards_descripcion = 'Explora la Playa de San Juan de Luz, un hermoso arenal en la costa vasca francesa, ideal para disfrutar del surf, paseos marítimos y la rica gastronomía local.';
$twiterCards_image = '<?= PATH_DOMINIO_RAIZ; ?>/francia/playa-de-saint-jean-de-luz/playa-de-saint-jean-de-luz.jpg';
$twiterCards_url = '<?= PATH_DOMINIO_RAIZ; ?>/francia/playadesanjuandeluz/fichas/playa-de-saint-jean-de-luz.php?i=1';

$pinterest_property_card_card_content = 'summary_large_image';
$pinterest_property_card_title_content = 'Playa de San Juan de Luz - Información y Turismo';
$pinterest_property_card_description_content = 'Explora la Playa de San Juan de Luz, un hermoso arenal en la costa vasca francesa, ideal para disfrutar del surf, paseos marítimos y la rica gastronomía local.';
$pinterest_property_card_image_content = '<?= PATH_DOMINIO_RAIZ; ?>/francia/playa-de-saint-jean-de-luz/playa-de-saint-jean-de-luz.jpg';

$href_styles = './../fichas/css/styles.css';


////////
// Para el archivo Structured_data_generico.php
$localidad = 'San Juan de Luz';
$localidad_minuscula = 'saint-jean-de-luz';

$descripcion = 'Explora la Playa de San Juan de Luz, un destino famoso por su hermoso arenal, excelente para practicar surf y disfrutar de un vibrante paseo marítimo lleno de vida.';
$url = '<?= PATH_DOMINIO_RAIZ; ?>/francia/playadesanjuandeluz/fichas/playa-de-saint-jean-de-luz.php';

$mainEntity_description = 'La Playa de San Juan de Luz es una de las playas más emblemáticas de la costa vasca francesa, conocida por su hermoso arenal, mar tranquilo y excelente oferta gastronómica.';
$mainEntity_addressLocality = 'San Juan de Luz';
$mainEntity_addressRegion = 'Pirineos Atlánticos';
$mainEntity_addressCountry = 'Francia';

$mainEntity_geo_latitude = 43.3833;
$mainEntity_geo_longitude = -1.6667;

$mainEntity_image = 'https://example.com/path/to/saint-jean-de-luz-image.jpg'; // Reemplaza con la imagen correcta
$mainEntity_url = '<?= PATH_DOMINIO_RAIZ; ?>/francia/playadesanjuandeluz/fichas/playa-de-saint-jean-de-luz.php';
////////

require "./../../../../bloques/estructura/head.php"; ?>

<body>
    <?php $page = 'playade'.$localidad_minuscula; ?>
    <?php require "./sections/info.php"; ?>    
    <?php require "./../../../../bloques/estructura/body_generico.php"; ?>
</body>

</html>