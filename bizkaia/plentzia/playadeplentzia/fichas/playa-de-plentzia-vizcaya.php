<!DOCTYPE html>
<html lang="es">

<?php
$localidad = 'Plentzia';
$region = 'Vizcaya';
$site_verification_content = 'e148bdbc89c019bd06122ab7bd08a8be'; // Asegúrate de que este código es correcto para Plentzia si se utiliza para verificación
$description_content = 'Descubre la Playa de Plentzia, un hermoso arenal en la costa de bizkaia, ideal para disfrutar de un día en familia, practicar deportes acuáticos y explorar la encantadora villa de Plentzia.';
$keywords_content = 'Playa de Plentzia, deportes acuáticos, naturaleza, paseo marítimo, Costa Vasca, turismo en bizkaia, Plentzia';

$graph_Meta_Tags_property_title = 'Playa de Plentzia - Información y Turismo';
$graph_Meta_Tags_property_description = 'Descubre la Playa de Plentzia, un hermoso arenal en la costa de bizkaia, ideal para disfrutar de un día en familia, practicar deportes acuáticos y explorar la encantadora villa de Plentzia.';
$graph_Meta_Tags_property_image = '<?= PATH_DOMINIO_RAIZ; ?>/bizkaia/playadeplentzia/playa-de-plentzia.jpg';
$graph_Meta_Tags_property_url = '<?= PATH_DOMINIO_RAIZ; ?>/bizkaia/playadeplentzia/fichas/playa-de-plentzia.php';
$graph_Meta_Tags_property_type = 'website';

$twiterCards_card = 'summary_large_image';
$twiterCards_site = '@laya_garcia';
$twiterCards_title = 'Playa de Plentzia - Información y Turismo';
$twiterCards_descripcion = 'Descubre la Playa de Plentzia, un hermoso arenal en la costa de bizkaia, ideal para disfrutar de un día en familia, practicar deportes acuáticos y explorar la encantadora villa de Plentzia.';
$twiterCards_image = '<?= PATH_DOMINIO_RAIZ; ?>/bizkaia/playadeplentzia/playa-de-plentzia.jpg';
$twiterCards_url = '<?= PATH_DOMINIO_RAIZ; ?>/bizkaia/playadeplentzia/fichas/playa-de-plentzia.php?i=1';

$pinterest_property_card_card_content = 'summary_large_image';
$pinterest_property_card_title_content = 'Playa de Plentzia - Información y Turismo';
$pinterest_property_card_description_content = 'Descubre la Playa de Plentzia, un hermoso arenal en la costa de bizkaia, ideal para disfrutar de un día en familia, practicar deportes acuáticos y explorar la encantadora villa de Plentzia.';
$pinterest_property_card_image_content = '<?= PATH_DOMINIO_RAIZ; ?>/bizkaia/playadeplentzia/playa-de-plentzia.jpg';

//$href_styles = './../fichas/css/styles.css';


////////
// Para el archivo Structured_data_generico.php
$localidad = 'Plentzia';
$localidad_minuscula = 'plentzia';

$descripcion = 'Descubre la Playa de Plentzia, un destino ideal en la costa de bizkaia, conocido por su arena dorada y un ambiente familiar, perfecto para disfrutar de deportes acuáticos y paseos relajados.';
$url = '<?= PATH_DOMINIO_RAIZ; ?>/bizkaia/playadeplentzia/fichas/playa-de-plentzia.php';

$mainEntity_description = 'La Playa de Plentzia es una joya en la costa de bizkaia, conocida por su ambiente tranquilo, arena dorada y excelentes opciones para practicar deportes acuáticos.';
$mainEntity_addressLocality = 'Plentzia';
$mainEntity_addressRegion = 'bizkaia';
$mainEntity_addressCountry = 'España';

$mainEntity_geo_latitude = 43.4107;
$mainEntity_geo_longitude = -2.9483;

$mainEntity_image = 'https://example.com/path/to/plentzia-image.jpg';
$mainEntity_url = '<?= PATH_DOMINIO_RAIZ; ?>/bizkaia/playade' . $localidad_minuscula . '/fichas/playa-de-' . $localidad_minuscula . '.php';
////////

require "./../../../../bloques/estructura/head.php"; ?>

<body>
    <?php $page = 'playade'.$localidad_minuscula; ?>
    <?php require "./sections/info.php"; ?>    
    <?php require "./../../../../bloques/estructura/body_generico.php"; ?>
</body>

</html>
