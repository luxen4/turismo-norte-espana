<!DOCTYPE html>
<html lang="es">

<?php
$localidad = 'Azkorri';
$region = 'Vizcaya';
$site_verification_content = 'e148bdbc89c019bd06122ab7bd08a8be'; // Asegúrate de que este código es correcto para Azkorri si se utiliza para verificación
$description_content = 'Explora la Playa de Azkorri, un enclave natural en la costa de Vizcaya, ideal para disfrutar de la tranquilidad, surf y vistas impresionantes del paisaje vasco.';
$keywords_content = 'Playa de Azkorri, surf, naturaleza, costa de Vizcaya, turismo en Vizcaya, Azkorri';

$graph_Meta_Tags_property_title = 'Playa de Azkorri - Información y Turismo';
$graph_Meta_Tags_property_description = 'Explora la Playa de Azkorri, un enclave natural en la costa de Vizcaya, ideal para disfrutar de la tranquilidad, surf y vistas impresionantes del paisaje vasco.';
$graph_Meta_Tags_property_image = '<?= PATH_DOMINIO_RAIZ; ?>/vizcaya/playadeazkorri/playa-de-azkorri.jpg';
$graph_Meta_Tags_property_url = '<?= PATH_DOMINIO_RAIZ; ?>/vizcaya/playadeazkorri/fichas/playa-de-azkorri.php';
$graph_Meta_Tags_property_type = 'website';

$twiterCards_card = 'summary_large_image';
$twiterCards_site = '@laya_garcia';
$twiterCards_title = 'Playa de Azkorri - Información y Turismo';
$twiterCards_descripcion = 'Explora la Playa de Azkorri, un enclave natural en la costa de Vizcaya, ideal para disfrutar de la tranquilidad, surf y vistas impresionantes del paisaje vasco.';
$twiterCards_image = '<?= PATH_DOMINIO_RAIZ; ?>/vizcaya/playadeazkorri/playa-de-azkorri.jpg';
$twiterCards_url = '<?= PATH_DOMINIO_RAIZ; ?>/vizcaya/playadeazkorri/fichas/playa-de-azkorri.php?i=1';

$pinterest_property_card_card_content = 'summary_large_image';
$pinterest_property_card_title_content = 'Playa de Azkorri - Información y Turismo';
$pinterest_property_card_description_content = 'Explora la Playa de Azkorri, un enclave natural en la costa de Vizcaya, ideal para disfrutar de la tranquilidad, surf y vistas impresionantes del paisaje vasco.';
$pinterest_property_card_image_content = '<?= PATH_DOMINIO_RAIZ; ?>/vizcaya/playadeazkorri/playa-de-azkorri.jpg';

$href_styles = './../fichas/css/styles.css';


////////
// Para el archivo Structured_data_generico.php
$localidad = 'Azkorri';
$localidad_minuscula = 'azkorri';

$descripcion = 'Explora la Playa de Azkorri, un destino conocido por su entorno natural, perfecto para la práctica del surf y disfrutar de la serenidad del mar Cantábrico.';
$url = '<?= PATH_DOMINIO_RAIZ; ?>/vizcaya/playadeazkorri/fichas/playa-de-azkorri.php';

$mainEntity_description = 'La Playa de Azkorri es un lugar único en la costa de Vizcaya, con su arena oscura, impresionantes acantilados, y excelentes condiciones para el surf.';
$mainEntity_addressLocality = 'Azkorri';
$mainEntity_addressRegion = 'bizkaia';
$mainEntity_addressCountry = 'España';

$mainEntity_geo_latitude = 43.3746;
$mainEntity_geo_longitude = -3.0152;

$mainEntity_image = 'https://example.com/path/to/azkorri-image.jpg';
$mainEntity_url = '<?= PATH_DOMINIO_RAIZ; ?>/vizcaya/playade' . $localidad_minuscula . '/fichas/playa-de-' . $localidad_minuscula . '.php';
////////

require "./../../../../bloques/estructura/head.php"; ?>

<body>
    <?php $page = 'playade'.$localidad_minuscula; ?>
    <?php require "./sections/info.php"; ?>    
    <?php require "./../../../../bloques/estructura/body_generico.php"; ?>
</body>

</html>
