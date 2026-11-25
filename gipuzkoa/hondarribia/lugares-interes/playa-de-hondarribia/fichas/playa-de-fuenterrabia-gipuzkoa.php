<!DOCTYPE html>
<html lang="es">

<?php
$localidad = 'Fuenterrabía';
$region = 'Guipuzcoa';
$site_verification_content = 'e148bdbc89c019bd06122ab7bd08a8be'; // Asegúrate de que este código es correcto para Fuenterrabía si se utiliza para verificación
$description_content = 'Descubre la Playa de Fuenterrabía, una hermosa playa en el País Vasco, ideal para disfrutar de un entorno natural único, practicar deportes acuáticos y explorar la histórica localidad de Fuenterrabía.';
$keywords_content = 'Playa de Fuenterrabía, deportes acuáticos, naturaleza, Costa Vasca, turismo en Gipuzkoa, Fuenterrabía';

$graph_Meta_Tags_property_title = 'Playa de Fuenterrabía - Información y Turismo';
$graph_Meta_Tags_property_description = 'Descubre la Playa de Fuenterrabía, una hermosa playa en el País Vasco, ideal para disfrutar de un entorno natural único, practicar deportes acuáticos y explorar la histórica localidad de Fuenterrabía.';
$graph_Meta_Tags_property_image = '<?= PATH_DOMINIO_RAIZ; ?>/guipuzkoa/playadefuenterrabia/playa-de-fuenterrabia.jpg';
$graph_Meta_Tags_property_url = '<?= PATH_DOMINIO_RAIZ; ?>/guipuzkoa/playadefuenterrabia/fichas/playa-de-fuenterrabia.php';
$graph_Meta_Tags_property_type = 'website';

$twiterCards_card = 'summary_large_image';
$twiterCards_site = '@laya_garcia';
$twiterCards_title = 'Playa de Fuenterrabía - Información y Turismo';
$twiterCards_descripcion = 'Descubre la Playa de Fuenterrabía, una hermosa playa en el País Vasco, ideal para disfrutar de un entorno natural único, practicar deportes acuáticos y explorar la histórica localidad de Fuenterrabía.';
$twiterCards_image = '<?= PATH_DOMINIO_RAIZ; ?>/guipuzkoa/playadefuenterrabia/playa-de-fuenterrabia.jpg';
$twiterCards_url = '<?= PATH_DOMINIO_RAIZ; ?>/guipuzkoa/playadefuenterrabia/fichas/playa-de-fuenterrabia.php?i=1';

$pinterest_property_card_card_content = 'summary_large_image';
$pinterest_property_card_title_content = 'Playa de Fuenterrabía - Información y Turismo';
$pinterest_property_card_description_content = 'Descubre la Playa de Fuenterrabía, una hermosa playa en el País Vasco, ideal para disfrutar de un entorno natural único, practicar deportes acuáticos y explorar la histórica localidad de Fuenterrabía.';
$pinterest_property_card_image_content = '<?= PATH_DOMINIO_RAIZ; ?>/guipuzkoa/playadefuenterrabia/playa-de-fuenterrabia.jpg';

$href_styles = './../fichas/css/styles.css';


////////
// Para el archivo Structured_data_generico.php
$localidad = 'Fuenterrabía';
$localidad_minuscula = 'fuenterrabia';

$descripcion = 'Descubre la Playa de Fuenterrabía, un destino ideal para disfrutar de un entorno natural único, practicar deportes acuáticos y explorar la histórica localidad de Fuenterrabía.';
$url = '<?= PATH_DOMINIO_RAIZ; ?>/guipuzkoa/playadefuenterrabia/fichas/playa-de-fuenterrabia.php';

$mainEntity_description = 'La Playa de Fuenterrabía es un lugar privilegiado en el País Vasco, conocido por su belleza natural, arena dorada, y su cercanía a la histórica localidad de Fuenterrabía.';
$mainEntity_addressLocality = 'Fuenterrabía';
$mainEntity_addressRegion = 'Gipuzkoa';
$mainEntity_addressCountry = 'España';

$mainEntity_geo_latitude = 43.3667;
$mainEntity_geo_longitude = -1.7903;

$mainEntity_image = 'https://example.com/path/to/fuenterrabia-image.jpg';
$mainEntity_url = '<?= PATH_DOMINIO_RAIZ; ?>/guipuzkoa/playade' . $localidad_minuscula . '/fichas/playa-de-' . $localidad_minuscula . '.php';
////////

require "./../../../../bloques/estructura/head.php"; ?>

<body>
    <?php $page = 'playade'.$localidad_minuscula; ?>
    <?php require "./sections/info.php"; ?>    
    <?php require "./../../../../bloques/estructura/body_generico.php"; ?>
</body>

</html>
