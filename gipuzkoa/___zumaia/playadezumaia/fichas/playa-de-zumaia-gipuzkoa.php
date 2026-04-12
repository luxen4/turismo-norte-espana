<!DOCTYPE html>
<html lang="es">

<?php
$localidad = 'Zumaia';
$region = 'Guipuzcoa';
$site_verification_content = 'e148bdbc89c019bd06122ab7bd08a8be'; // Asegúrate de que este código es correcto para Zumaia si se utiliza para verificación
$description_content = 'Descubre la Playa de Zumaia, un lugar único en el País Vasco con impresionantes formaciones rocosas Flysch, ideal para los amantes de la naturaleza y el senderismo costero.';
$keywords_content = 'Playa de Zumaia, Flysch, naturaleza, senderismo, Costa Vasca, turismo en Gipuzkoa, Zumaia';

$graph_Meta_Tags_property_title = 'Playa de Zumaia - Información y Turismo';
$graph_Meta_Tags_property_description = 'Descubre la Playa de Zumaia, un lugar único en el País Vasco con impresionantes formaciones rocosas Flysch, ideal para los amantes de la naturaleza y el senderismo costero.';
$graph_Meta_Tags_property_image = '<?= PATH_DOMINIO_RAIZ; ?>/guipuzkoa/playadezumaia/playa-de-zumaia.jpg';
$graph_Meta_Tags_property_url = '<?= PATH_DOMINIO_RAIZ; ?>/guipuzkoa/playadezumaia/fichas/playa-de-zumaia.php';
$graph_Meta_Tags_property_type = 'website';

$twiterCards_card = 'summary_large_image';
$twiterCards_site = '@laya_garcia';
$twiterCards_title = 'Playa de Zumaia - Información y Turismo';
$twiterCards_descripcion = 'Descubre la Playa de Zumaia, un lugar único en el País Vasco con impresionantes formaciones rocosas Flysch, ideal para los amantes de la naturaleza y el senderismo costero.';
$twiterCards_image = '<?= PATH_DOMINIO_RAIZ; ?>/guipuzkoa/playadezumaia/playa-de-zumaia.jpg';
$twiterCards_url = '<?= PATH_DOMINIO_RAIZ; ?>/guipuzkoa/playadezumaia/fichas/playa-de-zumaia.php?i=1';

$pinterest_property_card_card_content = 'summary_large_image';
$pinterest_property_card_title_content = 'Playa de Zumaia - Información y Turismo';
$pinterest_property_card_description_content = 'Descubre la Playa de Zumaia, un lugar único en el País Vasco con impresionantes formaciones rocosas Flysch, ideal para los amantes de la naturaleza y el senderismo costero.';
$pinterest_property_card_image_content = '<?= PATH_DOMINIO_RAIZ; ?>/guipuzkoa/playadezumaia/playa-de-zumaia.jpg';

$href_styles = './../fichas/css/styles.css';


////////
// Para el archivo Structured_data_generico.php
$localidad = 'Zumaia';
$localidad_minuscula = 'zumaia';

$descripcion = 'Descubre la Playa de Zumaia, famosa por su paisaje geológico de Flysch, un destino imperdible para los amantes de la geología y el senderismo.';
$url = '<?= PATH_DOMINIO_RAIZ; ?>/guipuzkoa/playadezumaia/fichas/playa-de-zumaia.php';

$mainEntity_description = 'La Playa de Zumaia es un lugar icónico del País Vasco, conocida por sus formaciones rocosas Flysch, que revelan millones de años de historia geológica.';
$mainEntity_addressLocality = 'Zumaia';
$mainEntity_addressRegion = 'Gipuzkoa';
$mainEntity_addressCountry = 'España';

$mainEntity_geo_latitude = 43.2964;
$mainEntity_geo_longitude = -2.2550;

$mainEntity_image = 'https://example.com/path/to/zumaia-image.jpg';
$mainEntity_url = '<?= PATH_DOMINIO_RAIZ; ?>/guipuzkoa/playade' . $localidad_minuscula . '/fichas/playa-de-' . $localidad_minuscula . '.php';
////////

require "./../../../../bloques/estructura/head.php"; ?>

<body>
    <?php $page = 'playade'.$localidad_minuscula; ?>
    <?php require "./sections/info.php"; ?>    
    <?php require "./../../../../bloques/estructura/body_generico.php"; ?>
</body>

</html>
