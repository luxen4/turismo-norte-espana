<!DOCTYPE html>
<html lang="es">

<?php
$localidad = 'Laga';
$region = 'Vizcaya';
$site_verification_content = 'e148bdbc89c019bd06122ab7bd08a8be'; // Asegúrate de que este código es correcto para Laga si se utiliza para verificación
$description_content = 'Descubre la Playa de Laga, una playa de ensueño en el País Vasco, conocida por su belleza natural y su ambiente tranquilo, ideal para surfistas y amantes de la naturaleza.';
$keywords_content = 'Playa de Laga, surf, naturaleza, costa vasca, turismo en bizkaia, playas del País Vasco';

$graph_Meta_Tags_property_title = 'Playa de Laga - Información y Turismo';
$graph_Meta_Tags_property_description = 'Descubre la Playa de Laga, una playa de ensueño en el País Vasco, conocida por su belleza natural y su ambiente tranquilo, ideal para surfistas y amantes de la naturaleza.';
$graph_Meta_Tags_property_image = '<?= PATH_DOMINIO_RAIZ; ?>/bizkaia/playa-de-laga/playa-de-laga.jpg';
$graph_Meta_Tags_property_url = '<?= PATH_DOMINIO_RAIZ; ?>/bizkaia/playa-de-laga/fichas/playa-de-laga.php';
$graph_Meta_Tags_property_type = 'website';

$twiterCards_card = 'summary_large_image';
$twiterCards_site = '@laya_garcia';
$twiterCards_title = 'Playa de Laga - Información y Turismo';
$twiterCards_descripcion = 'Descubre la Playa de Laga, una playa de ensueño en el País Vasco, conocida por su belleza natural y su ambiente tranquilo, ideal para surfistas y amantes de la naturaleza.';
$twiterCards_image = '<?= PATH_DOMINIO_RAIZ; ?>/bizkaia/playa-de-laga/playa-de-laga.jpg';
$twiterCards_url = '<?= PATH_DOMINIO_RAIZ; ?>/bizkaia/playa-de-laga/fichas/playa-de-laga.php?i=1';

$pinterest_property_card_card_content = 'summary_large_image';
$pinterest_property_card_title_content = 'Playa de Laga - Información y Turismo';
$pinterest_property_card_description_content = 'Descubre la Playa de Laga, una playa de ensueño en el País Vasco, conocida por su belleza natural y su ambiente tranquilo, ideal para surfistas y amantes de la naturaleza.';
$pinterest_property_card_image_content = '<?= PATH_DOMINIO_RAIZ; ?>/bizkaia/playa-de-laga/playa-de-laga.jpg';

$href_styles = './../fichas/css/styles.css';


////////
// Para el archivo Structured_data_generico.php
$localidad = 'Laga';
$localidad_minuscula = 'laga';

$descripcion = 'Descubre la Playa de Laga, una playa de ensueño en el País Vasco, conocida por su belleza natural y su ambiente tranquilo, ideal para surfistas y amantes de la naturaleza.';
$url = '<?= PATH_DOMINIO_RAIZ; ?>/bizkaia/playa-de-laga/fichas/playa-de-laga.php';

$mainEntity_description = 'La Playa de Laga es una playa impresionante en el País Vasco, destacada por su belleza natural y sus excelentes condiciones para el surf, así como por su ambiente relajado y pintoresco.';
$mainEntity_addressLocality = 'Laga';
$mainEntity_addressRegion = 'bizkaia';
$mainEntity_addressCountry = 'España';

$mainEntity_geo_latitude = 43.3820;
$mainEntity_geo_longitude = -2.7660;

$mainEntity_image = 'https://example.com/path/to/laga-image.jpg';
$mainEntity_url = '<?= PATH_DOMINIO_RAIZ; ?>/bizkaia/playa-de-' . $localidad_minuscula . '/fichas/playa-de-' . $localidad_minuscula . '.php';
////////

require "./../../../../bloques/estructura/head.php"; ?>

<body>
    <?php $page = 'playade'.$localidad_minuscula;?>
    <?php require "./sections/info.php"; ?>    
    <?php require "./../../../../bloques/estructura/body_generico.php"; ?>
</body>

</html>
