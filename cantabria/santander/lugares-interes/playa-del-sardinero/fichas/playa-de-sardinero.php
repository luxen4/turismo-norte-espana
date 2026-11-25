<!DOCTYPE html>
<html lang="es">

<?php
$localidad = 'Sardinero';
$region = 'Cantabria';
$site_verification_content = 'e148bdbc89c019bd06122ab7bd08a8be'; // Asegúrate de que este código es correcto para la Playa del Sardinero si se utiliza para verificación
$description_content = 'Explora la Playa del Sardinero, una de las playas más emblemáticas de Santander, ideal para disfrutar del sol, practicar deportes acuáticos y pasear por su extenso arenal.';
$keywords_content = 'Playa del Sardinero, playa Santander, sol, mar, deportes acuáticos, turismo en Cantabria, Sardinero';

$graph_Meta_Tags_property_title = 'Playa del Sardinero - Información y Turismo';
$graph_Meta_Tags_property_description = 'Explora la Playa del Sardinero, una de las playas más emblemáticas de Santander, ideal para disfrutar del sol, practicar deportes acuáticos y pasear por su extenso arenal.';
$graph_Meta_Tags_property_image = '<?= PATH_DOMINIO_RAIZ; ?>/cantabria/playadelsardinero/playa-del-sardinero.jpg';
$graph_Meta_Tags_property_url = '<?= PATH_DOMINIO_RAIZ; ?>/cantabria/playadelsardinero/fichas/playa-del-sardinero.php';
$graph_Meta_Tags_property_type = 'website';

$twiterCards_card = 'summary_large_image';
$twiterCards_site = '@laya_garcia';
$twiterCards_title = 'Playa del Sardinero - Información y Turismo';
$twiterCards_descripcion = 'Explora la Playa del Sardinero, una de las playas más emblemáticas de Santander, ideal para disfrutar del sol, practicar deportes acuáticos y pasear por su extenso arenal.';
$twiterCards_image = '<?= PATH_DOMINIO_RAIZ; ?>/cantabria/playadelsardinero/playa-del-sardinero.jpg';
$twiterCards_url = '<?= PATH_DOMINIO_RAIZ; ?>/cantabria/playadelsardinero/fichas/playa-del-sardinero.php?i=1';

$pinterest_property_card_card_content = 'summary_large_image';
$pinterest_property_card_title_content = 'Playa del Sardinero - Información y Turismo';
$pinterest_property_card_description_content = 'Explora la Playa del Sardinero, una de las playas más emblemáticas de Santander, ideal para disfrutar del sol, practicar deportes acuáticos y pasear por su extenso arenal.';
$pinterest_property_card_image_content = '<?= PATH_DOMINIO_RAIZ; ?>/cantabria/playadelsardinero/playa-del-sardinero.jpg';

$href_styles = './../fichas/css/styles.css';

////////
// Para el archivo Structured_data_generico.php
$localidad = 'Sardinero';
$localidad_minuscula = 'sardinero';

$descripcion = 'Explora la Playa del Sardinero, un destino famoso por su gran extensión, arena dorada, y vibrante ambiente costero en Santander.';
$url = '<?= PATH_DOMINIO_RAIZ; ?>/cantabria/playadelsardinero/fichas/playa-del-sardinero.php';

$mainEntity_description = 'La Playa del Sardinero es una de las playas más icónicas de Santander, conocida por su amplia extensión, arena fina y un ambiente vibrante que atrae a visitantes de todas partes.';
$mainEntity_addressLocality = 'Santander';
$mainEntity_addressRegion = 'Cantabria';
$mainEntity_addressCountry = 'España';

$mainEntity_geo_latitude = 43.4623;
$mainEntity_geo_longitude = -3.8067;

$mainEntity_image = 'https://example.com/path/to/sardinero-image.jpg';
$mainEntity_url = '<?= PATH_DOMINIO_RAIZ; ?>/cantabria/playadelsardinero/fichas/playa-del-sardinero.php';
////////

require "./../../../../bloques/estructura/head.php"; ?>

<body>
    <?php $page = 'playade'.$localidad_minuscula; ?>
    <?php require "./sections/info.php"; ?>    
    <?php require "./../../../../bloques/estructura/body_generico.php"; ?>
</body>

</html>