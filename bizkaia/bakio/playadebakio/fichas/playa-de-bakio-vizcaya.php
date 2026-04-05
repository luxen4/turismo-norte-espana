<!DOCTYPE html>
<html lang="es">

<?php
$localidad = 'Bakio';
$region = 'bizkaia';
$site_verification_content = 'e148bdbc89c019bd06122ab7bd08a8be'; // Asegúrate de que este código es correcto para Bakio si se utiliza para verificación
$description_content = 'Descubre la Playa de Bakio, un destino perfecto en la Costa Vasca para practicar surf, pasear por la costa y disfrutar de la gastronomía local.';
$keywords_content = 'Playa de Bakio, surf, naturaleza, paseo marítimo, Costa Vasca, turismo en bizkaia, Bakio';

$graph_Meta_Tags_property_title = 'Playa de Bakio - Información y Turismo';
$graph_Meta_Tags_property_description = 'Descubre la Playa de Bakio, un destino perfecto en la Costa Vasca para practicar surf, pasear por la costa y disfrutar de la gastronomía local.';
$graph_Meta_Tags_property_image = '<?= PATH_DOMINIO_RAIZ; ?>/bizkaia/playadebakio/playa-de-bakio.jpg';
$graph_Meta_Tags_property_url = '<?= PATH_DOMINIO_RAIZ; ?>/bizkaia/playadebakio/fichas/playa-de-bakio.php';
$graph_Meta_Tags_property_type = 'website';

$twiterCards_card = 'summary_large_image';
$twiterCards_site = '@laya_garcia';
$twiterCards_title = 'Playa de Bakio - Información y Turismo';
$twiterCards_descripcion = 'Descubre la Playa de Bakio, un destino perfecto en la Costa Vasca para practicar surf, pasear por la costa y disfrutar de la gastronomía local.';
$twiterCards_image = '<?= PATH_DOMINIO_RAIZ; ?>/bizkaia/playadebakio/playa-de-bakio.jpg';
$twiterCards_url = '<?= PATH_DOMINIO_RAIZ; ?>/bizkaia/playadebakio/fichas/playa-de-bakio.php?i=1';

$pinterest_property_card_card_content = 'summary_large_image';
$pinterest_property_card_title_content = 'Playa de Bakio - Información y Turismo';
$pinterest_property_card_description_content = 'Descubre la Playa de Bakio, un destino perfecto en la Costa Vasca para practicar surf, pasear por la costa y disfrutar de la gastronomía local.';
$pinterest_property_card_image_content = '<?= PATH_DOMINIO_RAIZ; ?>/bizkaia/playadebakio/playa-de-bakio.jpg';

$href_styles = './../fichas/css/styles.css';


////////
// Para el archivo Structured_data_generico.php
$localidad = 'Bakio';
$localidad_minuscula = 'bakio';

$descripcion = 'Explora la Playa de Bakio, conocida por sus olas perfectas para surfear y su hermoso entorno natural, ideal para pasear y disfrutar del aire libre.';
$url = '<?= PATH_DOMINIO_RAIZ; ?>/bizkaia/playadebakio/fichas/playa-de-bakio.php';

$mainEntity_description = 'La Playa de Bakio es famosa por su ambiente relajado, extensas playas de arena fina, y olas que la convierten en un paraíso para los surfistas.';
$mainEntity_addressLocality = 'Bakio';
$mainEntity_addressRegion = 'bizkaia';
$mainEntity_addressCountry = 'España';

$mainEntity_geo_latitude = 43.4287;
$mainEntity_geo_longitude = -2.8166;

$mainEntity_image = 'https://example.com/path/to/bakio-image.jpg';
$mainEntity_url = '<?= PATH_DOMINIO_RAIZ; ?>/bizkaia/playade' . $localidad_minuscula . '/fichas/playa-de-' . $localidad_minuscula . '.php';
////////

require "./../../../../bloques/estructura/head.php"; ?>

<body>
    <?php $page = 'playade'.$localidad_minuscula; ?>
    <?php require "./sections/info.php"; ?>    
    <?php require "./../../../../bloques/estructura/body_generico.php"; ?>
</body>

</html>