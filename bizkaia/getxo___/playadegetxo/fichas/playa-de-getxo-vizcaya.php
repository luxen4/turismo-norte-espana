<!DOCTYPE html>
<html lang="es">

<?php
$localidad = 'Getxo';
$region = 'bizkaia';
$site_verification_content = 'e148bdbc89c019bd06122ab7bd08a8be'; // Asegúrate de que este código es correcto para Getxo si se utiliza para verificación
$description_content = 'Explora la Playa de Getxo, un hermoso arenal en la costa de bizkaia, ideal para disfrutar de la playa, paseos marítimos y una rica oferta gastronómica.';
$keywords_content = 'Playa de Getxo, playa, costa de bizkaia, turismo en Getxo, paseo marítimo, gastronomía vasca';

$graph_Meta_Tags_property_title = 'Playa de Getxo - Información y Turismo';
$graph_Meta_Tags_property_description = 'Explora la Playa de Getxo, un hermoso arenal en la costa de bizkaia, ideal para disfrutar de la playa, paseos marítimos y una rica oferta gastronómica.';
$graph_Meta_Tags_property_image = '<?= PATH_DOMINIO_RAIZ; ?>/bizkaia/playadegetxo/playa-de-getxo.jpg';
$graph_Meta_Tags_property_url = '<?= PATH_DOMINIO_RAIZ; ?>/bizkaia/playadegetxo/fichas/playa-de-getxo.php';
$graph_Meta_Tags_property_type = 'website';

$twiterCards_card = 'summary_large_image';
$twiterCards_site = '@laya_garcia';
$twiterCards_title = 'Playa de Getxo - Información y Turismo';
$twiterCards_descripcion = 'Explora la Playa de Getxo, un hermoso arenal en la costa de bizkaia, ideal para disfrutar de la playa, paseos marítimos y una rica oferta gastronómica.';
$twiterCards_image = '<?= PATH_DOMINIO_RAIZ; ?>/bizkaia/playadegetxo/playa-de-getxo.jpg';
$twiterCards_url = '<?= PATH_DOMINIO_RAIZ; ?>/bizkaia/playadegetxo/fichas/playa-de-getxo.php?i=1';

$pinterest_property_card_card_content = 'summary_large_image';
$pinterest_property_card_title_content = 'Playa de Getxo - Información y Turismo';
$pinterest_property_card_description_content = 'Explora la Playa de Getxo, un hermoso arenal en la costa de bizkaia, ideal para disfrutar de la playa, paseos marítimos y una rica oferta gastronómica.';
$pinterest_property_card_image_content = '<?= PATH_DOMINIO_RAIZ; ?>/bizkaia/playadegetxo/playa-de-getxo.jpg';

$href_styles = './../fichas/css/styles.css';


////////
// Para el archivo Structured_data_generico.php
$localidad = 'Getxo';
$localidad_minuscula = 'getxo';

$descripcion = 'Explora la Playa de Getxo, un destino encantador en la costa de bizkaia, ideal para disfrutar de la playa, paseos marítimos y una vibrante vida local.';
$url = '<?= PATH_DOMINIO_RAIZ; ?>/bizkaia/playadegetxo/fichas/playa-de-getxo.php';

$mainEntity_description = 'La Playa de Getxo es un lugar destacado en la costa de bizkaia, conocida por su arena dorada, sus impresionantes vistas al mar y su animado paseo marítimo.';
$mainEntity_addressLocality = 'Getxo';
$mainEntity_addressRegion = 'bizkaia';
$mainEntity_addressCountry = 'España';

$mainEntity_geo_latitude = 43.3231;
$mainEntity_geo_longitude = -3.0027;

$mainEntity_image = 'https://example.com/path/to/getxo-image.jpg';
$mainEntity_url = '<?= PATH_DOMINIO_RAIZ; ?>/bizkaia/playade' . $localidad_minuscula . '/fichas/playa-de-' . $localidad_minuscula . '.php';
////////

require "./../../../../bloques/estructura/head.php"; ?>

<body>
    <?php $page = 'playade'.$localidad_minuscula; ?>
    <?php require "./sections/info.php"; ?>    
    <?php require "./../../../../bloques/estructura/body_generico.php"; ?>
</body>

</html>
