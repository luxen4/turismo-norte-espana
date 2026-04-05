<!DOCTYPE html>
<html lang="es">

<?php
$localidad = 'Muskiz';
$region = 'Vizcaya';
$site_verification_content = 'e148bdbc89c019bd06122ab7bd08a8be'; // Asegúrate de que este código es correcto para Muskiz si se utiliza para verificación
$description_content = 'Descubre la Playa de Muskiz, un tranquilo arenal en el País Vasco, ideal para disfrutar de la naturaleza y relajarse junto al mar en un entorno apacible.';
$keywords_content = 'Playa de Muskiz, naturaleza, tranquilidad, Costa Vasca, turismo en bizkaia, Muskiz';

$graph_Meta_Tags_property_title = 'Playa de Muskiz - Información y Turismo';
$graph_Meta_Tags_property_description = 'Descubre la Playa de Muskiz, un tranquilo arenal en el País Vasco, ideal para disfrutar de la naturaleza y relajarse junto al mar en un entorno apacible.';
$graph_Meta_Tags_property_image = '<?= PATH_DOMINIO_RAIZ; ?>/bizkaia/playademuskiz/playa-de-muskiz.jpg';
$graph_Meta_Tags_property_url = '<?= PATH_DOMINIO_RAIZ; ?>/bizkaia/playademuskiz/fichas/playa-de-muskiz.php';
$graph_Meta_Tags_property_type = 'website';

$twiterCards_card = 'summary_large_image';
$twiterCards_site = '@laya_garcia';
$twiterCards_title = 'Playa de Muskiz - Información y Turismo';
$twiterCards_descripcion = 'Descubre la Playa de Muskiz, un tranquilo arenal en el País Vasco, ideal para disfrutar de la naturaleza y relajarse junto al mar en un entorno apacible.';
$twiterCards_image = '<?= PATH_DOMINIO_RAIZ; ?>/bizkaia/playademuskiz/playa-de-muskiz.jpg';
$twiterCards_url = '<?= PATH_DOMINIO_RAIZ; ?>/bizkaia/playademuskiz/fichas/playa-de-muskiz.php?i=1';

$pinterest_property_card_card_content = 'summary_large_image';
$pinterest_property_card_title_content = 'Playa de Muskiz - Información y Turismo';
$pinterest_property_card_description_content = 'Descubre la Playa de Muskiz, un tranquilo arenal en el País Vasco, ideal para disfrutar de la naturaleza y relajarse junto al mar en un entorno apacible.';
$pinterest_property_card_image_content = '<?= PATH_DOMINIO_RAIZ; ?>/bizkaia/playademuskiz/playa-de-muskiz.jpg';

// $href_styles = './../fichas/css/styles.css';


////////
// Para el archivo Structured_data_generico.php
$localidad = 'Muskiz';
$localidad_minuscula = 'muskiz';

$descripcion = 'Descubre la Playa de Muskiz, un tranquilo arenal en el País Vasco, ideal para disfrutar de la naturaleza y relajarse junto al mar en un entorno apacible.';
$url = '<?= PATH_DOMINIO_RAIZ; ?>/bizkaia/playademuskiz/fichas/playa-de-muskiz.php';

$mainEntity_description = 'La Playa de Muskiz es un hermoso y tranquilo rincón en la costa de bizkaia, ideal para quienes buscan relajarse y disfrutar de un entorno natural único.';
$mainEntity_addressLocality = 'Muskiz';
$mainEntity_addressRegion = 'bizkaia';
$mainEntity_addressCountry = 'España';

$mainEntity_geo_latitude = 43.3482;
$mainEntity_geo_longitude = -3.1001;

$mainEntity_image = 'https://example.com/path/to/muskiz-image.jpg';
$mainEntity_url = '<?= PATH_DOMINIO_RAIZ; ?>/bizkaia/playade' . $localidad_minuscula . '/fichas/playa-de-' . $localidad_minuscula . '.php';
////////

require "./../../../../bloques/estructura/head.php"; ?>
<body>
    <?php $page = 'playade'.$localidad_minuscula; ?>
    <?php require "./sections/info.php"; ?>    
    <?php require "./../../../../bloques/estructura/body_generico.php"; ?>
</body>

</html>