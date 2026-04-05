<!DOCTYPE html>
<html lang="es">

<?php
$localidad = 'Deba'; // Actualizar localidad
$region = 'Gipuzkoa'; // Actualizar región según corresponda
$site_verification_content = 'e148bdbc89c019bd06122ab7bd08a8be'; // Actualiza con el código correcto si es necesario
$description_content = 'Explora la Playa de Deba, una hermosa playa en Gipuzkoa, ideal para disfrutar del sol, practicar deportes acuáticos y relajarte en un entorno natural impresionante.';
$keywords_content = 'Playa de Deba, surf, naturaleza, playa Gipuzkoa, turismo en Deba, actividades al aire libre';

$graph_Meta_Tags_property_title = 'Playa de Deba - Información y Turismo';
$graph_Meta_Tags_property_description = 'Explora la Playa de Deba, una hermosa playa en Gipuzkoa, ideal para disfrutar del sol, practicar deportes acuáticos y relajarte en un entorno natural impresionante.';
$graph_Meta_Tags_property_image = '<?= PATH_DOMINIO_RAIZ; ?>/gipuzkoa/playa-de-deba.jpg'; // Actualizar con la imagen correcta
$graph_Meta_Tags_property_url = '<?= PATH_DOMINIO_RAIZ; ?>/gipuzkoa/playa-de-deba/fichas/playa-de-deba.php'; // Actualizar con la URL correcta
$graph_Meta_Tags_property_type = 'website';

$twiterCards_card = 'summary_large_image';
$twiterCards_site = '@laya_garcia';
$twiterCards_title = 'Playa de Deba - Información y Turismo';
$twiterCards_descripcion = 'Explora la Playa de Deba, una hermosa playa en Gipuzkoa, ideal para disfrutar del sol, practicar deportes acuáticos y relajarte en un entorno natural impresionante.';
$twiterCards_image = '<?= PATH_DOMINIO_RAIZ; ?>/gipuzkoa/playa-de-deba.jpg'; // Actualizar con la imagen correcta
$twiterCards_url = '<?= PATH_DOMINIO_RAIZ; ?>/gipuzkoa/playa-de-deba/fichas/playa-de-deba.php?i=1'; // Actualizar con la URL correcta

$pinterest_property_card_card_content = 'summary_large_image';
$pinterest_property_card_title_content = 'Playa de Deba - Información y Turismo';
$pinterest_property_card_description_content = 'Explora la Playa de Deba, una hermosa playa en Gipuzkoa, ideal para disfrutar del sol, practicar deportes acuáticos y relajarte en un entorno natural impresionante.';
$pinterest_property_card_image_content = '<?= PATH_DOMINIO_RAIZ; ?>/gipuzkoa/playa-de-deba.jpg'; // Actualizar con la imagen correcta

// $href_styles = './../fichas/css/styles.css'; // Verifica si necesitas ajustar esta línea

////////
// Para el archivo Structured_data_generico.php
$localidad = 'Deba'; // Actualizar localidad
$localidad_minuscula = 'deba'; // Actualizar localidad en minúsculas

$descripcion = 'Explora la Playa de Deba, un destino popular en Gipuzkoa con un extenso arenal, ideal para el surf y disfrutar de actividades al aire libre.';
$url = '<?= PATH_DOMINIO_RAIZ; ?>/gipuzkoa/playa-de-deba/fichas/playa-de-deba.php'; // Actualizar con la URL correcta

$mainEntity_description = 'La Playa de Deba es conocida por su amplia extensión de arena dorada y su entorno natural, perfecto para disfrutar de actividades al aire libre y deportes acuáticos.';
$mainEntity_addressLocality = 'Deba'; // Actualizar localidad
$mainEntity_addressRegion = 'Gipuzkoa'; // Actualizar región
$mainEntity_addressCountry = 'España';

$mainEntity_geo_latitude = 43.2841; // Actualizar coordenadas si es necesario
$mainEntity_geo_longitude = -2.3501; // Actualizar coordenadas si es necesario

$mainEntity_image = 'https://example.com/path/to/deba-image.jpg'; // Actualizar con la imagen correcta
$mainEntity_url = '<?= PATH_DOMINIO_RAIZ; ?>/gipuzkoa/playa-de-deba/fichas/playa-de-deba.php'; // Actualizar con la URL correcta
////////

require "./../../../../bloques/estructura/head.php"; ?>

<body>
    <?php $page = 'playade'.$localidad_minuscula; ?>
    <?php require "./sections/info.php"; ?>    
    <?php require "./../../../../bloques/estructura/body_generico.php"; ?>
</body>

</html>