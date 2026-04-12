<!DOCTYPE html>
<html lang="es">

<?php
$localidad = 'Zarautz';
$region = 'Guipuzcoa';
$site_verification_content = 'e148bdbc89c019bd06122ab7bd08a8be'; // Asegúrate de que este código es correcto para Zarautz si se utiliza para verificación
$description_content = 'Explora la Playa de Zarautz, un extenso arenal en el País Vasco, ideal para el surf, paseos por la costa y disfrutar de la gastronomía vasca.';
$keywords_content = 'Playa de Zarautz, surf, naturaleza, paseo marítimo, Costa Vasca, turismo en Gipuzkoa, Zarautz';

$graph_Meta_Tags_property_title = 'Playa de Zarautz - Información y Turismo';
$graph_Meta_Tags_property_description = 'Explora la Playa de Zarautz, un extenso arenal en el País Vasco, ideal para el surf, paseos por la costa y disfrutar de la gastronomía vasca.';
$graph_Meta_Tags_property_image = '<?= PATH_DOMINIO_RAIZ; ?>/guipuzkoa/playadezarautz/playa-de-zarautz.jpg';
$graph_Meta_Tags_property_url = '<?= PATH_DOMINIO_RAIZ; ?>/guipuzkoa/playadezarautz/fichas/playa-de-zarautz.php';
$graph_Meta_Tags_property_type = 'website';

$twiterCards_card = 'summary_large_image';
$twiterCards_site = '@laya_garcia';
$twiterCards_title = 'Playa de Zarautz - Información y Turismo';
$twiterCards_descripcion = 'Explora la Playa de Zarautz, un extenso arenal en el País Vasco, ideal para el surf, paseos por la costa y disfrutar de la gastronomía vasca.';
$twiterCards_image = '<?= PATH_DOMINIO_RAIZ; ?>/guipuzkoa/playadezarautz/playa-de-zarautz.jpg';
$twiterCards_url = '<?= PATH_DOMINIO_RAIZ; ?>/guipuzkoa/playadezarautz/fichas/playa-de-zarautz.php?i=1';

$pinterest_property_card_card_content = 'summary_large_image';
$pinterest_property_card_title_content = 'Playa de Zarautz - Información y Turismo';
$pinterest_property_card_description_content = 'Explora la Playa de Zarautz, un extenso arenal en el País Vasco, ideal para el surf, paseos por la costa y disfrutar de la gastronomía vasca.';
$pinterest_property_card_image_content = '<?= PATH_DOMINIO_RAIZ; ?>/guipuzkoa/playadezarautz/playa-de-zarautz.jpg';

$href_styles = './../fichas/css/styles.css';


////////
// Para el archivo Structured_data_generico.php
$localidad = 'Zarautz';
$localidad_minuscula = 'zarautz';

$descripcion = 'Explora la Playa de Zarautz, un destino famoso por su largo arenal, excelente para practicar surf y disfrutar de un vibrante paseo marítimo lleno de vida.';
$url = '<?= PATH_DOMINIO_RAIZ; ?>/guipuzkoa/playadezarautz/fichas/playa-de-zarautz.php';

$mainEntity_description = 'La Playa de Zarautz es una de las playas más emblemáticas del País Vasco, conocida por su gran extensión, arena dorada, y excelentes condiciones para el surf.';
$mainEntity_addressLocality = 'Zarautz';
$mainEntity_addressRegion = 'Gipuzkoa';
$mainEntity_addressCountry = 'España';

$mainEntity_geo_latitude = 43.2846;
$mainEntity_geo_longitude = -2.1699;

$mainEntity_image = 'https://example.com/path/to/zarautz-image.jpg';
$mainEntity_url = '<?= PATH_DOMINIO_RAIZ; ?>/guipuzkoa/playade' . $localidad_minuscula . '/fichas/playa-de-' . $localidad_minuscula . '.php';
////////

require "./../../../../bloques/estructura/head.php"; ?>

<body>
    <?php $page = 'playade'.$localidad_minuscula; ?>
    <?php require "./sections/info.php"; ?>    
    <?php require "./../../../../bloques/estructura/body_generico.php"; ?>
</body>

</html>
