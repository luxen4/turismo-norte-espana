<!DOCTYPE html>
<html lang="es">

<?php
$localidad = 'Sopelana';
$region = 'Vizcaya';
$site_verification_content = 'e148bdbc89c019bd06122ab7bd08a8be'; // Asegúrate de que este código es correcto para Sopelana si se utiliza para verificación
$description_content = 'Explora la Playa de Sopelana, una impresionante playa en el País Vasco, famosa por su arena dorada y excelentes condiciones para el surf. Ideal para disfrutar del mar y la costa vasca.';
$keywords_content = 'Playa de Sopelana, surf, naturaleza, arena dorada, costa vasca, turismo en bizkaia, Sopelana';

$graph_Meta_Tags_property_title = 'Playa de Sopelana - Información y Turismo';
$graph_Meta_Tags_property_description = 'Explora la Playa de Sopelana, una impresionante playa en el País Vasco, famosa por su arena dorada y excelentes condiciones para el surf. Ideal para disfrutar del mar y la costa vasca.';
$graph_Meta_Tags_property_image = '<?= PATH_DOMINIO_RAIZ; ?>/bizkaia/playadesopelana/playa-de-sopelana.jpg';
$graph_Meta_Tags_property_url = '<?= PATH_DOMINIO_RAIZ; ?>/bizkaia/playadesopelana/fichas/playa-de-sopelana.php';
$graph_Meta_Tags_property_type = 'website';

$twiterCards_card = 'summary_large_image';
$twiterCards_site = '@laya_garcia';
$twiterCards_title = 'Playa de Sopelana - Información y Turismo';
$twiterCards_descripcion = 'Explora la Playa de Sopelana, una impresionante playa en el País Vasco, famosa por su arena dorada y excelentes condiciones para el surf. Ideal para disfrutar del mar y la costa vasca.';
$twiterCards_image = '<?= PATH_DOMINIO_RAIZ; ?>/bizkaia/playadesopelana/playa-de-sopelana.jpg';
$twiterCards_url = '<?= PATH_DOMINIO_RAIZ; ?>/bizkaia/playadesopelana/fichas/playa-de-sopelana.php?i=1';

$pinterest_property_card_card_content = 'summary_large_image';
$pinterest_property_card_title_content = 'Playa de Sopelana - Información y Turismo';
$pinterest_property_card_description_content = 'Explora la Playa de Sopelana, una impresionante playa en el País Vasco, famosa por su arena dorada y excelentes condiciones para el surf. Ideal para disfrutar del mar y la costa vasca.';
$pinterest_property_card_image_content = '<?= PATH_DOMINIO_RAIZ; ?>/bizkaia/playadesopelana/playa-de-sopelana.jpg';

$href_styles = './../fichas/css/styles.css';


////////
// Para el archivo Structured_data_generico.php
$localidad = 'Sopelana';
$localidad_minuscula = 'sopelana';

$descripcion = 'Explora la Playa de Sopelana, un destino famoso por su arena dorada y sus excelentes condiciones para el surf, perfecto para disfrutar del mar y la costa vasca.';
$url = '<?= PATH_DOMINIO_RAIZ; ?>/bizkaia/playadesopelana/fichas/playa-de-sopelana.php';

$mainEntity_description = 'La Playa de Sopelana es una de las playas más destacadas de bizkaia, conocida por su amplia extensión, arena dorada y excelentes olas para surfear.';
$mainEntity_addressLocality = 'Sopelana';
$mainEntity_addressRegion = 'bizkaia';
$mainEntity_addressCountry = 'España';

$mainEntity_geo_latitude = 43.3686;
$mainEntity_geo_longitude = -2.9985;

$mainEntity_image = 'https://example.com/path/to/sopelana-image.jpg';
$mainEntity_url = '<?= PATH_DOMINIO_RAIZ; ?>/bizkaia/playadesopelana/fichas/playa-de-' . $localidad_minuscula . '.php';
////////

require "./../../../../bloques/estructura/head.php"; ?>

<body>
    <?php $page = 'playade'.$localidad_minuscula; ?>
    <?php require "./sections/info.php"; ?>    
    <?php require "./../../../../bloques/estructura/body_generico.php"; ?>
</body>

</html>